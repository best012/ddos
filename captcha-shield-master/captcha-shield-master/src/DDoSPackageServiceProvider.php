<?php

namespace Eckmars\DDoSProtection;

use Illuminate\Support\ServiceProvider;

class DDoSPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'ddos-protection');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/ddos-protection'),
        ], 'views');
    }

    public function register()
    {
        $this->app->middleware([
            'ddos.check' => \Eckmars\DDoSProtection\Middleware\DDoSCheck::class,
        ]);
    }
protected function defineRoutes()
    {
        Route::middleware(['web', 'ddos.check'])
            ->group(function () {
                Route::post('/ddos_check', function () {
                    // Your route logic here
                });
            });
    }
}
 
