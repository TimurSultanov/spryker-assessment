<?php

declare(strict_types=1);

namespace Pyz\Yves\CheckoutPage\Process;

use Pyz\Yves\CheckoutPage\Plugin\Router\CheckoutPageRouteProviderPlugin;
use Pyz\Yves\CheckoutPage\Process\Steps\OrderDetailsStep;
use Spryker\Yves\StepEngine\Dependency\Step\StepInterface;
use Spryker\Yves\StepEngine\Process\StepCollection;
use SprykerShop\Yves\CheckoutPage\Process\StepFactory as SprykerShopStepFactory;
use SprykerShop\Yves\HomePage\Plugin\Router\HomePageRouteProviderPlugin;

/**
 * @method \SprykerShop\Yves\CheckoutPage\CheckoutPageConfig getConfig()
 */
class StepFactory extends SprykerShopStepFactory
{
    /**
     * @return \Spryker\Yves\StepEngine\Process\StepCollectionInterface
     */
    public function createStepCollection()
    {
        $stepCollection = new StepCollection(
            $this->getRouter(),
            CheckoutPageRouteProviderPlugin::ROUTE_NAME_CHECKOUT_ERROR,
        );

        $stepCollection
            ->addStep($this->createEntryStep())
            ->addStep($this->createOrderDetailsStep())
            ->addStep($this->createCustomerStep())
            ->addStep($this->createAddressStep())
            ->addStep($this->createShipmentStep())
            ->addStep($this->createPaymentStep())
            ->addStep($this->createSummaryStep())
            ->addStep($this->createPlaceOrderStep())
            ->addStep($this->createSuccessStep());

        return $stepCollection;
    }

    public function createOrderDetailsStep(): StepInterface
    {
        return new OrderDetailsStep(
            CheckoutPageRouteProviderPlugin::CHECKOUT_ORDER_DETAILS,
            HomePageRouteProviderPlugin::ROUTE_NAME_HOME,
        );
    }
}
