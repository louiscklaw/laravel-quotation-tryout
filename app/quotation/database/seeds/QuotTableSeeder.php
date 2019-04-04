<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function insert_record($quot_ref)
    {
        DB::table('quot')->insert([
            'quot_date' => Str::random(10),
            'quot_ref' => $quot_ref,
            'quot_to_name' => Str::random(10),
            'quot_to_address' => Str::random(10),
            'quot_from_name' => Str::random(10),
            'quot_from_address' => Str::random(10),
            'quot_subtotal' => Str::random(10),
            'quot_discount' => Str::random(10),
            'quot_total' => Str::random(10),
            'quot_terms' => Str::random(10),
            'quot_remarks' => Str::random(10),
        ]);
    }

    public function run()
    {
        DB::table('quot')->truncate();
        $num_quot_to_create = 999;
        foreach(range(0,$num_quot_to_create) as $i)
        {
            echo "\r";
            echo "inert quot $i/$num_quot_to_create";
            $this->insert_record(sprintf('QUO%05d', $i));
        }
        echo "\n";
    }

}
