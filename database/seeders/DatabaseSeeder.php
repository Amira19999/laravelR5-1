<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\City;
use App\Models\Client;
use App\Models\Teacher;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();
        City::factory(30)->create();
        Client::factory(30)->create();
        Teacher::factory(30)->create();
        Student::factory(30)->create();

        
         
    
    }
}
