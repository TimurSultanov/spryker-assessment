<?php

declare(strict_types=1);

namespace Pyz\Zed\SalesOrderDetails\Communication\Plugin\Sales;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Sales\Dependency\Plugin\OrderExpanderPreSavePluginInterface;

/**
 * @method \Pyz\Zed\SalesOrderDetails\Business\SalesOrderDetailsFacadeInterface getFacade()
 */
class OrderDetailsOrderExpanderPreSavePlugin extends AbstractPlugin implements OrderExpanderPreSavePluginInterface
{
    public function expand(
        SpySalesOrderEntityTransfer $salesOrderEntityTransfer,
        QuoteTransfer $quoteTransfer
    ): SpySalesOrderEntityTransfer {
        return $this->getFacade()
            ->expandSalesOrderEntityTransferWithOrderDetails($salesOrderEntityTransfer, $quoteTransfer);
    }
}
