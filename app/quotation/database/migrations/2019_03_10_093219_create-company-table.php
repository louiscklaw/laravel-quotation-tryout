<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_cat')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_cname')->nullable();
            $table->string('company_ename')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_contact')->nullable();
            $table->string('company_contact_tel')->nullable();
            $table->string('company_contact_mobile')->nullable();
            $table->string('company_contact_fax')->nullable();
            $table->string('company_contact_email')->nullable();
            $table->string('company_contact_website')->nullable();
            $table->string('company_relatedsales')->nullable();
            $table->string('company_cr_code')->nullable();
            $table->string('company_change_time')->nullable();
            $table->string('company_owner_name')->nullable();
            $table->string('company_remark')->nullable();
            $table->string('company_remark2')->nullable();
            $table->string('company_remark3')->nullable();
            $table->string('company_last_mod_user')->nullable();
            $table->string('company_creation_time')->nullable();
            $table->string('company_last_mod_time')->nullable();
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
