<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('course_name');
            $table->string('grade');
            $table->integer('quiz1')->nullable();
            $table->integer('quiz2')->nullable();
            $table->integer('quiz3')->nullable();
            $table->integer('homework')->nullable();
            $table->integer('participation')->nullable();
            $table->integer('project')->nullable();
            $table->integer('midterm')->nullable();
            $table->integer('final_exam')->nullable();
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
        Schema::dropIfExists('grades');
    }
}
