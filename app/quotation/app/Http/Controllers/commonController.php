<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quot;
use App\QuotItem;
use App\Client;
use App\Http\Controllers\Pdf;

class commonController
{
    public function home()
    {
        return view(
            'helloworld',
            ['mn_highlight'=>'home']
        );
    }

    public function helloworld()
    {
        return 'helloworld';
    }
}
