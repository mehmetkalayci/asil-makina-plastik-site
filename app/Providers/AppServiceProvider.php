<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Configs;
use App\Models\Products;
use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
        ResetPassword::createUrlUsing(function (User $user, string $token) {
            return route('admin.password.reset', $token) ;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $site = request()->segment(1);

        Session::put('site', $site);

        if ($site === 'plastik') {
            $products = Products::where('site', 'Plastik')->take(5)->get();
        } else {
            $products = Products::where('site', 'Makine')->take(5)->get();
        }

        $settings = Configs::first();
        view()->share('address', $settings->address);
        view()->share('phone', $settings->phone);
        view()->share('email1', $settings->email1);
        view()->share('email2', $settings->email2);
        view()->share('email3', $settings->email3);
        view()->share('gmap_url', $settings->gmap_url);
        view()->share('opening_hours', $settings->opening_hours);
        view()->share('facebook', $settings->facebook);
        view()->share('linkedin', $settings->linkedin);
        view()->share('twitter', $settings->twitter);
        view()->share('instagram', $settings->instagram);
        view()->share('youtube', $settings->youtube);
    }
}
