<?php

use Illuminate\Support\Facades\Route;
use Webkul\Core\Http\Middleware\NoCacheMiddleware;


/**
 * Auth routes.
 */
require 'auth-routes.php';

Route::group(['middleware' => ['admin', NoCacheMiddleware::class], 'prefix' => config('app.admin_url')], function () {
    /**
     * Sales routes.
     */
    require 'sales-routes.php';

    /**
     * Catalog routes.
     */
    require 'catalog-routes.php';

    /**
     * Customers routes.
     */
    require 'customers-routes.php';

    /**
     * Marketing routes.
     */
    require 'marketing-routes.php';

    /**
     * CMS routes.
     */
    require 'cms-routes.php';

    /**
     * Reporting routes.
     */
    require 'reporting-routes.php';

    /**
     * Settings routes.
     */
    require 'settings-routes.php';

    /**
     * Configuration routes.
     */
    require 'configuration-routes.php';

    /**
     * Notification routes.
     */
    require 'notification-routes.php';

    /**
     * Remaining routes.
     */
    require 'rest-routes.php';
});

Route::get('/translation-test', function () {
    return view('admin.translation_test');
});
