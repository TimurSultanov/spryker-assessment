<?php

declare(strict_types=1);

namespace Pyz\Yves\CheckoutPage;

use Pyz\Yves\CheckoutPage\Form\FormFactory;
use Pyz\Yves\CheckoutPage\Process\StepFactory;
use SprykerShop\Yves\CheckoutPage\CheckoutPageFactory as SprykerShopCheckoutPageFactory;
use SprykerShop\Yves\CheckoutPage\Form\FormFactory as SprykerShopFormFactory;
use SprykerShop\Yves\CheckoutPage\Process\StepFactory as SprykerShopStepFactory;

class CheckoutPageFactory extends SprykerShopCheckoutPageFactory
{
    public function createCheckoutFormFactory(): SprykerShopFormFactory
    {
        return new FormFactory();
    }

    public function createStepFactory(): SprykerShopStepFactory
    {
        return new StepFactory();
    }
}
