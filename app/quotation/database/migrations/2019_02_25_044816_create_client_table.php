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
            $table->string('client_cat');
            $table->string('client_name');
            $table->string('client_cname');
            $table->string('client_ename');
            $table->string('client_address');
            $table->string('client_contact');
            $table->string('client_contact_tel');
            $table->string('client_contact_mobile');
            $table->string('client_contact_fax');
            $table->string('client_contact_email');
            $table->string('client_relatedsales');
            $table->string('client_cr_code');
            $table->string('client_change_time');
            $table->string('client_owner_name');
            $table->string('client_remark');
            $table->string('client_remark2');
            $table->string('client_remark3');
            $table->string('client_last_mod_user');
            $table->string('client_creation_time');
            $table->string('client_last_mod_time');
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
