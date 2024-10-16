<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\HASH;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //inserting multiple users
    //Step 1: create the array of users
    $users = [
        [
        'name' => 'System Admin',
        'email' => 'admin@my-restaurant.com',
        'password' => Hash::make('Qwerty1.'),
        'user_type' => 'Administrator',
        'phone_no' => '0720333111',
        'location' => 'Nairobi'
        ],
        [
        'name' => 'John Doe',
        'email' => 'johndoe@my-restaurant.com',
        'password' => Hash::make('Qwerty1.'),
        'user_type' => 'Employee',
        'phone_no' => '0720333112',
        'location' => 'Nairobi',
        ],
        [
        'name' => 'Jane Doe',
        'email' => 'janedoehere@my-restaurant.com',
        'password' => Hash::make('Qwerty1.'),
        'user_type' => 'Employee',
        'phone_no' => '0720333113',
        'location' => 'Nairobi',
        ]
        ];
        //Step 2: insert the array using Query Builder
        DB::table('users')->insert($users);
        
        //call other seeders to insert records into the DB
        $this->call([
        CategorySeeder::class
        ]);

    }
}
