<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleAndAdminSeeder extends Seeder
{
    public function run(): void
    {
        // Create the 3 empty roles so the Registration system works. No fake users!
        Role::create(['name' => 'Administrator', 'slug' => 'admin']);
        Role::create(['name' => 'Cooperative Seller', 'slug' => 'seller']);
        Role::create(['name' => 'Customer', 'slug' => 'customer']);
    }
}