<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'lecture_id' => '1',
            'student_id' => '1',
            'grade' => '9',
             'created_at' => Carbon::now()

        ]);
        DB::table('grades')->insert([
            'lecture_id' => '1',
            'student_id' => '2',
            'grade' => '10',
             'created_at' => Carbon::now()

        ]);
        DB::table('grades')->insert([
            'lecture_id' => '2',
            'student_id' => '1',
            'grade' => '8',
             'created_at' => Carbon::now()

        ]);
        DB::table('grades')->insert([
            'lecture_id' => '2',
            'student_id' => '2',
            'grade' => '9',
             'created_at' => Carbon::now()

        ]);


    }
}
