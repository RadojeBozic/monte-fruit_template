<?php

namespace Webkul\BookingProduct\Providers;

use Webkul\Core\Providers\CoreModuleServiceProvider;

class ModuleServiceProvider extends CoreModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Webkul\BookingProduct\Models\BookingProduct::class,
        \Webkul\BookingProduct\Models\BookingProductDefaultSlot::class,
        \Webkul\BookingProduct\Models\BookingProductAppointmentSlot::class,
        \Webkul\BookingProduct\Models\BookingProductEventTicket::class,
        \Webkul\BookingProduct\Models\BookingProductEventTicketTranslation::class,
        \Webkul\BookingProduct\Models\BookingProductRentalSlot::class,
        \Webkul\BookingProduct\Models\BookingProductTableSlot::class,
        \Webkul\BookingProduct\Models\Booking::class,
        
    ];
     /**
     * Register bindings.
     */
    public function register()
    {
        $this->app->bind(
            \Webkul\BookingProduct\Contracts\Booking::class,
            \Webkul\BookingProduct\Repositories\BookingRepository::class
        );
    }
}
