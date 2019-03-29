<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');

            $string_columns = [
                'receipt_client_name',
                'receipt_client_company_name',
                'receipt_client_address',
                'receipt_client_phone_number',
                'receipt_client_email',
                'receipt_ship_to_name',
                'receipt_ship_to_company_name',
                'receipt_ship_to_address',
                'receipt_ship_to_phone_number',
                'receipt_ship_to_email',
                'receipt_master_receipt_number',
                'receipt_subtotal',
                'receipt_discount',
                'receipt_subtotal_less_discount',
                'receipt_tax',
                'receipt_total_tax',
                'receipt_shipping_fee',
                'receipt_handling_fee',
                'receipt_paid',
            ];

            foreach($string_columns as $string_column)
            {
                $table->string($string_column)
                    ->nullable()
                    ->index($string_column);
            }

            $table->text('recepipt_remarks')->nullable();
            $table->text('recepipt_notes')->nullable();

        });

        Schema::create('receipt_item', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');

            $string_columns = [
                'receipt_master_receipt_number',
                'receipt_item_qty',
                'receipt_item_unit_price',
                'receipt_item_total'
            ];

            foreach($string_columns as $string_column)
            {
                $table->string($string_column)
                    ->nullable()
                    ->index($string_column);
            }

            $table->text('receipt_item_desc')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipt');
    }
}
