<?php

namespace Coinvit\Providers;

use Coinvit\Auth\UserProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class ValidateProvider extends ServiceProvider {
   public function boot()
   {
       $this->registerPolicies();
       $this->app->auth->provider('directlogin', function ($app, array $config) {
           return new UserProvider($app['hash'], $config['model']);
       });
   }
}
