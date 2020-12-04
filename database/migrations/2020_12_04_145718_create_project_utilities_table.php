<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectUtilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_utilities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->unsigned();
            $table->bigInteger('utility_id')->unsigned();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('utility_id')->references('id')->on('utilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_utilities');
    }
}
