<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::query()->insert([
            [
                'name' => 'create_product',
                'guard_name' => 'api',
            ],
            [
                'name' => 'edit_product',
                'guard_name' => 'api',
            ],
            [
                'name' => 'delete_product',
                'guard_name' => 'api',
            ],
            [
                'name' => 'view_all_products',
                'guard_name' => 'api',
            ],
            [
                'name' => 'view_own_products',
                'guard_name' => 'api',
            ],
            [
                'name' => 'view_own_sells',
                'guard_name' => 'api',
            ],
            [
                'name' => 'add_product_to_cart',
                'guard_name' => 'api',
            ],
            [
                'name' => 'remove_product_from_cart',
                'guard_name' => 'api',
            ],
            [
                'name' => 'view_products_on_cart',
                'guard_name' => 'api',
            ],
            [
                'name' => 'purchase_product',
                'guard_name' => 'api',
            ],
            [
                'name' => 'view_own_purchases',
                'guard_name' => 'api',
            ],
            [
                'name' => 'view_users',
                'guard_name' => 'api',
            ],
            [
                'name' => 'view_all_sells',
                'guard_name' => 'api'
            ]]
        );
    }
}
