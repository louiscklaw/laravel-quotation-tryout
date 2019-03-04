<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;


class postsController
{
    public function index()
    {
        return 'hello index';
    }

    public function create()
    {
        return 'post hello create';
    }
}
