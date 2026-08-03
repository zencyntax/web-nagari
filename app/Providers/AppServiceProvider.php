<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    View::composer('*', function ($view) {

        $setting = Setting::firstOrCreate(
    ['id' => 1],
    [
        'nama_website' => '',
        'nama_nagari' => '',
    ]
);

        $view->with('setting', $setting);

    });
    }
}
