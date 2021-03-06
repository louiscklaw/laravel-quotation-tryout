<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;

use Illuminate\Http\Request;

use App\Common;

use App\Company;
use App\Transformers\CompanyIndexTableTransformer;


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
    public function show($id)
    {
        $company = CompanyHelper::get_record($id);
        return view('layouts.company.show',[
            'record'=>$company,
            'editor_name'=>'client view',
            'editor_description' => 'client debug viwe description',
            'update_controller' =>'clientController@update',
            'store_controller' => 'clientController@store',
            'mn_highlight' => 'client_list'
            ]);

    }

    public function create()
    {
        $company_record = new companyHelper;

        return view('layouts.company.edit',[
            'record'=>$company_record,
            'form_action'=>Common::$FORM_ACTION_CREATE,
            'page_h2' => 'Add new company',
            'store_controller' =>'companyController@store',
            'editor_name' => 'create new company',
            'mn_highlight' => 'customer_company_new',
            ]);
    }

    public function edit($id)
    {
        $company = new companyHelper;
        $company = companyHelper::get_record($id);

        // var_dump($company);
        // die();

        return view('layouts.company.edit',[
            'company'=>$company,
            'form_action' =>'edit',
            'editor_description' => 'client debug edit description',
            'update_controller' =>'companyController@update',
            'store_controller' => 'companyController@store',
            'mn_highlight' => 'customer_company_list',
            'editor_name' => 'company edit'
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

    public function update(Request $req)
    {
        var_dump($req);
        die();
        return $this->index();
    }
    public function store()
    {
        return $this->index();
    }

    public function index_table_content()
    {
        $companys = Company::all();

        return Datatables::of($companys)->setTransformer(new CompanyIndexTableTransformer)
            ->make(true);
    }
}
