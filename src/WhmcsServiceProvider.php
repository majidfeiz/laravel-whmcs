<?php


namespace sermajid\LaravelWhmcs;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use sermajid\LaravelWhmcs\Whmcs;
use sermajid\LaravelWhmcs\Facades\Whmcs as WhmcsFacade;


class WhmcsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/config/whmcs.php' => config_path('whmcs.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/config/whmcs.php', 'whmcs');

        $this->app->singleton('whmcs', function () {
            return new Whmcs();
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Whmcs', WhmcsFacade::class);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('whmcs');
    }
}
