<?php namespace Dyt\Providers;

use Illuminate\Support\ServiceProvider;


/**
 * Class EventsServiceProvider
 * @package Dyt\Providers
 * Register Dyt event listeners
 */
class EventsServiceProvider extends ServiceProvider{
    public function register()
    {
        $this->app['events']->listen('Dyt.*', 'Dyt\Handlers\EmailNotifier');
    }
}