<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert(
        	[
            'rollNo' => Str::random(10),
            'nameStudent' => Str::random(10),
            'age' => 34,
            'airline' => Str::random(10),
            'address' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',

        ]);
        DB::table('student')->insert([
            'rollNo' => Str::random(10),
            'nameStudent' => Str::random(10),
            'age' => 34,
            'airline' => Str::random(10),
            'address' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',

        ]);
        DB::table('student')->insert([
            'rollNo' => Str::random(10),
            'nameStudent' => Str::random(10),
            'age' => 34,
            'airline' => Str::random(10),
            'address' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',

        ]);
        DB::table('student')->insert([
            'rollNo' => Str::random(10),
            'nameStudent' => Str::random(10),
            'age' => 34,
            'airline' => Str::random(10),
            'address' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',

        ]);
        DB::table('student')->insert([
            'rollNo' => Str::random(10),
            'nameStudent' => Str::random(10),
            'age' => 34,
            'airline' => Str::random(10),
            'address' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',

        ]);
    }
}
