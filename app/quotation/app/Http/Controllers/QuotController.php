<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Carbon\Carbon;
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

    public static function get_quotitems_from_request($req)
    {
        return $req->only('quotitems');
    }


    public static function get_num_of_quotitems($quotitems_incoming)
    {
        if (array_key_exists('quotitem_name',$quotitems_incoming))
        {
            return sizeof($quotitems_incoming['quotitem_name']);
        }else{
            return 0;

        }
    }

    public static function save_quot_item($quot_ref, $req)
    {

        $quotitems_incoming = self::get_quotitems_from_request($req);

        if (isset($quotitems_incoming['quotitems']))
        {
            $quotitems_incoming = $quotitems_incoming['quotitems'];

            $quotitems_len = self::get_num_of_quotitems($quotitems_incoming);

            if($quotitems_len > 0)
            {
                for ($i=0; $i< $quotitems_len; $i++)
                {
                    // IDEA: check need to be create
                    $need_to_add = FALSE;
                    $quotitem_record = new QuotItem;

                    // check if all field
                    // IDEA: need to refactor ?
                    foreach($quotitem_record->getFillable() as $field)
                    {
                        if (!empty($quotitems_incoming[$field][$i]))
                        {
                            $need_to_add = TRUE;
                        }
                    }

                    // IDEA: need to refactor ?
                    if ($need_to_add)
                    {

                        $quotitem_record->quotitem_ref = $quot_ref;

                        foreach($quotitem_record->getFillable() as $field)
                        {
                            if (isset($quotitems_incoming[$field]))
                            {
                                $quotitem_record->$field = $quotitems_incoming[$field][$i];
                            }
                        }

                        $quotitem_record->save();

                    }
                }
            }
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

        // $quot_record['quotitems']=$quotitem_records;

        return $quot_record;
    }

    public static function get_quot($id)
    {
        $quot_record = Quot::where('id',$id)->firstOrFail();
        $quot_ref = $quot_record->quot_ref;

        $client_record = ClientHelper::get_client_by_id($quot_record->client_id);

        $quotitem_records = QuotItemHelper::get_quot_item($quot_ref);

        $quot_record['quotitems'] = $quotitem_records;

        return $quot_record;
    }



    // save a new record and return the content of it
    public static function save_as($req)
    {
        $value = $req;
        $new_quot = new Quot;
        $new_quot->save($req);

        return $new_quot;
    }

    // save to an existing record by providing the id
    public static function save($id, $req)
    {
        $value = $req->all();

        $quot_record = self::get_record($id);

        $quot_record->update($value);


        // $quot_record = QuotitemHelper::save_quot_items($quot_record->quot_ref,  $vlaue);

    }

    public function open_record($id)
    {
        return $this->get_record('id',$id);
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

    public static function form_quot_ref($number)
    {
        return sprintf('QUO%05d', $number);
    }

    public static function get_last_quot_number()
    {
        $last_id = Quot::orderBy('id', 'DESC')->take(1)->get();
        return $last_id[0];
    }

    public static function get_new_quot_number()
    {

        $last_quot_ref = self::get_last_quot_number()->quot_ref;
        $number_part = substr($last_quot_ref,3,99);

        return self::form_quot_ref($number_part+1);
    }

    public static function new_quot_default_value($quot)
    {

        $quot->quot_ref = Quot_Helper::get_new_quot_number();
        $quot->quot_date = Carbon::now();

        return $quot;
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

    public function redirect_to_index()
    {
        return redirect()->route('Quot.index');
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

        $new_quot_values = $req->all();
        $new_quot = Quot_helper::save_as($new_quot_values);
        $id = $new_quot->id;

        return redirect()->route('Quot.show',compact('id'));
    }

    public function create()
    {
        $default_max_product_num = 5;

        $quotitem_records = array();

        $new_quot_record = new Quot;
        $new_quot_record = Quot_Helper::new_quot_default_value($new_quot_record);

        $client_name_list = Client::pluck('client_cname','id');

        for($i=0;$i<$default_max_product_num;$i++)
        {
            $quotitem_record = new QuotItem;
            array_push($quotitem_records, $quotitem_record);
        }

        $new_quot_record['quotitems'] = $quotitem_records;

        return view('layouts.quot.edit',[
            'quot'=>$new_quot_record,
            // 'quotitem_records'=>$quotitem_records,
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
        $records = Quot_helper::get_quot($id);
        $quot_record = $records;
        $quotitem_records = $records['quotitems'];

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
        $record = Quot_helper::get_quot($id);

        $quot_record = $record;
        // $quotitem_records = $record[1];

        $client_name_list = Client::pluck('client_cname','id');

        return view('layouts.quot.edit',[
            'quot'=>$quot_record,
            // 'quotitem_records' => $quotitem_records,
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


        // update quot
        $quot_helper = new Quot_helper;
        $quot_helper->save($id, $req);

        // // update quotitem
        $quot_ref = Quot_helper::get_quot_ref_by_id($id);

        QuotItemHelper::save_quot_items($quot_ref,$req);

        // return $this->index();
        return $this->redirect_to_index();
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
