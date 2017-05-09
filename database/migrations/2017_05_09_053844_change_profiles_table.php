<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeProfilesTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('profiles', function (Blueprint $table) {
            $table->string('phone')->default(null)->change();
            $table->text('photo')->default(null)->change();
            $table->string('city')->default(null)->change();
            $table->string('state')->default(null)->change();
            $table->string('country')->default(null)->change();
            $table->integer('rating')->default(1400);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
             $table->dropColumn('rating');
        });
    }
}
