<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Employee',
            'username' => 'employee',
            'email' => 'emp@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' =>  '2020-11-18',
            'updated_at' => '2020-11-18',
        ]);
    }
}
