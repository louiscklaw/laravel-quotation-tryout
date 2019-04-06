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
            $table->string('quot_ref')->nullable();

            $table->string('quot_to_name')->nullable();
            $table->string('quot_to_address')->nullable();
            $table->string('quot_from_name')->nullable();
            $table->string('quot_from_address')->nullable();

            $table->string('quot_subtotal')->nullable();
            $table->string('quot_discount')->nullable();
            $table->string('quot_total')->nullable();

            $table->text('quot_terms')->nullable();
            $table->text('quot_remarks')->nullable();

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
