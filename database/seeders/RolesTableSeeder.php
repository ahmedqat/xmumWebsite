<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminRole = Role::create(['name' => 'Super Admin','role_description' => 'Unrestricted Access']);
        $itEdtitorRole = Role::create(['name' => 'IT Editor','role_description' => 'Edit the IT department']);


        $adminUser = User::create([

            'name' => 'Admin',
            'email' => 'admin@xmu.edu.my',
            'password' => bcrypt('350916'),
            'role_id' => $adminRole->id,



        ]);

        $itEditorUser = User::create([

            'name' => 'IT',
            'email' => 'IT@xmu.edu.my',
            'password' => bcrypt('350916'),
            'role_id' => $itEdtitorRole->id,



        ]);
    }
}
