<?php

declare(strict_types=1);

namespace Pyz\Yves\CheckoutPage;

use Pyz\Yves\CheckoutPage\Form\FormFactory;
use SprykerShop\Yves\CheckoutPage\CheckoutPageFactory as SprykerShopCheckoutPageFactory;
use SprykerShop\Yves\CheckoutPage\Form\FormFactory as SprykerShopFormFactory;

class CheckoutPageFactory extends SprykerShopCheckoutPageFactory
{
    public function createCheckoutFormFactory(): SprykerShopFormFactory
    {
        return new FormFactory();
    }
}
