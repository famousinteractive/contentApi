<?php

namespace Famousinteractive\ContentApi;

use Illuminate\Support\ServiceProvider;

class ContentApiServiceProvider extends ServiceProvider
{
    protected $commands = [
        'Famousinteractive\ContentApi\Commands\Initialize'
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/famousTranslator.php' => config_path('famousTranslator.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/Helpers/function.php';

        $this->commands($this->commands);
    }
}
