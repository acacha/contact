<?php

namespace Acacha\Contact\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ContactServiceProvider.
 */
class ContactServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the application services.
     */
    public function register()
    {
        if (!defined('ACACHA_CONTACT_PATH')) {
            define('ACACHA_CONTACT_PATH', realpath(__DIR__.'/../../'));
        }

        $this->app->bind('Contact', function () {
            return new \Acacha\Contact\Contact();
        });

    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->migrations();
    }

    /**
     * Configure package migrations.
     */
    protected function migrations()
    {
        $this->loadMigrationsFrom(ACACHA_CONTACT_PATH.'/database/migrations');
    }

}