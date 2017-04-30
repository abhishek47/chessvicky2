<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuzzleContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puzzle_contests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->integer('coins');
            $table->datetime('starts_at');
            $table->datetime('ends_at');
            $table->timestamps();
        });

         Schema::create('puzzle_contest_puzzle', function (Blueprint $table) {
            $table->integer('puzzle_contest_id');
            $table->integer('puzzle_id');
            $table->primary(['puzzle_contest_id', 'puzzle_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puzzle_contests');
        Schema::dropIfExists('puzzle_contest_puzzle');
    }
}
