<?php

namespace TTM\LivewireAsync;

use Illuminate\Support\ServiceProvider;

class LivewireAsyncServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'livewire-async');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
