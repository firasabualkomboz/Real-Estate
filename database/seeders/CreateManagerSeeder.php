<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = User::create([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'phone' => '970598082086',
            'type' => '1',
            'is_manager' => 1,
            'password' => bcrypt('password')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $manager->assignRole([$role->id]);


    }
}
