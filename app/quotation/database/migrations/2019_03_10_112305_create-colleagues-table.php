<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColleaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleagues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('colleagues_cat')->nullable();
            $table->string('colleagues_name')->nullable();
            $table->string('colleagues_cname')->nullable();
            $table->string('colleagues_ename')->nullable();
            $table->string('colleagues_address')->nullable();
            $table->string('colleagues_contact')->nullable();
            $table->string('colleagues_contact_tel')->nullable();
            $table->string('colleagues_contact_mobile')->nullable();
            $table->string('colleagues_contact_fax')->nullable();
            $table->string('colleagues_contact_email')->nullable();
            $table->string('colleagues_relatedsales')->nullable();
            $table->string('colleagues_cr_code')->nullable();
            $table->string('colleagues_change_time')->nullable();
            $table->string('colleagues_owner_name')->nullable();
            $table->string('colleagues_remark')->nullable();
            $table->string('colleagues_remark2')->nullable();
            $table->string('colleagues_remark3')->nullable();
            $table->string('colleagues_last_mod_user')->nullable();
            $table->string('colleagues_creation_time')->nullable();
            $table->string('colleagues_last_mod_time')->nullable();
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
        Schema::dropIfExists('colleagues');
    }
}
