<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Colleagues;

class ColleaguesHelper
{

    public static function get_record($id)
    {
        return Colleagues::where('id',$id)->firstOrFail();
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
        return Colleagues::all();
    }

    public static function get_Colleagues_by_id($id)
    {
        return Colleagues::where('id',$id)->get();
    }
}

class colleaguesController extends Controller
{

    public function show($id)
    {
        $record = ColleaguesHelper::get_record($id);
        return view('layouts.colleagues.show',[
            'record'=>$record,
            'editor_name'=>'Colleagues view',
            'editor_description' => 'Colleagues debug viwe description',
            'update_controller' =>'colleaguesController@update',
            'store_controller' => 'colleaguesController@store',
            'mn_highlight' => 'Colleagues_list'
            ]);
    }

    public function edit($id)
    {
        $quot_record = new ColleaguesHelper;
        $quot_record = ColleaguesHelper::get_record($id);
        return view('layouts.colleagues.edit',[
            'record'=>$quot_record,
            'form_action' =>'edit',
            'editor_name'=>'Colleagues edit',
            'editor_description' => 'Colleagues debug edit description',
            'update_controller' =>'colleaguesController@update',
            'store_controller' => 'colleaguesController@store',
            'mn_highlight' => 'Colleagues_list'
            ]);

    }

    public function index()
    {
        $all_records = ColleaguesHelper::get_all();
        $record_type = 'colleagues';
        return view('layouts.colleagues.list',[
            'all_records'=>$all_records,
            'vep_route_target'=>$record_type,
            'mn_highlight'=>'customer_Colleagues_list'
            ]);
    }

    public function debug_index()
    {
        $all_records = ColleaguesHelper::get_all();
        $record_type = 'debug_Colleagues';
        return view('layouts.debug.debug_list',[
            'all_records'=>$all_records,
            'vep_route_target'=>$record_type,
            ]);
    }

    public function debug_edit($id)
    {
        $quot_record = new ColleaguesHelper;
        $quot_record = ColleaguesHelper::get_record($id);


        return view('layouts.debug.record_edit',[
            'record'=>$quot_record,
            'form_action' =>'edit',
            'editor_name'=>'Colleagues debug edit',
            'editor_description' => 'Colleagues debug edit description',
            'update_controller' =>'colleaguesController@update',
            'store_controller' => 'colleaguesController@store'
            ]);

    }

    public function update(Request $req, $id)
    {
        // var_dump($req);

        $quot_record = new ColleaguesHelper;
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
        $record = ColleaguesHelper::get_record($id);
        return view('layouts.debug.record_view',[
            'record'=>$record,
            'editor_name'=>'Colleagues debug view',
            'editor_description' => 'Colleagues debug viwe description',
            'update_controller' =>'colleaguesController@update',
            'store_controller' => 'colleaguesController@store'
            ]);
    }

    public function create()
    {
        return "Colleaguescontroller create placeholder";
    }

}
