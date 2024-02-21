<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::query()->insert([
            [
                'name' => 'admin',
                'guard_name' => 'api',
            ],
            [
                'name' => 'seller',
                'guard_name' => 'api',
            ],
            [
                'name' => 'buyer',
                'guard_name' => 'api',
            ],
        ]);
    }
}
