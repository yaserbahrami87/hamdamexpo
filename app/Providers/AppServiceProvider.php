<?php

namespace App\Providers;

use App\Models\festival;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        schema::defaultstringLength(250);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $festival=festival::latest()
                            ->first();
        $settings=Setting::get();
        $festivals=festival::orderby('id','desc')
            ->get();
        View::share('festival',$festival);
        View::share('festivals',$festivals);
        View::share('settings',$settings);
    }
}
