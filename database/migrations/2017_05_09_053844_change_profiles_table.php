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
            $table->string('phone')->nullable()->default(null)->change();
            $table->text('photo')->nullable()->default(null)->change();
            $table->string('city')->nullable()->default(null)->change();
            $table->string('state')->nullable()->default(null)->change();
            $table->string('country')->nullable()->default(null)->change();
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
