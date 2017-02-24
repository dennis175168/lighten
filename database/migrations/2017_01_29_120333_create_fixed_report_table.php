<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixedReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('fixed_reports1', function($table){
        $table->increments('id');
        $table->integer('report_id');
        $table->string('title');
        $table->string('contact_person');
        $table->string('contact_number');
        $table->string('location');
        $table->string('content');
        $table->string('img');
        $table->string('type');
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
