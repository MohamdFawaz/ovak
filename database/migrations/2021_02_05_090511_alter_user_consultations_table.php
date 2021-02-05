<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_consultations',function (Blueprint $table){
            $table->dropForeign('user_consultations_project_id_foreign');
            $table->dropColumn('project_id');
            $table->bigInteger('first_project_id')->unsigned();
            $table->bigInteger('second_project_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
