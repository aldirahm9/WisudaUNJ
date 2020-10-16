<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        config(['app.locale' => 'id']);

        \Carbon\Carbon::setLocale('id');

        Schema::defaultStringLength(191);

        Blade::directive('rupiah', function ($angka)
        {
            return "Rp <?php echo number_format($angka, 0, ',', '.');?>";
        });

        if($this->app->environment('production')) {
            $url->forceScheme('https');
        }
    }
}