<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::createOrUpdate([
            'name' => 'Adminisztrátor',
            'slug' => 'admin',
        ]);

        Role::createOrUpdate([
            'name' => 'Munkavállaló',
            'slug' => 'employee',
        ]);

        Role::createOrUpdate([
            'name' => 'Felhasználó',
            'slug' => 'user',
        ]);

        Role::createOrUpdate([
            'name' => 'Szuper Adminisztrátor',
            'slug' => 'super',
        ]);
    }
}
