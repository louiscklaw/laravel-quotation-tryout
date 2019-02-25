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
            $table->string('quot_date')->nullable();
            $table->string('quot_sales')->nullable();
            $table->string('quot_ref')->nullable();
            $table->string('quot_client_id')->nullable();
            $table->string('quot_site_id')->nullable();
            $table->string('quot_jobtype')->nullable();
            $table->string('quot_setqty')->nullable();
            $table->string('quot_periodnum')->nullable();
            $table->string('quot_periodtype')->nullable();
            $table->string('quot_startday')->nullable();
            $table->string('quot_endday')->nullable();
            $table->string('quot_rentdiscount')->nullable();
            $table->string('quot_contractrent')->nullable();
            $table->string('quot_deliverycharge')->nullable();
            $table->string('quot_setupcharge')->nullable();
            $table->string('quot_form5charge')->nullable();
            $table->string('quot_contractdiscount')->nullable();
            $table->string('quot_contractamount')->nullable();
            $table->string('quot_deposit')->nullable();
            $table->string('quot_contactperson')->nullable();
            $table->string('quot_salesname')->nullable();
            $table->string('quot_status')->nullable();
            $table->string('quot_related')->nullable();
            $table->string('quot_comment')->nullable();
            $table->string('quot_remark')->nullable();
            $table->string('quot_displaylang')->nullable();
            $table->string('quot_pagedisplay')->nullable();
            $table->string('quot_archive')->nullable();
            $table->string('quot_deposit_cm')->nullable();
            $table->string('quot_ds')->nullable();
            $table->string('quot_editowner')->nullable();
            $table->string('quot_editowner_name')->nullable();
            $table->string('quot_cs')->nullable();
            $table->string('quot_lnd_status')->nullable();
            $table->string('quot_tdc')->nullable();
            $table->string('quot_type')->nullable();
            $table->string('quot_contactperson_name')->nullable();
            $table->string('quot_site_name')->nullable();
            $table->string('quot_client_name')->nullable();
            $table->string('quot_last_mod_user_name')->nullable();
            $table->string('quot_partssum')->nullable();
            $table->string('quot_validity')->nullable();
            $table->text('quot_paymentmethod')->nullable();
            $table->text('quot_form5credit')->nullable();
            $table->text('quot_flag')->nullable();
            $table->text('quot_last_mod_user')->nullable();
            $table->text('quot_creation_time')->nullable();
            $table->text('quot_last_mod_time')->nullable();
            $table->text('quot_deliveryqty')->nullable();
            $table->text('quot_deliveryfoc')->nullable();
            $table->text('quot_form5info')->nullable();
            $table->text('quot_form5period')->nullable();
            $table->text('quot_form5qty')->nullable();
            $table->text('quot_form5setqty')->nullable();
            $table->text('quot_form5extra')->nullable();
            $table->text('quot_salesfocform5')->nullable();
            $table->text('quot_deliverytime')->nullable();
            $table->text('quot_starttime')->nullable();
            $table->text('quot_endtime')->nullable();
            $table->text('quot_deliveryneedlabor')->nullable();
            $table->text('quot_deliverywithworker')->nullable();
            $table->text('quot_confirmdate')->nullable();
            $table->text('quot_confirminfo')->nullable();
            $table->text('quot_laborsignform5')->nullable();
            $table->text('quot_laborsignquot')->nullable();
            $table->text('quot_ad')->nullable();
            $table->text('quot_assemblyqty')->nullable();
            $table->text('quot_disassemblyqty')->nullable();
            $table->text('quot_daycpqty')->nullable();
            $table->text('quot_daydriverqty')->nullable();
            $table->text('quot_nightcpqty')->nullable();
            $table->text('quot_nightdriverqty')->nullable();
            $table->text('quot_nightshiplabor')->nullable();
            $table->text('quot_nightshiponly')->nullable();
            $table->text('quot_bankcheckdeposit')->nullable();
            $table->text('quot_bankcheckitem')->nullable();
            $table->text('quot_paymentfirst')->nullable();
            $table->text('quot_receipt')->nullable();
            $table->text('quot_depositback')->nullable();
            $table->text('quot_paymentat')->nullable();
            $table->text('quot_setmarking')->nullable();
            $table->text('quot_setcolor')->nullable();
            $table->text('quot_paymentmonthly')->nullable();
            $table->text('quot_paymentdelivery')->nullable();
            $table->text('quot_paymentassembly')->nullable();
            $table->text('quot_confirmation')->nullable();

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
