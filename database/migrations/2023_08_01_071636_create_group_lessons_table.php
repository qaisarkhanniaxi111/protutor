<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_lessons', function (Blueprint $table) {
            $table->id();
            $table->integer('subject_id');
            $table->integer('teacher_level_id');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('teacher_level_id')->references('id')->on('teaches_levels')->onDelete('cascade');
            $table->string('title');
            $table->integer('participants');
            $table->decimal('price', 9, 2);
            $table->date('registration_start_date');
            $table->date('registration_end_date');
            $table->date('class_start_date');
            $table->date('class_end_date');
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
        Schema::dropIfExists('group_lessons');
    }
}
