#!/usr/bin/env python

import os,sys
from fabric.api import *
from fabric.colors import *
from fabric.context_managers import *
from fabric.contrib.project import *

from time import sleep

CWD = os.path.dirname(__file__)
DOCKER_DIR = os.path.join(CWD,'_docker')
PROJ_DOCKER_DIR = DOCKER_DIR

XDOTOOL_RELOAD_SH='''WID=`xdotool search --name "Material Design - Mozilla Firefox" | head -1`; xdotool windowactivate $WID; xdotool key F5'''

CONTAINER_NAME = 'demo-quotation-web'

def docker_compose_cmd(cmd_body):
    run('docker-compose {}'.format(cmd_body) )

def docker_compose_exec(cmd_body):
    docker_compose_cmd(' exec {}'.format(cmd_body) )

def docker_compose_php_composer_install(service_name, proj_name='blog' ):
    docker_compose_exec("{} /bin/sh -c 'cd /app/{}; composer install'".format(service_name, proj_name))

def laravel_artisan_migrate(service_name, proj_name='blog' ):
    docker_compose_exec("{} /bin/sh -c 'cd /app/{}; php artisan migrate'".format(service_name, proj_name))

def laravel_reload_conf():
    with cd(DOCKER_DIR):
        run('docker cp ./_settings/000-default.conf {}:/etc/apache2/sites-available/000-default.conf'.format(CONTAINER_NAME))
        # local('docker cp ./_settings/apache2.conf laravel-tryout:/etc/apache2/sites-available/000-default.conf')
        run('docker-compose restart')
        print('restart done')

def docker_compose_run_command(command, path):
        run('docker-compose exec {} sh -c "cd {} && {}"'.format(CONTAINER_NAME, path, command))

def laravel_rebuild():
    with lcd(DOCKER_DIR):
        docker_composeP_php_composer_install('web', 'quotation')
        laravel_artisan_migrate('web', 'quotation')

def clear_laravel_cache(proj_name):
    commands=[
        # 'php artisan clear-compiled',
        'composer dump-autoload',
        # 'php artisan optimize',
    ]
    for command in commands:
        docker_compose_run_command(command,'/app/{}'.format(proj_name))

def laravel_db_migrate(proj_name):
    with lcd(DOCKER_DIR):
        # clear laravel cache
        clear_laravel_cache(proj_name)

        docker_compose_run_command('php artisan migrate:refresh','/app/{}'.format(proj_name))

        for table in ['DatabaseSeeder']:
            docker_compose_run_command('php artisan db:seed --class={}'.format(table),'/app/{}'.format( proj_name))

def mysql_create_db(db_name):
    with lcd(DOCKER_DIR):
        docker_compose_run_command('mysql -uroot -e \\"CREATE DATABASE %s\\";' % db_name, '/app/%s' % db_name)

def get_mysql_command(cmd_body):
    return 'mysql -uroot -e \\"%s\\";' % cmd_body

def reset_admin_password():
    # alter user 'admin' identified by '123456';
    with lcd(DOCKER_DIR):
        wk_path = '/app'
        mysql_command = "alter user 'admin' identified by '123456'"
        docker_compose_run_command(get_mysql_command(mysql_command), wk_path)

def drop_db_if_exist(db_name):
    # alter user 'admin' identified by '123456';
    with lcd(DOCKER_DIR):
        wk_path = '/app'
        mysql_command = "DROP DATABASE IF EXISTS %s" % db_name
        docker_compose_run_command(get_mysql_command(mysql_command), wk_path)

def rebuild_db():
    reset_admin_password()
    for db in ['quotation', 'helloworld']:
        drop_db_if_exist(db)
        mysql_create_db(db)
        laravel_db_migrate(db)

@task
def rebuild_docker():
    with cd(DOCKER_DIR):
            run('docker-compose kill')
            run('docker-compose down')
            run('docker-compose build')
            run('docker-compose up -d')

    # sleep(10)
    install_laravel('helloworld')
    # install_laravel('quotation')

    # laravel_reload_conf()

    # # print('sleep a while for docker becomes steady...')
    # sleep(60*3)
    # rebuild_db()

def release_permission(proj_home):
    with lcd(DOCKER_DIR):
        docker_compose_run_command('chown www-data:staff -R .', proj_home )

def laraveL_create_project(proj_name='blog'):
    proj_home = '/app/{}'.format(proj_name)
    with cd(DOCKER_DIR):
        run('docker-compose exec web sh -c "cd /app && composer create-project --prefer-dist laravel/laravel {}"'.format(proj_name))

@task
def install_laravel(proj_name='blog'):
    proj_home = '/'.join(['/app', proj_name])
    with cd(DOCKER_DIR):
        # docker_compose_run_command('cp .env.example .env', proj_home )
        docker_compose_run_command('chown www-data:staff -R .', proj_home )

        run('docker-compose exec {} sh -c "cd {} && composer install"'.format(CONTAINER_NAME, proj_home))
        run('docker-compose exec {} sh -c "cd {} && php artisan key:generate"'.format(CONTAINER_NAME, proj_home))

    #     laravel_db_migrate(proj_home)
    release_permission(proj_home)

@hosts('logic@localhost')
def helloworld():
    from xdo import Xdo
    xdo = Xdo()
    win_id = xdo.select_window_with_click()

    from pprint import pprint
    # pprint(win_id)
    pprint(xdo.get_window_name(win_id))

    win_id = xdo.search_windows('.+Chromium')
    pprint(win_id)

    # xdo.activate_window(win_id)
    # xdo.send_keysequence_window(win_id, "ctrl+l")
    # xdo.enter_text_window(win_id, 'Python rocks!')

def monAndTest():
    import pyinotify
    from xdo import Xdo
    from pprint import pprint
    from time import sleep

    wm = pyinotify.WatchManager()  # Watch Manager
    mask = pyinotify.IN_CLOSE_WRITE # watched events
    xdo = Xdo()

    def perform_test():
        with cd('/'.join([CWD,'_docker'])), settings(warn_only=True):
            run('docker-compose exec web sh -c "/app/blog/vendor/bin/phpunit /app/blog/tests/"')

    CWD = os.path.dirname(os.path.abspath(__file__))
    class EventHandler(pyinotify.ProcessEvent):
        def process_IN_CLOSE_WRITE(self, event):
            target = os.path.join(event.path, event.name)
            for incl_fileext in incl_fileext_list:
                if target.find(incl_fileext)> 0:
                    perform_test()
                    break
                else:
                    print(yellow('ignore file change for {}'.format(event.path)))

    # excl_lst = ['']
    # excl = pyinotify.ExcludeFilter(excl_lst)

    incl_fileext_list=['php','htm']

    print(green('start monitoring...'))
    handler = EventHandler()
    notifier = pyinotify.Notifier(wm, handler, read_freq=3)
    wdd = wm.add_watch(CWD, mask, rec=True, auto_add=True)

    notifier.loop()

def get_current_branch():
    # git branch | grep \* | cut -d ' ' -f2
    current_branch = '';
    with lcd(CWD):
        current_branch = local("git branch | grep \* | cut -d ' ' -f2", capture=True)

    return current_branch

def checkout_brach(target_branch):
    with lcd(CWD):
        local('git checkout %s' % target_branch)

def merge_branch(branch_to_merge):
    with lcd(CWD):
        local('git merge %s' % branch_to_merge)

def merge_to(target_branch):
    # get current branch
    current_branch = get_current_branch()

    # checkout target_branch
    checkout_brach(target_branch)

    # issue merge command
    merge_branch(current_branch)

    checkout_brach(current_branch)

@task
def deploy_gcp():

    print('checkout in remote site')
    local('git checkout master')
    local('git push')
    with cd(CWD):
        run('git checkout master')
        run('git pull')

    print('rebuild docker')
    with cd(PROJ_DOCKER_DIR):
        rebuild_docker()

    # with cd(CWD):
    #     run('fab -H logic@localhost install_laravel')
