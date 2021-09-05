<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Profile;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $logo   = Profile::select('logo')->first();
        $image  = Profile::select('image')->first();
        $contact= Contact::first();
        $profil = Profile::first();
        // dd($logo);
        View::share([
            'logo'      => $logo,
            'contact'   => $contact,
            'profil'    => $profil,
            'image'     => $image,
        ]);

    }
}
