<?php

return [
    'modules' => [
        \Webkul\Core\Providers\ModuleServiceProvider::class,
        \Webkul\Admin\Providers\ModuleServiceProvider::class,
        \Webkul\Attribute\Providers\ModuleServiceProvider::class,
        \Webkul\Category\Providers\ModuleServiceProvider::class,
        \Webkul\Product\Providers\ModuleServiceProvider::class,
        \Webkul\Shop\Providers\ModuleServiceProvider::class,
        \Webkul\Checkout\Providers\ModuleServiceProvider::class,
        \Webkul\Customer\Providers\ModuleServiceProvider::class,
        \Webkul\Sales\Providers\ModuleServiceProvider::class,
        \Webkul\Tax\Providers\ModuleServiceProvider::class,
        \Webkul\User\Providers\ModuleServiceProvider::class,
        \Webkul\Inventory\Providers\ModuleServiceProvider::class,
        \Webkul\CMS\Providers\ModuleServiceProvider::class,
        \Webkul\Shipping\Providers\ModuleServiceProvider::class,
        \Webkul\Payment\Providers\ModuleServiceProvider::class,
        // Dodaj ovde dodatne module ako ih imaš
        \Webkul\CatalogRule\Providers\ModuleServiceProvider::class,
        \Webkul\Theme\Providers\ModuleServiceProvider::class,       // dodaj ovo
        \Webkul\Marketing\Providers\ModuleServiceProvider::class,
        \Webkul\CartRule\Providers\ModuleServiceProvider::class,
        \Webkul\Notification\Providers\ModuleServiceProvider::class,
        \Webkul\GDPR\Providers\ModuleServiceProvider::class,
        \Webkul\BookingProduct\Providers\ModuleServiceProvider::class,
        \Webkul\DataTransfer\Providers\ModuleServiceProvider::class,
        \Webkul\DataGrid\Providers\ModuleServiceProvider::class,
        
        
    ]
];
