<?php

namespace SachinKiranti\Emoji; 

use Illuminate\Support\ServiceProvider;

class EmojiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/emoji.php' => config_path('emoji.php'),
        ], 'emoji');

        $this->mergeConfigFrom(__DIR__.'/../config/emoji.php', 'emoji');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('emoji', function($app)
        {
            return $this->app->make('SachinKiranti\Emoji\Emoji');
        });
    }

}