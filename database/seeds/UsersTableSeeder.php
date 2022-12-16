<?php 
use Illuminate\Database\Seeder; 

class UsersTableSeeder extends Seeder 
{ 
    public function run() { DB::table('users')->insert([
            [
                'email'          => 'tennis.123@email.com',
                'password'       => Hash::make('password'),
            ],
        ]);
    }
}