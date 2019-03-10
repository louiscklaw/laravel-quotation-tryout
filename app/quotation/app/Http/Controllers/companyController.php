<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

class companyHelper
{
    public static function get_all()
    {
        return Company::all();

    }
}

class companyController extends Controller
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
        $all_records = companyHelper::get_all();
        $record_type = 'company';
        return view('layouts.company.list',[
            'all_records'=>$all_records,
            'vep_route_target'=>$record_type,
            'mn_highlight'=>'customer_company_list'
            ]);
    }
}
