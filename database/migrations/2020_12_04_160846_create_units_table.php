<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->unsigned();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('project_id')->references('id')->on('projects');
        });

        Schema::create('unit_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('unit_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->text('description');
            $table->unique(['unit_id', 'locale']);
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
