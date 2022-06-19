<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->where('role' , 1)->delete();

        DB::table('users')->insert([
            'username' => 'mohammed alhelal',
            'email' => 'mohamdalhelal7@gmail.com',
            'password' => Hash::make('bka!@#123'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'username' => 'istanbuliat admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('bka!@#123'),
            'role' => 1,
        ]);
    }
}
