<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_contests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->integer('coins');
            $table->datetime('starts_at');
            $table->datetime('ends_at');
            $table->timestamps();
        });


        Schema::create('quiz_contest_quiz', function (Blueprint $table) {
            $table->integer('quiz_contest_id');
            $table->integer('quiz_id');
            $table->primary(['quiz_contest_id', 'quiz_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_contests');
        Schema::dropIfExists('quiz_contest_quiz');

    }
}
