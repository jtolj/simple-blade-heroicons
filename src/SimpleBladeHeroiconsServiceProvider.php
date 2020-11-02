<?php

namespace Jtolj\SimpleBladeHeroicons;

use Illuminate\Support\ServiceProvider;

class SimpleBladeHeroiconsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'heroicon');
    }
}
