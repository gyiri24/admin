<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug', '=', Role::ADMIN)->first();
        $superAdmin = Role::where('slug', '=', Role::SUPER_ADMIN)->first();
        $user = Role::where('slug', '=', Role::USER)->first();
        $employee = Role::where('slug', '=', Role::EMPLOYEE)->first();

        User::updateOrCreate(
            [
                'user_name' => 'holanekzoli',
            ],
            [
                'user_name' => 'holanekzoli',
                'first_name' => 'Holanek',
                'last_name' => 'Zoltán',
                'newsletter' => false,
                'amount' => 0,
                'email' => 'zoltan.holanek@sportandbalance.com',
                'role_id' => $superAdmin->id,
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
            ]
        );

        
        User::updateOrCreate(
            [
                'user_name' => 'Tóth Zsófia',
            ],
            [
                'user_name' => 'tothzsofia',
                'first_name' => 'Tóth',
                'last_name' => 'Zsófia',
                'newsletter' => false,
                'amount' => 0,
                'email' => 'zsofia.toth@sportandbalance.com',
                'role_id' => $admin->id,
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
            ]
        );

        User::updateOrCreate(
            [
                'user_name' => 'galbence',
            ],
            [
                'user_name' => 'galbence',
                'first_name' => 'Gál',
                'last_name' => 'Bence',
                'newsletter' => false,
                'amount' => 0,
                'email' => 'bence.gal@sportandbalance.com',
                'role_id' => $employee->id,
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
            ]
        );

        User::updateOrCreate(
            [
                'user_name' => 'mullerjulia',
            ],
            [
                'user_name' => 'mullerjulia',
                'first_name' => 'Müller',
                'last_name' => 'Júlia',
                'newsletter' => false,
                'amount' => 0,
                'email' => 'julia.muller@sportandbalance.com',
                'role_id' => $employee->id,
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
            ]
        );
        User::updateOrCreate(
            [
                'user_name' => 'vandatimea',
            ],
            [
                'user_name' => 'vandatimea',
                'first_name' => 'Vanda',
                'last_name' => 'Tímea',
                'newsletter' => false,
                'amount' => 0,
                'email' => 'timea.vanda@sportandbalance.com',
                'role_id' =>  $employee->id,
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
            ]
        );
        User::updateOrCreate(
            [
                'user_name' => 'kisszsofia',
            ],
            [
                'user_name' => 'kisszsofia',
                'first_name' => 'Kiss',
                'last_name' => 'Zsófia',
                'newsletter' => false,
                'amount' => 0,
                'email' => 'zsófia.kiss@sportandbalance.com',
                'role_id' =>  $employee->id,
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
            ]
        );
        User::updateOrCreate(
            [
                'user_name' => 'jakabpeter',
            ],
            [
                'user_name' => 'jakabpeter',
                'first_name' => 'Jakab',
                'last_name' => 'Péter',
                'newsletter' => true,
                'amount' => 6000,
                'email' => 'jakab.peter@gmail.com',
                'role_id' =>  $user->id,
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
            ]
        );
        User::updateOrCreate(
            [
                'user_name' => 'szabadospetra',
            ],
            [
                'user_name' => 'szabadospetra',
                'first_name' => 'Szabados',
                'last_name' => 'Petra',
                'newsletter' => true,
                'amount' => 10000,
                'email' => 'petra.szabados@gmail.com',
                'role_id' => $user->id,
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now(),
            ]
        );
    }
}
