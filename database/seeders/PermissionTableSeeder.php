<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::insert($this->roles());
        Permission::insert($this->permissions());


    }

    public function roles()
    {
        return array(
            array('id' => '2', 'name' => 'View', 'guard_name' => 'web', 'created_at' => NULL, 'updated_at' => NULL)
        );
    }

    /**
     * @return array
     */
    public function permissions()
    {
        return array(
            array('id' => '1', 'name' => 'role-list', 'guard_name' => 'web', 'group_name' => 'roles', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '2', 'name' => 'role-create', 'guard_name' => 'web', 'group_name' => 'roles', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '3', 'name' => 'role-edit', 'guard_name' => 'web', 'group_name' => 'roles', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '4', 'name' => 'role-delete', 'guard_name' => 'web', 'group_name' => 'roles', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '5', 'name' => 'tenant-list', 'guard_name' => 'web', 'group_name' => 'tenant', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '6', 'name' => 'tenant-create', 'guard_name' => 'web', 'group_name' => 'tenant', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '7', 'name' => 'tenant-edit', 'guard_name' => 'web', 'group_name' => 'tenant', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '8', 'name' => 'tenant-delete', 'guard_name' => 'web', 'group_name' => 'tenant', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '9', 'name' => 'owner-list', 'guard_name' => 'web', 'group_name' => 'owner', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '10', 'name' => 'owner-create', 'guard_name' => 'web', 'group_name' => 'owner', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '11', 'name' => 'owner-edit', 'guard_name' => 'web', 'group_name' => 'owner', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '12', 'name' => 'owner-delete', 'guard_name' => 'web', 'group_name' => 'owner', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '13', 'name' => 'estate-list', 'guard_name' => 'web', 'group_name' => 'estate', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '14', 'name' => 'estate-create', 'guard_name' => 'web', 'group_name' => 'estate', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '15', 'name' => 'estate-edit', 'guard_name' => 'web', 'group_name' => 'estate', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '16', 'name' => 'estate-delete', 'guard_name' => 'web', 'group_name' => 'estate', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '17', 'name' => 'apartment-list', 'guard_name' => 'web', 'group_name' => 'apartment', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '18', 'name' => 'apartment-create', 'guard_name' => 'web', 'group_name' => 'apartment', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '19', 'name' => 'apartment-edit', 'guard_name' => 'web', 'group_name' => 'apartment', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '20', 'name' => 'apartment-delete', 'guard_name' => 'web', 'group_name' => 'apartment', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '21', 'name' => 'property-list', 'guard_name' => 'web', 'group_name' => 'property', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '22', 'name' => 'property-create', 'guard_name' => 'web', 'group_name' => 'property', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '23', 'name' => 'property-edit', 'guard_name' => 'web', 'group_name' => 'property', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '24', 'name' => 'property-delete', 'guard_name' => 'web', 'group_name' => 'property', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '25', 'name' => 'tag-list', 'guard_name' => 'web', 'group_name' => 'tag', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '26', 'name' => 'tag-create', 'guard_name' => 'web', 'group_name' => 'tag', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '27', 'name' => 'tag-edit', 'guard_name' => 'web', 'group_name' => 'tag', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '28', 'name' => 'tag-delete', 'guard_name' => 'web', 'group_name' => 'tag', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '29', 'name' => 'contract-list', 'guard_name' => 'web', 'group_name' => 'contract', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '30', 'name' => 'contract-create', 'guard_name' => 'web', 'group_name' => 'contract', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '31', 'name' => 'contract-edit', 'guard_name' => 'web', 'group_name' => 'contract', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '32', 'name' => 'contract-delete', 'guard_name' => 'web', 'group_name' => 'contract', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '33', 'name' => 'invoice-list', 'guard_name' => 'web', 'group_name' => 'invoice', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '34', 'name' => 'invoice-create', 'guard_name' => 'web', 'group_name' => 'invoice', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '35', 'name' => 'invoice-edit', 'guard_name' => 'web', 'group_name' => 'invoice', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '36', 'name' => 'invoice-delete', 'guard_name' => 'web', 'group_name' => 'invoice', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '37', 'name' => 'appointment-list', 'guard_name' => 'web', 'group_name' => 'appointment', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '38', 'name' => 'appointment-create', 'guard_name' => 'web', 'group_name' => 'appointment', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '39', 'name' => 'appointment-edit', 'guard_name' => 'web', 'group_name' => 'appointment', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '40', 'name' => 'appointment-delete', 'guard_name' => 'web', 'group_name' => 'appointment', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),

            array('id' => '41', 'name' => 'employer-list', 'guard_name' => 'web', 'group_name' => 'Employer', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '42', 'name' => 'employer-create', 'guard_name' => 'web', 'group_name' => 'Employer', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '43', 'name' => 'employer-edit', 'guard_name' => 'web', 'group_name' => 'Employer', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '44', 'name' => 'employer-delete', 'guard_name' => 'web', 'group_name' => 'Employer', 'type' => '0', 'created_at' => NULL, 'updated_at' => NULL),


        );
    }
}