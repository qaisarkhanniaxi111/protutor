<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tutor_id');
            $table->unsignedBigInteger('group_lesson_id');
            $table->foreign('tutor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('group_lesson_id')->references('id')->on('group_lessons')->onDelete('cascade');
            $table->string('currency');
            $table->string('transaction_id')->unique();
            $table->bigInteger('amount');
            $table->string('status'); // available, pending, review
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
        Schema::dropIfExists('payments');
    }
}
