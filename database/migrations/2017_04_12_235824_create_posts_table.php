<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('intro')->nullable();
            $table->text('featured_img')->nullable();
            $table->text('body');
            $table->text('tags');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('author');
            $table->string('author_about')->nullable();
            $table->date('published_at');
            $table->integer('is_tutorial')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
