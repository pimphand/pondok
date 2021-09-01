<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            "address" => "address",
            "phone" => "phone",
            "email" => "email",
            "whatsapp" => "whatsapp",
            "instagram" => "instagram",
            "facebook" => "facebook",
            "youtube" => "youtube",
        ]);
    }
}
