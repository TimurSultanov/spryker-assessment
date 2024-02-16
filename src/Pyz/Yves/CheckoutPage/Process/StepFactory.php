<?php

declare(strict_types=1);

namespace Pyz\Yves\CheckoutPage\Process;

use Pyz\Yves\CheckoutPage\Plugin\Router\CheckoutPageRouteProviderPlugin;
use Pyz\Yves\CheckoutPage\Process\Steps\OrderDetailsStep;
use Spryker\Yves\StepEngine\Dependency\Step\StepInterface;
use SprykerShop\Yves\CheckoutPage\Process\StepFactory as SprykerShopStepFactory;
use SprykerShop\Yves\HomePage\Plugin\Router\HomePageRouteProviderPlugin;

/**
 * @method \SprykerShop\Yves\CheckoutPage\CheckoutPageConfig getConfig()
 */
class StepFactory extends SprykerShopStepFactory
{
    public function getSteps(): array
    {
        return [
            $this->createEntryStep(),
            $this->createOrderDetailsStep(),
            $this->createCustomerStep(),
            $this->createAddressStep(),
            $this->createShipmentStep(),
            $this->createPaymentStep(),
            $this->createSummaryStep(),
            $this->createPlaceOrderStep(),
            $this->createSuccessStep(),
            $this->createErrorStep(),
        ];
    }

    public function createOrderDetailsStep(): StepInterface
    {
        return new OrderDetailsStep(
            CheckoutPageRouteProviderPlugin::CHECKOUT_ORDER_DETAILS,
            HomePageRouteProviderPlugin::ROUTE_NAME_HOME,
        );
    }
}
