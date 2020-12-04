<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_amenities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->unsigned();
            $table->string('image');
            $table->timestamps();
            $table->foreign('project_id')->references('id')->on('projects');
        });

        Schema::create('project_amenity_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('project_amenity_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['project_amenity_id', 'locale']);
            $table->foreign('project_amenity_id')->references('id')->on('project_amenities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_amenities');
    }
}
