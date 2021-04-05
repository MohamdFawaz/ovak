<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserFilterLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_filter_logs',function (Blueprint $table){
            $table->bigInteger('property_type_id')->unsigned()->nullable();
            $table->bigInteger('district_id')->unsigned()->nullable();
            $table->bigInteger('development_company_id')->unsigned()->nullable();
            $table->bigInteger('unit_type_id')->unsigned()->nullable();
            $table->foreign('property_type_id')->references('id')->on('property_types');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('development_company_id')->references('id')->on('development_companies');
            $table->foreign('unit_type_id')->references('id')->on('unit_types');
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
