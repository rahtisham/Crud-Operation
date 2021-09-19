<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassRoutineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_routine', function (Blueprint $table) {
            $table->increments('classRoutine_id' , true);
            $table->string('class');
            $table->string('subject');
            $table->string('section');
            $table->string('teacher');
            $table->string('classRoom');
            $table->string('days');
            $table->string('statingHour');
            $table->string('startingMinut');
            $table->string('endingHour');
            $table->string('endingMinut');
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
        Schema::dropIfExists('class_routine');
    }
}
