<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersStudentsEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers-students-evaluations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_teacher');
            $table->integer('id_student');
            $table->integer('evaluation');
            $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers-students-evaluations');
    }
}
