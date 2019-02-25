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

    public function debug_list()
    {
        $all_records = Quot_helper::get_all();
        return view('layouts.debug_quotation_list',['all_records'=>$all_records]);
    }

    public function debug_edit($id)
    {
        $quot_record = new Quot_helper;
        $quot_record = Quot_helper::get_record($id);

        return view('layouts.debug.quot_edit',['record',$quot_record]);

    }

    public function update(Request $req, $id)
    {

    }

    public function debug_pdf($id)
    {
        return 'debug_pdf';
    }

    public function debug_view($id)
    {
        $record = Quot_helper::get_record($id);
        return view('layouts.debug.quot_view',['record',$record]);
    }

}
