<?php
namespace Trungpv1601\FbOAuth;

use Illuminate\Support\ServiceProvider;
use Trungpv1601\FbOAuth\Facebook;

class FbOAuthPHPServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Facebook::class, function()
        {
            return new Facebook();
        });
    }
}