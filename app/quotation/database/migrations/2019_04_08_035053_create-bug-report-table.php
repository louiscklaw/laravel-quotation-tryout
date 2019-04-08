<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBugReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugs_report', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');

            $string_columns = [
                'bugsreport_contact_method',
                'bugsreport_date',
                'bugsreport_category'
            ];

            foreach($string_columns as $string_column)
            {
                $table->string($string_column)
                    ->nullable()
                    ->index($string_column);
            }

            $table->text('bugsreport_description')->nullable();
            $table->text('bugsreport_remarks')->nullable();

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
