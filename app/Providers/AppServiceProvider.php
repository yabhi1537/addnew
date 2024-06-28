<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
        view()->composer(
            ['auth.layouts'],
               function ($view) 
               {
                $view->with('user_test',
                DB::table('users')->get()->first());
                
               }
          );  
        
          view()->composer(
            ['auth.login'],

            function($view)
            {
                $view->with('user_login',
                    DB::table('users')->get());
            }
        );
        
        
        }
}
