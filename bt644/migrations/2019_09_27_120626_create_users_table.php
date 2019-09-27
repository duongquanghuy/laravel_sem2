<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rollNo');
            $table->string('nameStudent');
            $table->integer('age');
            $table->string('airline');
            $table->timestamps();
        });
         Schema::table('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rollNo');
            $table->string('nameStudent');
            $table->integer('age');
            $table->string('airline');
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
        Schema::dropIfExists('users');
    }
}
