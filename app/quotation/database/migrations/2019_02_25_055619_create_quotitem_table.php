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
            $table->string('quotitem_ref');
            $table->string('quotitem_item');
            $table->string('quotitem_type');
            $table->string('quotitem_set_id');
            $table->string('quotitem_set_type');
            $table->string('quotitem_set_size');
            $table->string('quotitem_set_height');
            $table->string('quotitem_set_wheight');
            $table->string('quotitem_set_value');
            $table->string('quotitem_montlyrent');
            $table->string('quotitem_unitprice');
            $table->string('quotitem_qty');
            $table->string('quotitem_subtotal');
            $table->string('quotitem_discount');
            $table->string('quotitem_des_cm');
            $table->string('quotitem_unitp_cm');
            $table->string('quotitem_qty_cm');
            $table->string('quotitem_subtotal_cm');
            $table->string('quotitem_setqty');
            $table->string('quotitem_periodqty');
            $table->string('quotitem_pricelist');
            $table->string('quotitem_forceunitprice');
            $table->string('quotitem_unitselling');
            $table->string('quotitem_last_mod_user');

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
