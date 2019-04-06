<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\testfileuploads;

class helloworldController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('helloworld');
    }

    public function update(Request $request)
    {

        $path = $request->file('image')->store('image');

        return $path;
    }

}
