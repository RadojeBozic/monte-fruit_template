<?php

namespace App\Providers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Arr;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $allowedIPs = array_map('trim', explode(',', config('app.debug_allowed_ips')));

        $allowedIPs = array_filter($allowedIPs);

        if (empty($allowedIPs)) {
            return;
        }

        if (in_array(Request::ip(), $allowedIPs)) {
            Debugbar::enable();
        } else {
            Debugbar::disable();
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ParallelTesting::setUpTestDatabase(function (string $database, int $token) {
            Artisan::call('db:seed');
        });

        Schema::defaultStringLength(191);

       /*  App::setLocale('sr');

        Lang::addNamespace('installer', resource_path('lang/vendor/installer')); */

       /*  App::setLocale('sr');

    Lang::addNamespace('installer', resource_path('lang/vendor/installer'));

    // Eksplicitno učitavanje installer prevoda
    $installerTranslations = require resource_path('lang/vendor/installer/sr/app.php');
    Lang::addLines($installerTranslations, 'sr', 'installer'); */

    App::setLocale('sr');

    Lang::addNamespace('installer', resource_path('lang/vendor/installer'));

    // Ispravno učitavanje Installer prevoda
    $installerTranslations = require resource_path('lang/vendor/installer/sr/app.php');

    // Pretvori multidimenzionalni niz u ravni Laravelov format
    $flattenedTranslations = Arr::dot($installerTranslations);

    Lang::addLines($flattenedTranslations, 'sr', 'installer');
    }
}
