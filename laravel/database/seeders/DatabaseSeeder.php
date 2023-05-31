<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         \App\Models\User::factory()->create([
             'name' => 'Dimitar',
             'email' => 'chushkov90@gmail.com',
             'password' => bcrypt('cmnmes')
         ]);

         \App\Models\User::factory(10)->create();
         \App\Models\Property::factory(50)->create();

    }
}
