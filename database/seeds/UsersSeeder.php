<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Evaldas Vaitonis',
            'email' => 'evaldas.vaitonis@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => Carbon::now()
        ]);
    }
}
