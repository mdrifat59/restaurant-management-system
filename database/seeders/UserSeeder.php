<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            [ 'role_id' => 1, 'name' => 'Mohona Akter', 'email' => 'mohona@gmail.com',     'password' => Hash::make('admin') ],
            [ 'role_id' => 1, 'name' => 'Shorifa Akter', 'email' => 'shorifa@gmail.com',     'password' => Hash::make('admin') ],
            [ 'role_id' => 2, 'name' => 'John Doe', 'email' => 'admin@email.com',     'password' => Hash::make('secret') ],
            [ 'role_id' => 1, 'name' => 'Shawon Khan', 'email' => 'shawonk007@gmail.com',    'password' => Hash::make('Dhaka1216') ],
            [ 'role_id' => 1, 'name' => 'MD Rifat', 'email' => 'rifat@gamil.com',    'password' => Hash::make('123456789') ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
