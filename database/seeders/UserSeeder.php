<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::query()->create([
            'email' => 'admin@marketplace.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'name' => 'Admin',
            'surname' => '',
        ]);

        $adminRole = Role::where('name', 'admin')->first();

        $admin->assignRole($adminRole);
    }
}
