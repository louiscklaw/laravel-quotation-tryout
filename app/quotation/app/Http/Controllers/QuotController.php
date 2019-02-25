<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quot;

class Quot_helper
{

    public static function get_record($id)
    {
        return Quot::where('id',$id)->firstOrFail();
    }

    function create_default()
    {

    }

    public function create()
    {

    }

    public function save($id, $req)
    {
        $value = $req->all();
        $target_record = $this->get_record($id);
        $target_record->update($value);
    }

    public function open_record($id)
    {
        return $this->get_record('id',$id);
    }

    public static function get_all()
    {
        return Quot::all();
    }

}

class QuotController extends Controller
{

    public function index()
    {
        $all_records = Quot_helper::get_all();
        $record_type = 'quot';
        return view('layouts.quot.list',[
            'all_records'=>$all_records,
            'vep_route_target'=>$record_type,

            ]);
    }

    public function show()
    {
        $record = Quot_helper::get_record($id);
        return view('layouts.quot.show',[
            'record'=>$record,
            'editor_name'=>'quotation view',
            'editor_description' => 'quotation debug view description',
            'update_controller' =>'QuotController@update',
            'store_controller' =>'QuotController@store'
            ]);
    }

    public function edit($id)
    {
        $quot_record = new Quot_helper;
        $quot_record = Quot_helper::get_record($id);


        return view('layouts.quot.edit',[
            'record'=>$quot_record,
            'form_action' =>'edit',
            'editor_name'=>'quotation edit',
            'editor_description' => 'quotation edit description',
            'update_controller' =>'QuotController@update',
            'store_controller' =>'QuotController@store'
            ]);

    }

    public function debug_index()
    {
        $all_records = Quot_helper::get_all();
        $record_type = 'debug_quot';
        return view('layouts.debug.debug_list',[
            'all_records'=>$all_records,
            'vep_route_target'=>$record_type,

            ]);
    }

    public function debug_edit($id)
    {
        $quot_record = new Quot_helper;
        $quot_record = Quot_helper::get_record($id);


        return view('layouts.debug.record_edit',[
            'record'=>$quot_record,
            'form_action' =>'edit',
            'editor_name'=>'quotation debug edit',
            'editor_description' => 'quotation debug edit description',
            'update_controller' =>'QuotController@update',
            'store_controller' =>'QuotController@store'
            ]);

    }

    public function update(Request $req, $id)
    {
        // var_dump($req);

        $quot_record = new Quot_helper;
        $quot_record->save($id, $req);

        return $this->debug_index();
    }

    public function debug_pdf($id)
    {
        return 'debug_pdf';
    }

    public function store(Request $req, $id)
    {
        var_dump($req);
        die();
    }

    public function debug_view($id)
    {
        $record = Quot_helper::get_record($id);
        return view('layouts.debug.record_view',[
            'record'=>$record,
            'editor_name'=>'quotation debug view',
            'editor_description' => 'quotation debug view description',
            'update_controller' =>'QuotController@update',
            'store_controller' =>'QuotController@store'
            ]);
    }

}
