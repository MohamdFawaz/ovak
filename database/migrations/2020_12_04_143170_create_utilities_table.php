<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilities', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->timestamps();
        });

        Schema::create('utility_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('utility_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['utility_id', 'locale']);
            $table->foreign('utility_id')->references('id')->on('utilities')->onDelete('cascade');
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
