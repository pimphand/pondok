<?php

namespace App\Providers;

use App\Models\Building;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Profile;
use App\Models\Tingkatan;
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
        $news       = News::latest()->limit(6)->get();
        $p          = Tingkatan::select('name')->first();
        // dd($logo);
        View::share([
            'logo'      => $logo,
            'image'     => $image,
            'berita'    => $news,
            'p'    => $p,
        ]);

    }
}
