<?php

declare(strict_types=1);

namespace Pyz\Yves\CheckoutPage\Controller;

use Spryker\Yves\Kernel\View\View;
use SprykerShop\Yves\CheckoutPage\Controller\CheckoutController as SprykerShopCheckoutController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Yves\CheckoutPage\CheckoutPageFactory getFactory()
 */
class CheckoutController extends SprykerShopCheckoutController
{
    /**
     * @return View|RedirectResponse
     */
    public function orderDetailsAction(Request $request)
    {
        $response = $this->createStepProcess()->process(
            $request,
            $this->getFactory()
                ->createCheckoutFormFactory()
                ->createOrderDetailsFormCollection(),
        );

        if (!is_array($response)) {
            return $response;
        }

        return $this->view(
            $response,
            $this->getFactory()->getCustomerPageWidgetPlugins(),
            '@CheckoutPage/views/order-details/order-details.twig',
        );
    }
}
