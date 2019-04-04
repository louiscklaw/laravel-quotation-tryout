<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use App\Quot;
use App\QuotItem;
use App\Client;

use App\Transformers\QuotIndexTableTransformer;

use App\Http\Controllers\Pdf;

class QuotItemHelper
{


    public static function check_need_to_insert($des, $unitprice, $qty, $subtotal_cm, $subtotal)
    {

    }

    public static function get_quot_item($quot_ref)
    {
        $quotitem_records = QuotItem::where('quotitem_ref',$quot_ref)->get();
        return $quotitem_records;
    }

    public static function del_quotitem_by_ref($quot_ref)
    {
        return QuotItem::where('quotitem_ref',$quot_ref)->delete();
    }

    public static function save_quot_item($quot_ref, $req)
    {

        $incoming = $req->only('quotitem');
        if(QuotItemHelper::get_length_of_quotitems($req) > 0)
        {
            for ($i=0; $i< sizeof($incoming['quotitem']); $i++)
            {
                // IDEA: check need to be create

                $quotitem_record = new QuotItem;
                $quotitem_record->quotitem_ref = $quot_ref;

                foreach(array_keys($incoming['quotitem'][0]) as $field)
                {
                    $quotitem_record->$field = $incoming['quotitem'][$i][$field];
                }
                $quotitem_record->save();
            }
        }

    }

    public static function get_length_of_quotitems($req)
    {
        $incoming = $req->only('quotitem');
        if (array_key_exists('quotitem',$incoming))
        {
            return sizeof($incoming['quotitem'][0]);
        }else{
            return 0;

        }
    }

    public static function save_quot_items($quot_ref, $req)
    {
        QuotItemHelper::del_quotitem_by_ref($quot_ref);
        QuotItemHelper::save_quot_item($quot_ref, $req);

    }
}

class Quot_helper
{
    public static function get_quot_record_by_id($id)
    {
        return Quot::where('id',$id)->firstOrFail();
    }

    public static function get_quot_ref_by_id($id)
    {
        return Quot_helper::get_quot_record_by_id($id)->quot_ref;
    }

    public static function get_record($id)
    {
        $quot_record = Quot::where('id',$id)->firstOrFail();
        $quot_ref = $quot_record->quot_ref;

        $client_record = ClientHelper::get_client_by_id($quot_record->client_id);

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

    // quotitem_array is the array of array in the following order
    // [quotitem_name[], quotitem_quantity[], quotitem_unitprice[], quotitem_subtotal[]]
    public static function bloat_quotitem_from_form($quotitems)
    {
        $output = [];

        for($i=0; $i < sizeof($quotitems); $i++)
        {
            $output[$i]['name']=$quotitems[0][$i];
            $output[$i]['quantity']=$quotitems[1][$i];
            $output[$i]['unitprice']=$quotitems[2][$i];
            $output[$i]['subtotal']=$quotitems[3][$i];
        }

        return $output;

    }

    public static function get_new_quot_number()
    {
        return '123456';
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
            'mn_highlight'=>'quotation_list'
            ]);
    }

    public function store(Request $req)
    {
        // tidy up for bloat
        $quotitem = Quot_helper::bloat_quotitem_from_form(
            [$req['quotitem_name'],
            $req['quotitem_quantity'],
            $req['quotitem_unitprice'],
            $req['quotitem_subtotal']]
        );

        return $this->index();
    }

    public function create()
    {
        $default_max_product_num = 5;

        $quotitem_records = array();

        $new_quot_record = new Quot;

        $new_quot_record->quot_ref = Quot_Helper::get_new_quot_number();

        var_dump($new_quot_record);
        die();

        $client_name_list = Client::pluck('client_cname','id');

        for($i=0;$i<5;$i++)
        {
            $quotitem_record = new QuotItem;
            array_push($quotitem_records, $quotitem_record);
        }


        return view('layouts.quot.edit',[
            'record'=>$new_quot_record,
            'default_max_product_num'=>$default_max_product_num,
            'quotitem_records'=>$quotitem_records,
            'form_action' =>'create',
            'editor_name'=>'new quotation',
            'client_name_list' => $client_name_list,
            'editor_description' => 'new quotation description',
            'update_controller' =>'QuotController@update',
            'store_controller' =>'QuotController@store',
            'mn_highlight'=>'quotation_new'
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
            'store_controller' =>'QuotController@store',
            'mn_highlight'=>'quotation_list'
            ]);
    }

    public function edit($id)
    {

        $record = new Quot_helper;
        $record = Quot_helper::get_record($id);

        $quot_record = $record[0];
        $quotitem_records = $record[1];

        $client_name_list = Client::pluck('client_cname','id');

        return view('layouts.quot.edit',[
            'record'=>$quot_record,
            'quotitem_records' => $quotitem_records,
            'editor_name'=>'quotation edit',
            'editor_description' => 'quotation edit description',
            'update_controller' =>'QuotController@update',
            'store_controller' =>'QuotController@store',
            'client_name_list' => $client_name_list,
            'mn_highlight' =>'quotation_list'
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

        // var_dump($quot_record);
        // die();

        return view('layouts.debug.record_edit',[
            'record'=>$quot_record[0],
            'form_action' =>'edit',
            'editor_name'=>'quotation debug edit',
            'editor_description' => 'quotation debug edit description',
            'update_controller' =>'QuotController@update',
            'store_controller' =>'QuotController@store'
            ]);

    }

    public function get_pdf($id)
    {
        $pdf_helper = new PdfHelper();
        $pdf_helper->gen_pdf();


    }

    public function update(Request $req, $id)
    {

        $quot_record = new Quot_helper;
        $quot_record->save($id, $req);

        $quot_ref = Quot_helper::get_quot_ref_by_id($id);

        QuotItemHelper::save_quot_items($quot_ref,$req);

        return $this->index();
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

    public function index_table_content()
    {
        $Quotations = Quot::all()->take(20);

        return Datatables::of($Quotations)->setTransformer(new QuotIndexTableTransformer)
            ->make(true);
    }

}
