<?php

namespace Webkul\Notification\Providers;

use Webkul\Core\Providers\CoreModuleServiceProvider;
use Webkul\Notification\Contracts\Notification as NotificationContract;
use Webkul\Notification\Repositories\NotificationRepository;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Webkul\Notification\Models\Notification::class,
    ];

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->bind(
            NotificationContract::class,
            NotificationRepository::class
        );
    }
}
