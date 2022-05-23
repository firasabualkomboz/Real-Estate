<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = [
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'phone' => '970598082086',
            'type' => '1',
            'is_manager' => 1,
            'password' => bcrypt('password')
        ];
         User::create($manager);

    }
}
