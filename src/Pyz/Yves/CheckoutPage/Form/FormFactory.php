<?php

declare(strict_types=1);

namespace Pyz\Yves\CheckoutPage\Form;

use Pyz\Yves\CheckoutPage\Form\Steps\OrderDetailsForm;
use Spryker\Yves\StepEngine\Form\FormCollectionHandlerInterface;
use SprykerShop\Yves\CheckoutPage\Form\FormFactory as SprykerShopFormFactory;

class FormFactory extends SprykerShopFormFactory
{
    public function createOrderDetailsFormCollection(): FormCollectionHandlerInterface
    {
        return $this->createFormCollection($this->getOrderDetailsFormTypes());
    }

    /**
     * @return array<string>
     */
    public function getOrderDetailsFormTypes(): array
    {
        return [
            $this->getOrderDetailsForm(),
        ];
    }

    public function getOrderDetailsForm(): string
    {
        return OrderDetailsForm::class;
    }
}
