<?php

declare(strict_types=1);

namespace Pyz\Yves\CheckoutPage\Process\Steps;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Yves\StepEngine\Dependency\Step\StepWithBreadcrumbInterface;
use SprykerShop\Yves\CheckoutPage\Process\Steps\AbstractBaseStep;
use Symfony\Component\HttpFoundation\Request;

class OrderDetailsStep extends AbstractBaseStep implements StepWithBreadcrumbInterface
{
    public function execute(Request $request, AbstractTransfer $quoteTransfer): AbstractTransfer
    {
        return $quoteTransfer;
    }

    public function requireInput(AbstractTransfer $quoteTransfer): bool
    {
        return true;
    }

    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     */
    public function postCondition(AbstractTransfer $quoteTransfer): bool
    {
        return $quoteTransfer->getOrderName() !== null;
    }

    public function getBreadcrumbItemTitle(): string
    {
        return 'checkout.step.order-details.title';
    }

    public function isBreadcrumbItemEnabled(AbstractTransfer $quoteTransfer): bool
    {
        return true;
    }

    public function isBreadcrumbItemHidden(AbstractTransfer $quoteTransfer): bool
    {
        return false;
    }
}
