<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use Illuminate\Database\Seeder;

class PendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pendaftaran::create([
            "tingkatan_id" => "1",
            "description"  => "text1",
            "image"        => "image1",
        ]);
        Pendaftaran::create([
            "tingkatan_id" => "2",
            "description"  => "text2",
            "image"        => "image2",
        ]);
        Pendaftaran::create([
            "tingkatan_id" => "3",
            "description"  => "text3",
            "image"        => "image3",
        ]);
        Pendaftaran::create([
            "tingkatan_id" => "4",
            "description"  => "text4",
            "image"        => "image4",
        ]);
    }
}
