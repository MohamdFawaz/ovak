<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('district_id')->unsigned()->nullable();
            $table->bigInteger('property_type_id')->unsigned()->nullable();
            $table->bigInteger('development_company_id')->unsigned()->nullable();
            $table->bigInteger('finish_type_id')->unsigned()->nullable();
            $table->bigInteger('unit_type_id')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->string('statue')->default('available');
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

        Schema::create('project_translations', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('project_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->unique(['project_id', 'locale']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('project_translations');
    }
}
