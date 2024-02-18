<?php

declare(strict_types=1);

namespace Pyz\Yves\CheckoutPage\Plugin\Router;

use Spryker\Yves\Router\Route\RouteCollection;
use SprykerShop\Yves\CheckoutPage\Plugin\Router\CheckoutPageRouteProviderPlugin as SprykerShopCheckoutPageRouteProviderPlugin;

class CheckoutPageRouteProviderPlugin extends SprykerShopCheckoutPageRouteProviderPlugin
{
    public const CHECKOUT_ORDER_DETAILS = 'checkout-order-details';

    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addCheckoutIndexRoute($routeCollection);
        $routeCollection = $this->addCustomerStepRoute($routeCollection);
        $routeCollection = $this->addAddressStepRoute($routeCollection);
        $routeCollection = $this->addShipmentStepRoute($routeCollection);
        $routeCollection = $this->addPaymentStepRoute($routeCollection);
        $routeCollection = $this->addCheckoutSummaryStepRoute($routeCollection);
        $routeCollection = $this->addPlaceOrderStepRoute($routeCollection);
        $routeCollection = $this->addCheckoutErrorRoute($routeCollection);
        $routeCollection = $this->addCheckoutSuccessRoute($routeCollection);
        $routeCollection = $this->addOrderDetailsStepRoute($routeCollection);

        return $routeCollection;
    }

    protected function addOrderDetailsStepRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/checkout/order-details', 'CheckoutPage', 'Checkout', 'orderDetailsAction');
        $route = $route->setMethods(['GET', 'POST']);
        $routeCollection->add(static::CHECKOUT_ORDER_DETAILS, $route);

        return $routeCollection;
    }
}
