<?php

namespace jpmurray\LaravelNoFLoC;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use jpmurray\LaravelNoFLoC\Middleware\NoFLoCMiddleware;

class LaravelNoFLoCServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $kernel = $this->app->make(Kernel::class);
        $kernel->pushMiddleware(NoFLoCMiddleware::class);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
