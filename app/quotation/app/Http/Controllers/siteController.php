<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Site;

class siteHelper
{
    public static function get_all()
    {
        return site::all();

    }
}

class siteController extends Controller
{
    //
    public function show()
    {

    }

    public function create()
    {

    }

    public function index()
    {
        $all_records = siteHelper::get_all();
        $record_type = 'site';
        return view('layouts.site.list',[
            'all_records'=>$all_records,
            'vep_route_target'=>$record_type,
            'mn_highlight'=>'customer_site_list'
            ]);
    }
}
