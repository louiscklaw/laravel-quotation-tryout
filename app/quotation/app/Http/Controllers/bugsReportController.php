<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;

use Illuminate\Http\Request;

use App\Client;
use App\Transformers\ClientIndexTableTransformer;



// class ClientHelper
// {

//     public static function get_record($id)
//     {
//         return Client::where('id',$id)->firstOrFail();
//     }

//     function create_default()
//     {

//     }

//     public function create()
//     {

//     }

//     public function open_record($id)
//     {
//         return $this->get_record('id',$id);
//     }

//     public static function get_all()
//     {
//         return Client::all();
//     }

//     public static function get_client_by_id($id)
//     {
//         return Client::where('id',$id)->get();
//     }


//     public function save($id, $req)
//     {
//         $value = $req->all();
//         $target_record = $this->get_record($id);

//         $target_record->update($value);

//     }

// }

class bugsReportController extends Controller
{

    // public function show($id)
    // {
    //     $record = ClientHelper::get_record($id);
    //     return view('layouts.client.show',[
    //         'record'=>$record,
    //         'editor_name'=>'client view',
    //         'editor_description' => 'client debug viwe description',
    //         'update_controller' =>'clientController@update',
    //         'store_controller' => 'clientController@store',
    //         'mn_highlight' => 'client_list'
    //         ]);
    // }

    // public function edit($id)
    // {
    //     $quot_record = new ClientHelper;
    //     $quot_record = ClientHelper::get_record($id);

    //     return view('layouts.client.edit',[
    //         'record'=>$quot_record,
    //         'form_action' =>'edit',
    //         'editor_name'=>'client edit',
    //         'editor_description' => 'client debug edit description',
    //         'update_controller' =>'clientController@update',
    //         'store_controller' => 'clientController@store',
    //         'mn_highlight' => 'customer_client_list'
    //         ]);

    // }

    // public function index()
    // {
    //     // $all_records = ClientHelper::get_all();

    //     $all_records = Client::all();

    //     return view('layouts.client.list',[
    //         'all_records'=>$all_records,
    //         // TODO: remove me
    //         // 'vep_route_target'=>$record_type,
    //         'mn_highlight'=>'customer_client_list'
    //         ]);
    // }

    // public function update(Request $req, $id)
    // {
    //     // var_dump($req);

    //     $quot_record = new ClientHelper;
    //     $quot_record->save($id, $req);

    //     return redirect()->route('client.show',compact('id'));
    // }

    // public function debug_pdf($id)
    // {
    //     return 'debug_pdf';
    // }

    // public function store(Request $req, $id)
    // {
    //     var_dump($req);
    //     die();
    // }

    // public function debug_view($id)
    // {
    //     $record = ClientHelper::get_record($id);
    //     return view('layouts.debug.record_view',[
    //         'record'=>$record,
    //         'editor_name'=>'client debug view',
    //         'editor_description' => 'client debug viwe description',
    //         'update_controller' =>'clientController@update',
    //         'store_controller' => 'clientController@store'
    //         ]);
    // }

    public function create()
    {
        $bugs_report = new BugsReport;
        $mn_highlight = 'bugsreport';


        return view('layouts.bugs_report.edit',compact(
            'bugs_report',
            'mn_highlight'
        ));
    }

    // public function index_table_content()
    // {
    //     $clients = Client::all();

    //     return Datatables::of($clients)->setTransformer(new ClientIndexTableTransformer)
    //         ->make(true);
    // }

    // public function debug_index()
    // {
    //     $all_records = ClientHelper::get_all();
    //     $record_type = 'debug_client';
    //     return view('layouts.debug.debug_list',[
    //         'all_records'=>$all_records,
    //         'vep_route_target'=>$record_type,
    //         ]);
    // }

    // public function debug_edit($id)
    // {
    //     $quot_record = new ClientHelper;
    //     $quot_record = ClientHelper::get_record($id);

    //     return view('layouts.debug.record_edit',[
    //         'record'=>$quot_record,
    //         'form_action' =>'edit',
    //         'editor_name'=>'client debug edit',
    //         'editor_description' => 'client debug edit description',
    //         'update_controller' =>'clientController@update',
    //         'store_controller' => 'clientController@store'
    //         ]);
    // }

    // public function get_client_name_select_list($q)
    // {
    //     $clients = Client::where('client_name','LIKE', "%$q%")->get();

    //     $select_array = $clients->map(function($value){
    //         return [
    //             'text'=>$value->client_name,
    //             'value' =>$value->client_name,
    //             'subtext'=>$value->client_status
    //         ];
    //     });


    //     return response()->json($select_array);
    // }

    // public function bs_select(Request $req, $field)
    // {
    //     if ($field == 'customer_name')
    //     {
    //         $q = $req->only('q')['q'];
    //         return $this->get_client_name_select_list($q);
    //     }

    // }

}
