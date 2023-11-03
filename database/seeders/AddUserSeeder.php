<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     "name"           => "bayu", 
        //     "email"          => "bayu@gmail.com", 
        //     "Profile"          => "",
        //     "level"          => "Admin", 
        //     "password"       => \bcrypt('bayu12345')
        // ]);
         User::create([
            "name"           => "BlackCat",
             
            "email"          => "BlackCat@gmail.com", 
            "Profile"          => "",
            "level"          => "Admin", 
            "password"       => \bcrypt('admin123')
         ]);
        //  User::create([
        //     "name"           => "add",
             
        //     "email"          => "add@gmail.com", 
        //     "Profile"          => "",
        //     "level"          => "User", 
        //     "password"       => \bcrypt('admin123')
        //  ]);
         // User::create([
         //    "name"           => "admin", 
         //    "email"          => "admin@gmail.com", 
         //    "Profile"          => "",
         //    "level"          => "admin", 
         //    "password"       => \bcrypt('admin123')
         // ]);
    }
}