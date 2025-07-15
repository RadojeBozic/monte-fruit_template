<?php

namespace Webkul\DataTransfer\Providers;

use Webkul\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Webkul\DataTransfer\Models\Import::class,
        \Webkul\DataTransfer\Models\ImportBatch::class,
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
            \Webkul\DataTransfer\Contracts\Import::class,
            \Webkul\DataTransfer\Repositories\ImportRepository::class
        );

        $this->app->bind(
            \Webkul\DataTransfer\Contracts\ImportBatch::class,
            \Webkul\DataTransfer\Repositories\ImportBatchRepository::class
        );

        // Opcionalno ako imaš Export funkcionalnost
        
    }
}
