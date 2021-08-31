<?php

namespace Database\Seeders;

use App\Models\Building;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Building::create([
            "name" => "Asrama Putra",
            "hostel_id" => 1,
        ]);

        Building::create([
            "name" => "Asrama Putri",
            "hostel_id" => 2,
        ]);
    }
}
