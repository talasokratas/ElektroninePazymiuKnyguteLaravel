<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Petras',
            'surname' => 'Petraits',
            'email' => str_random(10).'@gmail.com',
            'phone' => str_random(8),
            'created_at' => Carbon::now()
        ]);

        DB::table('students')->insert([
            'name' => 'Jonas',
            'surname' => 'Jonaits',
            'email' => str_random(10).'@gmail.com',
            'phone' => str_random(8),
            'created_at' => Carbon::now()
        ]);

    }
}
