<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_cat')->nullable();
            $table->string('site_name')->nullable();
            $table->string('site_cname')->nullable();
            $table->string('site_ename')->nullable();
            $table->string('site_address')->nullable();
            $table->string('site_contact')->nullable();
            $table->string('site_contact_tel')->nullable();
            $table->string('site_contact_mobile')->nullable();
            $table->string('site_contact_fax')->nullable();
            $table->string('site_contact_email')->nullable();
            $table->string('site_relatedsales')->nullable();
            $table->string('site_cr_code')->nullable();
            $table->string('site_change_time')->nullable();
            $table->string('site_owner_name')->nullable();
            $table->string('site_remark')->nullable();
            $table->string('site_remark2')->nullable();
            $table->string('site_remark3')->nullable();
            $table->string('site_last_mod_user')->nullable();
            $table->string('site_creation_time')->nullable();
            $table->string('site_last_mod_time')->nullable();
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
        //
    }
}
