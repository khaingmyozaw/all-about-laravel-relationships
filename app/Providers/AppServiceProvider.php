<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
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
        Relation::morphMap([
            'employee' => 'App\Models\Employee',
            'customer' => 'App\Models\Customer',
            'user'     => 'App\Models\User',
            'thread'   => 'App\Models\Thread',
            'article'  => 'App\Models\Article',
        ]);
    }
}
