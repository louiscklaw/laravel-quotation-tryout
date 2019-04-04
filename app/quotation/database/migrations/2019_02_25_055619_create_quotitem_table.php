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
            $table->string('quotitem_name')->nullable();
            $table->string('quotitem_quantity')->nullable();
            $table->string('quotitem_unitprice')->nullable();
            $table->string('quotitem_subtotal')->nullable();
            $table->string('quotitem_remarks')->nullable();
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
