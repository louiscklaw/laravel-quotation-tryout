<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserHelper
{

    public static function get_record($id)
    {
        return User::where('id',$id)->firstOrFail();
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
        return User::all();
    }

}

class UserController extends Controller
{

    public function index()
    {
        $all_records = UserHelper::get_all();
        $record_type = 'User';
        return view('layouts.user.list',[
            'all_records'=>$all_records,
            'vep_route_target'=>$record_type,
            ]);
    }

    public function debug_index()
    {
        $all_records = UserHelper::get_all();
        $record_type = 'debug_User';
        return view('layouts.debug.debug_list',[
            'all_records'=>$all_records,
            'vep_route_target'=>$record_type,
            ]);
    }

    public function debug_edit($id)
    {
        $quot_record = new UserHelper;
        $quot_record = UserHelper::get_record($id);


        return view('layouts.debug.record_edit',[
            'record'=>$quot_record,
            'form_action' =>'edit',
            'editor_name'=>'User debug edit',
            'editor_description' => 'User debug edit description',
            'update_controller' =>'UserController@update',
            'store_controller' => 'UserController@store'
            ]);

    }

    public function update(Request $req, $id)
    {
        // var_dump($req);

        $quot_record = new UserHelper;
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

    public function edit($id)
    {
        $quot_record = new UserHelper;
        $quot_record = UserHelper::get_record($id);


        return view('layouts.user.edit',[
            'record'=>$quot_record,
            'form_action' =>'edit',
            'editor_name'=>'User debug edit',
            'editor_description' => 'User debug edit description',
            'update_controller' =>'UserController@update',
            'store_controller' => 'UserController@store'
            ]);

    }

    public function debug_view($id)
    {
        $record = UserHelper::get_record($id);
        return view('layouts.debug.record_view',[
            'record'=>$record,
            'editor_name'=>'User debug view',
            'editor_description' => 'User debug viwe description',
            'update_controller' =>'UserController@update',
            'store_controller' => 'UserController@store'
            ]);
    }

}
