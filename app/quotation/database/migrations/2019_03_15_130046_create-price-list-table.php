<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_list', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');

            $string_columns = [
                'price_list_name',
                'price_list_object',
                'price_list_target_id',
                'price_list_price',
                'price_list_disabled',
                'price_list_criteria',
                'price_list_available_since'
            ];


            foreach($string_columns as $string_column)
            {
                $table->string($string_column)
                    ->nullable()
                    ->index($string_column);
            }

            $table->text('price_list_desc')->nullable();
            $table->text('price_list_remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_list');

    }
}
