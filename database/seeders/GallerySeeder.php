<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'building_id' => 1,
            'image' => "aadfdafadf"
        ]);

        Gallery::create([
            'building_id' => 2,
            'image' => "aadfdafadf"
        ]);
    }
}
