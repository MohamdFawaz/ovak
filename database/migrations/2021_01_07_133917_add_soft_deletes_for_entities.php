<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeletesForEntities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('districts',function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('finish_types',function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('property_types',function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('unit_types',function (Blueprint $table){
            $table->softDeletes();
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
