<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class Client_helper
{

    public static function get_record($id)
    {
        return Client::where('id',$id)->firstOrFail();
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
        return Client::all();
    }

}

class ClientController extends Controller
{

    public function debug_index()
    {
        $all_records = Client_helper::get_all();
        $record_type = 'debug_client';
        return view('layouts.debug.debug_list',[
            'all_records'=>$all_records,
            'active_record_type'=>'debug_client',
            'vep_route_target'=>$record_type,
            ]);
    }

    public function debug_edit($id)
    {
        $quot_record = new Client_helper;
        $quot_record = Client_helper::get_record($id);


        return view('layouts.debug.quot_edit',[
            'record'=>$quot_record,
            'form_action' =>'edit'
            ]);

    }

    public function update(Request $req, $id)
    {
        // var_dump($req);

        $quot_record = new Client_helper;
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
        $record = Client_helper::get_record($id);
        return view('layouts.debug.quot_view',['record'=>$record]);
    }

}
