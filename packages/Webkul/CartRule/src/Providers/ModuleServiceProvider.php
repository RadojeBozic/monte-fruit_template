<?php

namespace Webkul\CartRule\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Webkul\CartRule\Models\CartRule::class,
        \Webkul\CartRule\Models\CartRuleCoupon::class,
        \Webkul\CartRule\Models\CartRuleCouponUsage::class,
        \Webkul\CartRule\Models\CartRuleCustomer::class,
        \Webkul\CartRule\Models\CartRuleTranslation::class,
    ];

    /**
     * Register bindings.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->bind(\Webkul\CartRule\Contracts\CartRule::class, \Webkul\CartRule\Repositories\CartRuleRepository::class);

        $this->app->bind(\Webkul\CartRule\Contracts\CartRuleCoupon::class, \Webkul\CartRule\Repositories\CartRuleCouponRepository::class);

        $this->app->bind(\Webkul\CartRule\Contracts\CartRuleCouponUsage::class, \Webkul\CartRule\Repositories\CartRuleCouponUsageRepository::class);

        $this->app->bind(\Webkul\CartRule\Contracts\CartRuleCustomer::class, \Webkul\CartRule\Repositories\CartRuleCustomerRepository::class);
    }
}
