<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AssignPermissionToRolesSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $sellerRole = Role::where('name', 'seller')->first();
        $buyerRole = Role::where('name', 'buyer')->first();

        if ($adminRole) {
            $adminRole->syncPermissions([
                'view_users',
                'view_all_products',
                'view_all_sells'
            ]);
        }

        if ($sellerRole) {
            $sellerRole->syncPermissions([
                'create_product',
                'edit_product',
                'delete_product',
                'view_all_products',
                'view_own_products',
                'view_own_sells'
            ]);
        }

        if ($buyerRole) {
            $buyerRole->syncPermissions([
                'view_all_products',
                'add_product_to_cart',
                'remove_product_from_cart',
                'view_products_on_cart',
                'purchase_product',
                'view_own_purchases'
            ]);
        }
    }
}
