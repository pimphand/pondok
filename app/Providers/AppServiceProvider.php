<?php

namespace App\Providers;

use App\Models\Hostel;
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
        $logo = Profile::select('logo')->first();
        $m = Hostel::where('id' ,1)->select('name')->get();
        $w = Hostel::where('id' ,2)->select('name')->get();
        // dd($w);
        View::share([
        'logo' => $logo,
        'w' => $w,
        'm' => $m,
        ]);
    }
}
