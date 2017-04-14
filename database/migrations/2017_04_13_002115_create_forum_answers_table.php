<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->integer('user_id');
            $table->integer('forum_question_id');
            $table->integer('upvotes')->default(0);
            $table->integer('downvotes')->default(0);
            $table->integer('is_answer')->default(0);
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
        Schema::dropIfExists('forum_answers');
    }
}
