<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Common;
use App\Company;


class companyHelper
{
    public static function get_record($id)
    {
        return Company::where('id',$id)->firstOrFail();
    }

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
        return view('layouts.company.edit',
            ['form_action'=>Common::$FORM_ACTION_CREATE]
            );
    }

    public function edit($id)
    {
        $quot_record = new companyHelper;
        $quot_record = companyHelper::get_record($id);
        return view('layouts.company.edit',[
            'record'=>$quot_record,
            'form_action' =>'edit',
            'editor_description' => 'client debug edit description',
            'update_controller' =>'companyController@update',
            'store_controller' => 'companyController@store',
            'mn_highlight' => 'customer_company_list',
            'page_h2' => 'company edit'
            ]);

    }

    public function index()
    {
        $all_records = companyHelper::get_all();
        $record_type = 'company';
        return view('layouts.company.list',[
            'all_records'=>$all_records,
            'vep_route_target'=>$record_type,
            'mn_highlight'=>'customer_company_list',
            'page_h2'=>'company list'
            ]);
    }
}
