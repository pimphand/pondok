<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            "description" => "description",
            "image" => "image",
            "logo" => "logo",
            "mission" => "mission",
            "vision" => "vision",
        ]);
    }
}
