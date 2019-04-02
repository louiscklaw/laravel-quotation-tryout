<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class sharedSeeder extends Seeder
{
    public static function random_from_pool($array_pool)
    {
        $length = sizeof($array_pool);
        return $array_pool[random_int(0,$length-1)];
    }

}
