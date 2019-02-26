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
            'quot_sales' => Str::random(10),
            'quot_ref' => $quot_ref,
            'quot_client_id' => Str::random(10),
            'quot_site_id' => Str::random(10),
            'quot_jobtype' => Str::random(10),
            'quot_setqty' => Str::random(10),
            'quot_periodnum' => Str::random(10),
            'quot_periodtype' => Str::random(10),
            'quot_startday' => Str::random(10),
            'quot_endday' => Str::random(10),
            'quot_rentdiscount' => Str::random(10),
            'quot_contractrent' => Str::random(10),
            'quot_deliverycharge' => Str::random(10),
            'quot_setupcharge' => Str::random(10),
            'quot_form5charge' => Str::random(10),
            'quot_contractdiscount' => Str::random(10),
            'quot_contractamount' => Str::random(10),
            'quot_deposit' => Str::random(10),
            'quot_contactperson' => Str::random(10),
            'quot_salesname' => Str::random(10),
            'quot_status' => Str::random(10),
            'quot_related' => Str::random(10),
            'quot_comment' => Str::random(10),
            'quot_remark' => Str::random(10),
            'quot_displaylang' => Str::random(10),
            'quot_pagedisplay' => Str::random(10),
            'quot_archive' => Str::random(10),
            'quot_deposit_cm' => Str::random(10),
            'quot_ds' => Str::random(10),
            'quot_editowner' => Str::random(10),
            'quot_editowner_name' => Str::random(10),
            'quot_cs' => Str::random(10),
            'quot_lnd_status' => Str::random(10),
            'quot_tdc' => Str::random(10),
            'quot_type' => Str::random(10),
            'quot_contactperson_name' => Str::random(10),
            'quot_site_name' => Str::random(10),
            'quot_client_name' => Str::random(10),
            'quot_last_mod_user_name' => Str::random(10),
            'quot_partssum' => Str::random(10),
            'quot_validity' => Str::random(10),
            'quot_paymentmethod' => Str::random(10),
            'quot_form5credit' => Str::random(10),
            'quot_flag' => Str::random(10),
            'quot_last_mod_user' => Str::random(10),
            'quot_creation_time' => Str::random(10),
            'quot_last_mod_time' => Str::random(10),
            'quot_deliveryqty' => Str::random(10),
            'quot_deliveryfoc' => Str::random(10),
            'quot_form5info' => Str::random(10),
            'quot_form5period' => Str::random(10),
            'quot_form5qty' => Str::random(10),
            'quot_form5setqty' => Str::random(10),
            'quot_form5extra' => Str::random(10),
            'quot_salesfocform5' => Str::random(10),
            'quot_deliverytime' => Str::random(10),
            'quot_starttime' => Str::random(10),
            'quot_endtime' => Str::random(10),
            'quot_deliveryneedlabor' => Str::random(10),
            'quot_deliverywithworker' => Str::random(10),
            'quot_confirmdate' => Str::random(10),
            'quot_confirminfo' => Str::random(10),
            'quot_laborsignform5' => Str::random(10),
            'quot_laborsignquot' => Str::random(10),
            'quot_ad' => Str::random(10),
            'quot_assemblyqty' => Str::random(10),
            'quot_disassemblyqty' => Str::random(10),
            'quot_daycpqty' => Str::random(10),
            'quot_daydriverqty' => Str::random(10),
            'quot_nightcpqty' => Str::random(10),
            'quot_nightdriverqty' => Str::random(10),
            'quot_nightshiplabor' => Str::random(10),
            'quot_nightshiponly' => Str::random(10),
            'quot_bankcheckdeposit' => Str::random(10),
            'quot_bankcheckitem' => Str::random(10),
            'quot_paymentfirst' => Str::random(10),
            'quot_receipt' => Str::random(10),
            'quot_depositback' => Str::random(10),
            'quot_paymentat' => Str::random(10),
            'quot_setmarking' => Str::random(10),
            'quot_setcolor' => Str::random(10),
            'quot_paymentmonthly' => Str::random(10),
            'quot_paymentdelivery' => Str::random(10),
            'quot_paymentassembly' => Str::random(10),
            'quot_confirmation' => Str::random(10)
        ]);
    }


    public function run()
    {
        for($i=0; $i < 20; $i++)
        {
            $this->insert_record(sprintf('UFO%05d', $i));
        }
    }

}
