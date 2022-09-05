<?php

namespace Jtolj\SimpleBladeHeroicons;

use Illuminate\Support\ServiceProvider;

class SimpleBladeHeroiconsServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/simple-blade-heroicons.php', 'simple-blade-heroicons');
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'heroicon');

        $this->publishes([
            __DIR__.'/../config/simple-blade-heroicons.php' => $this->app->configPath('simple-blade-heroicons.php'),
        ], 'simple-blade-heroicons-config');
    }
}
