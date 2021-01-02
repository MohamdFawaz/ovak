<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProjectsAndUnitsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('units',function (Blueprint $table){
            $table->bigInteger('property_type_id')->unsigned()->nullable();

            $table->foreign('property_type_id')->on('property_types')->references('id');
        });

        Schema::create('unit_finish_types',function (Blueprint $table){
            $table->id();
            $table->bigInteger('unit_id')->unsigned();
            $table->bigInteger('finish_type_id')->unsigned();
            $table->timestamps();
            $table->foreign('finish_type_id')->on('finish_types')->references('id');
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
