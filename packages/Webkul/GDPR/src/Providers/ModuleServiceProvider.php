<?php

namespace Webkul\GDPR\Providers;

use Webkul\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Webkul\GDPR\Models\GDPRDataRequest::class,
    ];

    /**
     * Register bindings.
     */
    public function register()
    {
        $this->app->bind(
            \Webkul\GDPR\Contracts\GDPRDataRequest::class,
            \Webkul\GDPR\Repositories\GDPRDataRequestRepository::class
        );
    }
}
