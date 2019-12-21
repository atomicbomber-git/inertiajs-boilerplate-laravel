<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        Inertia::share([
            "app" => [
                "name" => Config::get("app.name"),
                "user" => fn() => Auth::user(),
                "route" => function() {
                    return Route::current()->uri();
                },
            ],

            "errors" => function () {
                return Session::get("errors")
                    ? Session::get("errors")->getBag('default')->getMessages()
                    : (object) [];
            },
        ]);
    }
}
