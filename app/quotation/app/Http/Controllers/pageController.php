<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;


class pageController
{
    public function index()
    {
        return 'page hello index';
    }

    public function create()
    {
        return 'page hello create';
    }
}
