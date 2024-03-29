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
        if (env('APP_ENV') === 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }
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
        \Carbon\Carbon::setToStringFormat('d/m/Y');

        Schema::defaultStringLength(191);

        Blade::directive('rupiah', function ($angka)
        {
            return "Rp <?php echo number_format($angka, 0, ',', '.');?>";
        });

        if (env('APP_ENV') === 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}
