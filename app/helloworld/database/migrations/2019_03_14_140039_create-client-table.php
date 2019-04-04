<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('client');

        Schema::create('client', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');

            $string_columns = [
                'client_name',
                'client_cname',
                'client_gender',
                'client_brithday',
                'client_whatsapp',
                'client_mobile',
                'client_address',
                'client_email',
                'client_date',
                'client_status',
                'client_update_at'
            ];

            foreach($string_columns as $string_column)
            {
                $table->string($string_column)
                    ->nullable()
                    ->index($string_column);
            }

            $table->text('client_desc')->nullable();
            $table->text('client_remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
