<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            ['name' => 'Tu', 'email' => Str ::random(10).'@gmail.com', 'age' => '20', 'weight' => '50',],
            ['name' => 'Thong', 'email' => Str ::random(10).'@gmail.com', 'age' => '20', 'weight' => '60',],
            ['name' => 'Hoang', 'email' => Str ::random(10).'@gmail.com', 'age' => '20', 'weight' => '50',],
        ]);
    }
}
