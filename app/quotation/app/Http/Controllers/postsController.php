<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;


class postsController
{
    public function index()
    {
        $all_records = Posts::all();
        $mn_highlight = 'posts_list';
        return view('layouts.posts.list',
            compact('all_records', 'mn_highlight')
        );

    }

    public function create()
    {
        return 'post hello create';
    }
}
