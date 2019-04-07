
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


### laravel plugin used
*"laravelcollective/html": "~5.0",
*"league/fractal": "^0.17.0",
*"yajra/laravel-datatables-oracle": "~7.5"
*yajra/laravel-datatables-fractal
*fx3costa/laravelchartjs

### NOTES:
`composer create-project --prefer-dist laravel/laravel quotation`


### TODO:
add submit bugs page
