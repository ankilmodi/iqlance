<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class DatabaseSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


     $users = [
            [
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'admin' => '1',
            'user' => '0',
            ],[
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'),
                'admin' => '0',
                'user' => '1'
            ]
        ];

         User::insert($users);
         
    }
    
}
