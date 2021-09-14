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
            "logo" => "55f67a64-0d40-4758-9770-8e50dcc1449b",
            "mission" => "mission",
            "vision" => "vision",
            "history"=> "history"
        ]);
    }
}
