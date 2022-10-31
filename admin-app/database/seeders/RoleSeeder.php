<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Adminisztrátor',
            'slug' => 'admin',
        ]);

        Role::create([
            'name' => 'Munkavállaló',
            'slug' => 'employee',
        ]);

        Role::create([
            'name' => 'Felhasználó',
            'slug' => 'user',
        ]);

        Role::create([
            'name' => 'Szuper Adminisztrátor',
            'slug' => 'super',
        ]);
    }
}
