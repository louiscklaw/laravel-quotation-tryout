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
        $vep_route_target = 'posts';

        return view('layouts.posts.list',
            compact('all_records',
                'mn_highlight',
                'vep_route_target'
                )
        );
    }

    public function create()
    {
        return 'post hello create';
    }

    public function edit()
    {

    }

}
