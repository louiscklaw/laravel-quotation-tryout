<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;


class pageController
{
    public function index()
    {
        $all_records = Page::all();
        return view('layouts.page.list',compact('all_records'));
    }

    public function create()
    {
        return view('layouts.page.new');
    }
}
