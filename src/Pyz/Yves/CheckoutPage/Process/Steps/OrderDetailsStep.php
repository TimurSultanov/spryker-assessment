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

    public function postCondition(AbstractTransfer $quoteTransfer): bool
    {
        return true; // TODO: check format
    }

    public function getBreadcrumbItemTitle(): string
    {
        return 'Order Details'; //TODO: translate me
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
