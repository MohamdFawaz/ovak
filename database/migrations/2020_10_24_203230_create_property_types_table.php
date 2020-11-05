<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('property_type_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('property_type_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');

            $table->unique(['property_type_id', 'locale']);
            $table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_types');
        Schema::dropIfExists('property_type_translations');
    }
}
