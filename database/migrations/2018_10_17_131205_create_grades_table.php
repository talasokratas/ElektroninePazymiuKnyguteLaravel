<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lecture_id');
            $table->integer('student_id');
            $table->integer('grade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidgit commit
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
