#!/usr/bin/env python

import os,sys
from fabric.api import *
from fabric.colors import *
from fabric.context_managers import *
from fabric.contrib.project import *

CWD = os.path.dirname(__file__)
DOCKER_DIR = os.path.join(CWD,'_docker')

XDOTOOL_RELOAD_SH='''WID=`xdotool search --name "Material Design - Mozilla Firefox" | head -1`; xdotool windowactivate $WID; xdotool key F5'''

CONTAINER_NAME = 'quotation-web'

def docker_compose_cmd(cmd_body):
    local('docker-compose {}'.format(cmd_body) )

def docker_compose_exec(cmd_body):
    docker_compose_cmd(' exec {}'.format(cmd_body) )

def docker_compose_php_composer_install(service_name, proj_name='blog' ):
    docker_compose_exec("{} /bin/sh -c 'cd /app/{}; composer install'".format(service_name, proj_name))

def laravel_artisan_migrate(service_name, proj_name='blog' ):
    docker_compose_exec("{} /bin/sh -c 'cd /app/{}; php artisan migrate'".format(service_name, proj_name))

def laravel_reload_conf():
    with lcd(DOCKER_DIR):
        local('docker cp ./_settings/000-default.conf {}:/etc/apache2/sites-available/000-default.conf'.format(CONTAINER_NAME))
        # local('docker cp ./_settings/apache2.conf laravel-tryout:/etc/apache2/sites-available/000-default.conf')
        local('docker-compose restart')
        print('restart done')

def docker_compose_run_command(command, path):
        local('docker-compose exec web sh -c "cd {} && {}"'.format(path, command))

def laravel_rebuild():
    with lcd(DOCKER_DIR):
        docker_compose_php_composer_install('web', 'quotation')
        laravel_artisan_migrate('web', 'quotation')

def laravel_db_migrate(proj_name):
    with lcd(DOCKER_DIR):
        docker_compose_run_command('php artisan migrate:refresh','/app/{}'.format(proj_name))

        for table in ['ClientTableSeeder','QuotTableSeeder', 'QuotItemTableSeeder']:
            docker_compose_run_command('php artisan db:seed --class={}'.format(table),'/app/{}'.format( proj_name))

def rebuild_docker():
    with lcd(DOCKER_DIR):
            local('docker-compose kill')
            local('docker-compose down')
            local('docker-compose build')
            local('docker-compose up -d')

    install_laravel('helloworld')
    install_laravel('quotation')

    laravel_reload_conf()

    laravel_db_migrate('quotation')

def release_permission(proj_home):
    with lcd(DOCKER_DIR):
        docker_compose_run_command('chown www-data:staff -R .', proj_home )

def laraveL_create_project(proj_name='blog'):
    proj_home = '/app/{}'.format(proj_name)
    with lcd(DOCKER_DIR):
        local('docker-compose exec web sh -c "cd /app && composer create-project --prefer-dist laravel/laravel {}"'.format(proj_name))


def install_laravel(proj_name='blog'):
    proj_home = '/'.join(['/app', proj_name])
    with lcd(DOCKER_DIR):
        docker_compose_run_command('cp .env.example .env', proj_home )
        docker_compose_run_command('chown www-data:staff -R .', proj_home )

        local('docker-compose exec web sh -c "cd {} && composer install"'.format(proj_home))
        local('docker-compose exec web sh -c "cd {} && php artisan key:generate"'.format(proj_home))

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
        with lcd('/'.join([CWD,'_docker'])), settings(warn_only=True):
            local('docker-compose exec web sh -c "/app/blog/vendor/bin/phpunit /app/blog/tests/"')

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
