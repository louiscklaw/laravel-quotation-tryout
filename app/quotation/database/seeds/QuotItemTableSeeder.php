<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function insert_record($quotitem_ref)
    {
        DB::table('quotitem')->insert([
            'quotitem_ref' => $quotitem_ref,
            'quotitem_name' => Str::random(10),
            'quotitem_quantity' => Str::random(10),
            'quotitem_unitprice' => Str::random(10),
            'quotitem_subtotal' => Str::random(10),
            'quotitem_remarks' => Str::random(10),

        ]);
    }

    public function run()
    {
        for($i=0; $i < 20; $i++)
        {
            for($j=0; $j<5;$j++)
            {
                $this->insert_record(sprintf('UFO%05d', $i));
            }
        }
    }

}
