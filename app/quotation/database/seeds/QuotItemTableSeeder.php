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
    public function insert_record($quotitem_ref)
    {
        DB::table('quotitem')->insert([
            'quotitem_ref' => $quotitem_ref,
            'quotitem_item' => Str::random(10),
            'quotitem_type' => Str::random(10),
            'quotitem_set_id' => Str::random(10),
            'quotitem_set_type' => Str::random(10),
            'quotitem_set_size' => Str::random(10),
            'quotitem_set_height' => Str::random(10),
            'quotitem_set_wheight' => Str::random(10),
            'quotitem_set_value' => Str::random(10),
            'quotitem_montlyrent' => Str::random(10),
            'quotitem_unitprice' => Str::random(10),
            'quotitem_qty' => Str::random(10),
            'quotitem_subtotal' => Str::random(10),
            'quotitem_discount' => Str::random(10),
            'quotitem_des_cm' => Str::random(10),
            'quotitem_unitp_cm' => Str::random(10),
            'quotitem_qty_cm' => Str::random(10),
            'quotitem_subtotal_cm' => Str::random(10),
            'quotitem_setqty' => Str::random(10),
            'quotitem_periodqty' => Str::random(10),
            'quotitem_pricelist' => Str::random(10),
            'quotitem_forceunitprice' => Str::random(10),
            'quotitem_unitselling' => Str::random(10),
            'quotitem_last_mod_user' => Str::random(10)
        ]);
    }

    public function run()
    {
        for($i=0; $i < 20; $i++)
        {
            for($j=0; $j<20;$j++)
            {
                $this->insert_record(sprintf('UFO%05d', $i));
            }
        }
    }

}
