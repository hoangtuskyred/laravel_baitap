<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
                [
                    'name' => 'Tu',
                    'email' => Str::random(10) . '@gmail.com',
                    'age' => '20',
                    'weight' => '50',
                ],
                [
                    'name' => 'Tu',
                    'email' => Str::random(10) . '@gmail.com',
                    'age' => '20',
                    'weight' => '50',
                ],
                [
                    'name' => 'Tu',
                    'email' => Str::random(10) . '@gmail.com',
                    'age' => '20',
                    'weight' => '50',
                ],
            ]
        );
    }
}
