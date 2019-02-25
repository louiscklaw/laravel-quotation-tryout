
### spin a new site
`fab rebuild_docker`
add `RewriteBase /helloworld` to public/.htaccess
update `_docker/_settings/000-default.conf` , copy virtual host from blog
create db [proj_name]
update .env to use data base proj_name

update web.php
```
Route::get('/phpinfo', function () {
    return view('phpinfo');
});
```

add app/quotation/resources/views/phpinfo.blade.php
`{!! phpinfo() !!}`



### NOTES:
`composer create-project --prefer-dist laravel/laravel quotation`
