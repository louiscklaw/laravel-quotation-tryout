<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quot;
use App\QuotItem;

class QuotItemHelper
{
    public static function get_quot_item($quot_ref)
    {
        return QuotItem::where('quotitem_ref',$quot_ref)->get();
    }
}

class Quot_helper
{

    public static function get_record($id)
    {
        $quot_record = Quot::where('id',$id)->firstOrFail();
        $quot_ref = $quot_record->quot_ref;
        $quotitem_records = QuotItemHelper::get_quot_item($quot_ref);


        return array($quot_record, $quotitem_records);
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
        $target_record = $this->get_record($id)[0];
        $target_record->update($value);
    }

    public function open_record($id)
    {
        return $this->get_record('id',$id)[0];
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

    public function store()
    {
        return $this->index();
    }

    public function create()
    {
        $quotitem_records = array();

        $new_quot_record = new Quot;

        for($i=0;$i<5;$i++)
        {
            $quotitem_record = new QuotItem;
            array_push($quotitem_records, $quotitem_record);
        }


        return view('layouts.quot.edit',[
            'record'=>$new_quot_record,
            'quotitem_records'=>$quotitem_records,
            'form_action' =>'create',
            'editor_name'=>'new auotation',
            'editor_description' => 'new auotation description',
            'update_controller' =>'QuotController@update',
            'store_controller' =>'QuotController@store'
            ]);
    }

    public function show($id)
    {
        $records = Quot_helper::get_record($id);
        $quot_record = $records[0];
        $quotitem_records = $records[1];

        return view('layouts.quot.show',[
            'record'=>$quot_record,
            'quotitem_records'=>$quotitem_records,
            'editor_name'=>'quotation show',
            'editor_description' => 'quotation show description',
            'update_controller' =>'QuotController@update',
            'store_controller' =>'QuotController@store'
            ]);
    }

    public function edit($id)
    {
        $record = new Quot_helper;
        $record = Quot_helper::get_record($id);

        $quot_record = $record[0];
        $quotitem_records = $record[1];

        // $test = $quotitem_records[0];
        // var_dump($quotitem_records[0]->quotitem_ref);
        // die();

        return view('layouts.quot.edit',[
            'record'=>$quot_record,
            'quotitem_records' => $quotitem_records,
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
