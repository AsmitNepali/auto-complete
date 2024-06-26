<?php

namespace PackiMaster\AutoComplete;

use Illuminate\Support\ServiceProvider;

class AutoCompleteServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'packimaster');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'packimaster');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/autocomplete.php', 'autocomplete');

        // Register the service the package provides.
        $this->app->singleton('autocomplete', function ($app) {
            return new AutoComplete;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['autocomplete'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/autocomplete.php' => config_path('autocomplete.php'),
        ], 'autocomplete.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/packimaster'),
        ], 'autocomplete.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/packimaster'),
        ], 'autocomplete.assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/packimaster'),
        ], 'autocomplete.lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
