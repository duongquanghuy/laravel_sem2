<?php

use Illuminate\Database\Seeder;

class bangdiemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bangdiem')->insert(
        	[
        	'subjects_subjectsId' => 2,
        	'student_rollNo' =>2,
            'diem' => 1,
           
        ]);
         DB::table('bangdiem')->insert(
        	[
        	'subjects_subjectsId' => 222,
        	'student_rollNo' =>222,
            'diem' => 2,
           
        ]);
          DB::table('bangdiem')->insert(
        	[
        		'subjects_subjectsId' => 233,
        	'student_rollNo' =>233,
            'diem' => 3,
           
        ]);
           DB::table('bangdiem')->insert(
        	[
        	'subjects_subjectsId' => 244,
        	'student_rollNo' =>244,
            'diem' => 4,
           
        ]);
            DB::table('bangdiem')->insert(
        	[
        	'subjects_subjectsId' => 255,
        	'student_rollNo' =>255,
            'diem' =>5,
           
        ]);
    }
}
