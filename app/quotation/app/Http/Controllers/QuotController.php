<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quot;

class Quot_helper
{

    public function get($id)
    {
        return Quot::where('id',$id)->firstOrFail();
    }

    function create_default()
    {

    }

    public function create()
    {

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
        return 'debug_edit';
    }

}
