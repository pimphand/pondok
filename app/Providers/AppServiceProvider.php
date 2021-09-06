<?php

namespace App\Providers;

use App\Models\Building;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Profile;
use App\Models\Video;
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
        $logo       = Profile::select('logo')->first();
        $image      = Profile::select('image')->first();
        $contact    = Contact::first();
        $profil     = Profile::first();
        $female     = Gallery::where('building_id', 2)->get();
        $man        = Gallery::where('building_id', 1)->get();
        $video      = Video::first();
        // dd($logo);
        View::share([
            'logo'      => $logo,
            'contact'   => $contact,
            'profil'    => $profil,
            'image'     => $image,
            'female'    => $female,
            'man'       => $man,
            'video'     => $video,
        ]);

    }
}
