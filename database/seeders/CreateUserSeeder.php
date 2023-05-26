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
               'name'=>'Harrison',
               'surname'=>'Craig',
               'email'=>'client@gmail.com',
               'gender'=>'Male',
               'age'=>30,
               'phone_number'=>'+432323123',
               'role'=> 0,
               'image'=>'client.jpg',
               'password'=> bcrypt('123456'),
               'description' => 'Lorem'

            ],
            [
               'name'=>'Johnathan',
               'surname'=>'Bass',
               'gender'=>'Male',
               'age'=>49,
               'phone_number'=>'+482323123',
               'email'=>'trainer@gmail.com',
               'role'=> 1,
               'password'=> bcrypt('123456'),
               'experience'=>'15 years',
               'speciality' => 'lorem',
               'description' => 'lorem'

            ],
            [
               'name'=>'Raihan',
               'surname'=>'Ford',
               'email'=>'receptionist@gmail.com',
               'gender'=>'Female',
               'age'=>28,
               'phone_number'=>'+432323124',
               'role'=> 2,
               'image'=>'receptionist.jpg',
               'password'=> bcrypt('123456'),
               'password'=> bcrypt('123456'),
               'experience'=>'5 years',
               'speciality' => 'receptionist',
               'description' => ' I am organized, communicates well, and practices excellent time management skills'

            ],
            [
                'name'=>'Julius',
                'surname'=>'Mcgee',
                'email'=>'admin@gmail.com',
                'gender'=>'Male',
                'age'=>45,
                'phone_number'=>'+432323122',
                'role'=> 3,
                'image'=>'admin.jpg',
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Harrison2',
                'surname'=>'Craig',
                'email'=>'client2@gmail.com',
                'gender'=>'Male',
                'age'=>30,
                'phone_number'=>'+432323123',
                'role'=> 0,
                'image'=>'client.jpg',
                'password'=> bcrypt('123456'),
                'description' => 'Lorem'
 
             ],
             [
                'name'=>'Johnathan2',
                'surname'=>'Bass',
                'gender'=>'Male',
                'age'=>49,
                'phone_number'=>'+482323123',
                'email'=>'trainer2@gmail.com',
                'role'=> 1,
                'password'=> bcrypt('123456'),
                'experience'=>'15 years',
                'speciality' => 'lorem',
                'description' => 'lorem'
 
             ],
             [
                'name'=>'Raihan2',
                'surname'=>'Ford',
                'email'=>'receptionist2@gmail.com',
                'gender'=>'Female',
                'age'=>28,
                'phone_number'=>'+432323124',
                'role'=> 2,
                'image'=>'receptionist.jpg',
                'password'=> bcrypt('123456'),
                'password'=> bcrypt('123456'),
                'experience'=>'5 years',
                'speciality' => 'receptionist',
                'description' => ' I am organized, communicates well, and practices excellent time management skills'
 
             ],
             [
                 'name'=>'Julius2',
                 'surname'=>'Mcgee',
                 'email'=>'admin2@gmail.com',
                 'gender'=>'Male',
                 'age'=>45,
                 'phone_number'=>'+432323122',
                 'role'=> 3,
                 'image'=>'admin.jpg',
                 'password'=> bcrypt('123456'),
              ],
              [
                'name'=>'Harrison3',
                'surname'=>'Craig',
                'email'=>'client3@gmail.com',
                'gender'=>'Male',
                'age'=>30,
                'phone_number'=>'+432323123',
                'role'=> 0,
                'image'=>'client.jpg',
                'password'=> bcrypt('123456'),
                'description' => 'Lorem'
 
             ],
             [
                'name'=>'Johnathan3',
                'surname'=>'Bass',
                'gender'=>'Male',
                'age'=>49,
                'phone_number'=>'+482323123',
                'email'=>'trainer3@gmail.com',
                'role'=> 1,
                'password'=> bcrypt('123456'),
                'experience'=>'15 years',
                'speciality' => 'lorem',
                'description' => 'lorem'
 
             ],
             [
                'name'=>'Raihan3',
                'surname'=>'Ford',
                'email'=>'receptionist3@gmail.com',
                'gender'=>'Female',
                'age'=>28,
                'phone_number'=>'+432323124',
                'role'=> 2,
                'image'=>'receptionist.jpg',
                'password'=> bcrypt('123456'),
                //'password'=> bcrypt('123456'),
                'experience'=>'5 years',
                'speciality' => 'receptionist',
                'description' => ' I am organized, communicates well, and practices excellent time management skills'
 
             ],
             [
                 'name'=>'Julius3',
                 'surname'=>'Mcgee',
                 'email'=>'admin3@gmail.com',
                 'gender'=>'Male',
                 'age'=>45,
                 'phone_number'=>'+432323122',
                 'role'=> 3,
                 'image'=>'admin.jpg',
                 'password'=> bcrypt('123456'),
              ],
        ];
    
        foreach ($users as $key => $user) 
        {
            User::create($user);
        }
    }
}
