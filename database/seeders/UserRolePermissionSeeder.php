<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create(
            ['name' => 'owner',]
        );

        $buyerRole = Role::create(
            ['name' => 'buyer',]
        );
        
        $ownerAccount = User::create([
            'name' => 'Dion Firmansyah',
            'email' => 'owner@yonpharma.test',
            'password' => bcrypt('123123123'),
            'avatar' => 'img/avatar/avatar.svg',
        ]);

        $buyerAccount = User::create([
            'name' => 'Nisrina Sausan',
            'email' => 'buyer@yonpharma.test',
            'password' => bcrypt('123123123'),
            'avatar' => 'img/avatar/avatar.svg',
        ]);

        $ownerAccount->assignRole($ownerRole);

        $buyerAccount->assignRole($buyerRole);

    }
}
