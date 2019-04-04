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

    public static function get_random_day($start="jan 1st -80 years", $end="dec 31st -16 years")
    {
        $min = strtotime($start);
        $max = strtotime($end);
        $time = rand($min,$max);
        $dob = date("Y-m-d",$time);

        // //Generate a timestamp using mt_rand.
        // $timestamp = mt_rand(1, time());

        // //Format that timestamp into a readable date string.
        // $randomDate = date("d M Y", $timestamp);

        //Print it out.
        return $dob;
    }

}
