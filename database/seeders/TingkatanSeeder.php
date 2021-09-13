<?php

namespace Database\Seeders;

use App\Models\Tingkatan;
use Illuminate\Database\Seeder;

class TingkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tingkatan::create([
            "name" => "Raudhathul Athfal"
        ]);
        Tingkatan::create([
            "name" => "Madrasah Salafiyah Ula Setara SD"
        ]);
        Tingkatan::create([
            "name" => "Madrasah salafiyah Wustha Setara SMP"
        ]);
        Tingkatan::create([
            "name" => "Madrasah Salafiyah Ulya Setara SMA"
        ]);
    }
}
