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
        DB::table('properties')->delete();
        $properties = ['Apartment', 'land'];
        foreach ($properties as $property) {
            Property::create(
                [
                    'name' => $property

                ]
            );
        }

    }
}
