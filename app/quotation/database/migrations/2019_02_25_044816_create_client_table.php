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
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_cat')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_cname')->nullable();
            $table->string('client_ename')->nullable();
            $table->string('client_address')->nullable();
            $table->string('client_contact')->nullable();
            $table->string('client_contact_tel')->nullable();
            $table->string('client_contact_mobile')->nullable();
            $table->string('client_contact_fax')->nullable();
            $table->string('client_contact_email')->nullable();
            $table->string('client_relatedsales')->nullable();
            $table->string('client_cr_code')->nullable();
            $table->string('client_change_time')->nullable();
            $table->string('client_owner_name')->nullable();
            $table->string('client_remark')->nullable();
            $table->string('client_remark2')->nullable();
            $table->string('client_remark3')->nullable();
            $table->string('client_last_mod_user')->nullable();
            $table->string('client_creation_time')->nullable();
            $table->string('client_last_mod_time')->nullable();
            $table->timestamps();
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
