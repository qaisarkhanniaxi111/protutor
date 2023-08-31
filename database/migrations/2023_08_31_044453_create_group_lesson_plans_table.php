<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupLessonPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_lesson_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_lesson_id');
            $table->foreign('group_lesson_id')->references('id')->on('group_lessons')->onDelete('cascade');
            $table->string('type');
            $table->string('time');
            $table->date('date');
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
        Schema::dropIfExists('group_lesson_plans');
    }
}
