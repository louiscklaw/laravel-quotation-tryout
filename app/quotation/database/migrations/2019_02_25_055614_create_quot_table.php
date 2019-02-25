<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// https://laravel.com/docs/5.7/migrations

class CreateQuotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quot', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('quot_date');
            $table->string('quot_sales');
            $table->string('quot_ref');
            $table->string('quot_client_id');
            $table->string('quot_site_id');
            $table->string('quot_jobtype');
            $table->string('quot_setqty');
            $table->string('quot_periodnum');
            $table->string('quot_periodtype');
            $table->string('quot_startday');
            $table->string('quot_endday');
            $table->string('quot_rentdiscount');
            $table->string('quot_contractrent');
            $table->string('quot_deliverycharge');
            $table->string('quot_setupcharge');
            $table->string('quot_form5charge');
            $table->string('quot_contractdiscount');
            $table->string('quot_contractamount');
            $table->string('quot_deposit');
            $table->string('quot_contactperson');
            $table->string('quot_salesname');
            $table->string('quot_status');
            $table->string('quot_related');
            $table->string('quot_comment');
            $table->string('quot_remark');
            $table->string('quot_displaylang');
            $table->string('quot_pagedisplay');
            $table->string('quot_archive');
            $table->string('quot_deposit_cm');
            $table->string('quot_ds');
            $table->string('quot_editowner');
            $table->string('quot_editowner_name');
            $table->string('quot_cs');
            $table->string('quot_lnd_status');
            $table->string('quot_tdc');
            $table->string('quot_type');
            $table->string('quot_contactperson_name');
            $table->string('quot_site_name');
            $table->string('quot_client_name');
            $table->string('quot_last_mod_user_name');
            $table->string('quot_partssum');
            $table->string('quot_validity');
            $table->text('quot_paymentmethod');
            $table->text('quot_form5credit');
            $table->text('quot_flag');
            $table->text('quot_last_mod_user');
            $table->text('quot_creation_time');
            $table->text('quot_last_mod_time');
            $table->text('quot_deliveryqty');
            $table->text('quot_deliveryfoc');
            $table->text('quot_form5info');
            $table->text('quot_form5period');
            $table->text('quot_form5qty');
            $table->text('quot_form5setqty');
            $table->text('quot_form5extra');
            $table->text('quot_salesfocform5');
            $table->text('quot_deliverytime');
            $table->text('quot_starttime');
            $table->text('quot_endtime');
            $table->text('quot_deliveryneedlabor');
            $table->text('quot_deliverywithworker');
            $table->text('quot_confirmdate');
            $table->text('quot_confirminfo');
            $table->text('quot_laborsignform5');
            $table->text('quot_laborsignquot');
            $table->text('quot_ad');
            $table->text('quot_assemblyqty');
            $table->text('quot_disassemblyqty');
            $table->text('quot_daycpqty');
            $table->text('quot_daydriverqty');
            $table->text('quot_nightcpqty');
            $table->text('quot_nightdriverqty');
            $table->text('quot_nightshiplabor');
            $table->text('quot_nightshiponly');
            $table->text('quot_bankcheckdeposit');
            $table->text('quot_bankcheckitem');
            $table->text('quot_paymentfirst');
            $table->text('quot_receipt');
            $table->text('quot_depositback');
            $table->text('quot_paymentat');
            $table->text('quot_setmarking');
            $table->text('quot_setcolor');
            $table->text('quot_paymentmonthly');
            $table->text('quot_paymentdelivery');
            $table->text('quot_paymentassembly');
            $table->text('quot_confirmation');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quot');
    }
}
