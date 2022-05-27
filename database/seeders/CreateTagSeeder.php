<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        $tags = ['Apartment', 'land', 'villa', 'castle', 'Building', 'Farm', 'break', 'chalet', 'duplex'];
        foreach ($tags as $tag) {
            Tag::create(
                [
                    'name' => $tag

                ]
            );
        }

    }
}
