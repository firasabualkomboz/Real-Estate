<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CreateManagerSeeder::class);
        $this->call(CreatePropertySeeder::class);
        $this->call(CreateTagSeeder::class);
        $this->call(PermissionTableSeeder::class);
    }
}
