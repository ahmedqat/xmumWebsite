<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Department::create([
            'name' => 'Library'
        ]);
        Department::create([
            'name' => 'IT Department'
        ]);
        Department::create([
            'name' => 'Admin Department'
        ]);
        Department::create([
            'name' => 'Finance Department'
        ]);
        Department::create([
            'name' => 'Research and Innovation'
        ]);
        Department::create([
            'name' => 'Human Resource Department'
        ]);
        Department::create([
            'name' => 'Procurement and Asset Management Department'
        ]);
        Department::create([
            'name' => 'Office of Academic Affairs (Academic Affairs)'
        ]);
        Department::create([
            'name' => 'Office of Academic Affairs (Quality Assurance)'
        ]);
    }
}
