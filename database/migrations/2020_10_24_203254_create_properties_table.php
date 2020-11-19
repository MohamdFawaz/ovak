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
            $table->bigInteger('district_id')->unsigned()->nullable();
            $table->bigInteger('property_type_id')->unsigned()->nullable();
            $table->bigInteger('development_company_id')->unsigned()->nullable();
            $table->bigInteger('finish_type_id')->unsigned()->nullable();
            $table->bigInteger('unit_type_id')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->integer('area')->default(0);
            $table->decimal('price')->default(0);
            $table->date('delivery_date')->default(now());
            $table->timestamps();

            $table->foreign('district_id')
                    ->references('id')
                    ->on('districts')
                    ->onDelete('set null');

            $table->foreign('property_type_id')
                    ->references('id')
                    ->on('property_types')
                    ->onDelete('set null');

            $table->foreign('development_company_id')
                    ->references('id')
                    ->on('development_companies')
                    ->onDelete('set null');

            $table->foreign('finish_type_id')
                    ->references('id')
                    ->on('finish_types')
                    ->onDelete('set null');

            $table->foreign('unit_type_id')
                    ->references('id')
                    ->on('unit_types')
                    ->onDelete('set null');
        });

        Schema::create('property_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('property_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->text('description');
            $table->unique(['property_id', 'locale']);
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
        Schema::dropIfExists('property_translations');
    }
}
