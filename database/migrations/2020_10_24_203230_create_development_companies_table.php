<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopmentCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('development_companies', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('development_company_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('dev_company_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');

            $table->unique(['dev_company_id', 'locale']);
            $table->foreign('dev_company_id')->references('id')->on('development_companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('development_companies');
        Schema::dropIfExists('development_company_translations');
    }
}
