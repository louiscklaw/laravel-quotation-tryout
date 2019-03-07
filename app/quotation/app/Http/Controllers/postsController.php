<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use App\User;
use App\Client;


class postsController
{
    public function index()
    {
        $all_records = Posts::all();
        $user_records = User::alL();
        $client_records = Client::all();

        $mn_highlight = 'posts_list';
        $vep_route_target = 'posts';

        var_dump($all_records['items']);
        die();
        $a = array(1,2,3,4,5);
        $b = array_map(function($c){
            var_dump($c);
            die();
        }, $all_records);
        // $all_records[0]->author = ;
        // var_dump($all_records[0]);
        var_dump($b);
        die();

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

    public function show()
    {

    }

}
