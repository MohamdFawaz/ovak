<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('icon_class')->nullable();
            $table->timestamps();
        });

        Schema::create('property_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('property_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');

            $table->unique(['property_id', 'locale']);
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });

        Schema::table('propertiesables',function (Blueprint $table){
            $table->bigInteger('property_id')->unsigned()->nullable();
            $table->foreign('property_id')->references('id')->on('properties');

            $table->dropColumn(['icon_class','key']);
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
