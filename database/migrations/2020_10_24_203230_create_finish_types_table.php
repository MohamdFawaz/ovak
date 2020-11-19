<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinishTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finish_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('finish_type_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('finish_type_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');

            $table->unique(['finish_type_id', 'locale']);
            $table->foreign('finish_type_id')->references('id')->on('finish_types')->onDelete('cascade');
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
