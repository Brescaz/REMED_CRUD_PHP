<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $age = Carbon::createFromDate(1991, 1, 2)->age;

        View::share('age', $age);

        View::share('myname', 'renato');

        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
