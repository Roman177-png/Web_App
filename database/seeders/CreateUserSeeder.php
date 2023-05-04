<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
               'name'=>'Cleint',
               'email'=>'client@gmail.com',
               'role'=> 0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'trainer',
               'email'=>'trainer@gmail.com',
               'role'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'receptionist',
               'email'=>'receptionist@gmail.com',
               'role'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=> 3,
                'password'=> bcrypt('123456'),
             ],
        ];
    
        foreach ($users as $key => $user) 
        {
            User::create($user);
        }
    }
}
