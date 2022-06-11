<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatePropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * DB::statement("SET foreign_key_checks=0");
         * DB::table('roles')->truncate();
         * DB::table('permissions')->truncate();
         * DB::statement("SET foreign_key_checks=1");
         */

        DB::table('properties')->delete();
        $properties = ['Apartment', 'land', 'villa', 'castle', 'Building', 'Farm', 'break', 'chalet', 'duplex'];
        foreach ($properties as $property) {
            Property::create(
                [
                    'name' => $property

                ]
            );
        }

    }
}
