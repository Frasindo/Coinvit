<?php

namespace Coinvit\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      require_once app_path('Helpers/ArdorHelper.php');
      require_once app_path('Helpers/ExchangeHelper.php');
      require_once app_path('Helpers/ArdorTrade.php');
      require_once app_path('Helpers/Main.php');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
