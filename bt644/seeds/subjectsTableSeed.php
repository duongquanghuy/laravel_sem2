<?php

use Illuminate\Database\Seeder;

class subjectsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('subjects')->insert(
        	[
            'subjectsId' => Str::random(10),
            'subjectsName' => Str::random(10),
          

        	]);
         DB::table('subjects')->insert(
        	[
            'subjectsId' => Str::random(10),
            'subjectsName' => Str::random(10),
          

        	]);
         DB::table('subjects')->insert(
        	[
            'subjectsId' => Str::random(10),
            'subjectsName' => Str::random(10),
          

        	]);
         DB::table('subjects')->insert(
        	[
            'subjectsId' => Str::random(10),
            'subjectsName' => Str::random(10),
          

        	]);
         DB::table('subjects')->insert(
        	[
            'subjectsId' => Str::random(10),
            'subjectsName' => Str::random(10),
          

        	]);
    }
}
