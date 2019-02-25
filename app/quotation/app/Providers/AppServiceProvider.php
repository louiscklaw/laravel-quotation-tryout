<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// https://laravel.com/docs/5.7/blade#components-and-slots
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::component('layouts.components.alert','alert');

        Blade::component('layouts.components.textInput','textInput');
        Blade::component('layouts.components.passwordInput','passwordInput');
        Blade::component('layouts.components.card_inside_title','card_inside_title');

        Blade::component('layouts.components.card','card');
        Blade::component('layouts.components.card_inside','card_inside');
        Blade::component('layouts.components.float_label_input','float_label_input');

        Blade::component('layouts.components.textarea','textarea');
        Blade::component('layouts.components.autogrowing_textarea','autogrowing_textarea');

        Blade::component('layouts.components.bootstrap_select','bootstrap_select');
        Blade::component('layouts.components.bootstrap_datepicker','bootstrap_datepicker');
        Blade::component('layouts.components.bootstrap_datepicker_daterange','bootstrap_datepicker_daterange');
        Blade::component('layouts.components.bootstrap_datetime_picker','bootstrap_datetime_picker');

        Blade::component('layouts.components.checkbox','checkbox');
        Blade::component('layouts.components.radio','radio');
        Blade::component('layouts.components.switch','switch');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
