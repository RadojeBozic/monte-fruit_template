<?php

namespace Webkul\DataGrid\Providers;

use Webkul\Core\Providers\CoreModuleServiceProvider;
use Webkul\DataGrid\Models\SavedFilter;
use Webkul\DataGrid\Contracts\SavedFilter as SavedFilterContract;
use Webkul\DataGrid\Repositories\SavedFilterRepository;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    protected $models = [
        SavedFilter::class,
    ];

    public function register()
    {
        parent::register();

        $this->app->bind(SavedFilterContract::class, SavedFilterRepository::class);
    }
}
