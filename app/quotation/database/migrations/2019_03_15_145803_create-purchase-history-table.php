<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_history', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');


            $string_columns = [
                'purchase_history_client_name',
                'purchase_history_price',
                'purchase_history_item',
                'purchase_history_date'
            ];

            foreach($string_columns as $string_column)
            {
                $table->string($string_column)
                    ->nullable()
                    ->index($string_column);
            }

            $table->text('purchase_history_remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_history');
    }
}
