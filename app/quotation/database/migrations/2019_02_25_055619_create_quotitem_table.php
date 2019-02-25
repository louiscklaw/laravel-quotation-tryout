<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotitem', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('quotitem_ref')->nullable();
            $table->string('quotitem_item')->nullable();
            $table->string('quotitem_type')->nullable();
            $table->string('quotitem_set_id')->nullable();
            $table->string('quotitem_set_type')->nullable();
            $table->string('quotitem_set_size')->nullable();
            $table->string('quotitem_set_height')->nullable();
            $table->string('quotitem_set_wheight')->nullable();
            $table->string('quotitem_set_value')->nullable();
            $table->string('quotitem_montlyrent')->nullable();
            $table->string('quotitem_unitprice')->nullable();
            $table->string('quotitem_qty')->nullable();
            $table->string('quotitem_subtotal')->nullable();
            $table->string('quotitem_discount')->nullable();
            $table->string('quotitem_des_cm')->nullable();
            $table->string('quotitem_unitp_cm')->nullable();
            $table->string('quotitem_qty_cm')->nullable();
            $table->string('quotitem_subtotal_cm')->nullable();
            $table->string('quotitem_setqty')->nullable();
            $table->string('quotitem_periodqty')->nullable();
            $table->string('quotitem_pricelist')->nullable();
            $table->string('quotitem_forceunitprice')->nullable();
            $table->string('quotitem_unitselling')->nullable();
            $table->string('quotitem_last_mod_user')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotitem');
    }
}
