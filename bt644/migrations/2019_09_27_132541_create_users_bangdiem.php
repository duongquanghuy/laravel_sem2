<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersBangdiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BangDiem', function (Blueprint  $table) {
            
           

            $table->string('subjects_subjectsId')
                  ->references('subjectsId')
                  ->on('subjects');
           

            $table->string('student_rollNo')
                  ->references('rollNo')
                  ->on('student');

            $table->float('diem');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_bangdiem');
    }
}
