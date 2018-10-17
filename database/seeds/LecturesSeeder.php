<?php

use Illuminate\Database\Seeder;

class LecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->insert([
            'name' => 'Salyginiai sakiniai',
            'description' => 'LABAI SUNKU',
        ]);
        DB::table('lectures')->insert([
            'name' => 'Ciklai',
            'description' => 'paprasta',
        ]);
    }
}
