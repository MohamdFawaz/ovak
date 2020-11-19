<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('district_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('district_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');

            $table->unique(['district_id', 'locale']);
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
        Schema::dropIfExists('district_translations');
    }
}
