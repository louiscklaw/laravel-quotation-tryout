<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Quot;
// use App\QuotItem;
// use App\Client;
// use App\Http\Controllers\Pdf;

class ReportController extends Controller
{
    public function index()
    {
        $mn_highlight='reports';
        return view(
            'layouts.reports.helloreport',
            compact('mn_highlight')
        );
    }
}
