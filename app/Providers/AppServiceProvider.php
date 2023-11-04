<?php

namespace App\Providers;

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
    public function boot(\Illuminate\Http\Request $request): void
    {
        // if (!empty(env('APP_URL')) && $request->server->has('http://localhost')) {
        //     $this->app['url']->forceRootUrl(env('APP_URL'));
        // }
    }
}
