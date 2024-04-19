<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //gets admin role from role table
        $role_admin = Role::where('name', 'admin')->first();

        //gets user role from role table
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'daisy ibi';
        $admin->email = 'kanyeye@gmail.com';
        $admin->password = Hash::make('password');
        $admin->save();

        //attaches admin role to above user
        $admin->roles()->attach($role_user);

        $user = new User();
        $user->name = 'travis west';
        $user->email = 'traviswest@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        //attached user role to above user
        $user->roles()->attach($role_admin);
    }
}
