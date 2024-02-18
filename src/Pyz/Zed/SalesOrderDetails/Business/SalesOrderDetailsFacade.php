<?php

declare(strict_types=1);

namespace Pyz\Zed\SalesOrderDetails\Business;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\SalesOrderDetails\Business\SalesOrderDetailsBusinessFactory getFactory()
 */
class SalesOrderDetailsFacade extends AbstractFacade implements SalesOrderDetailsFacadeInterface
{
    public function expandSalesOrderEntityTransferWithOrderDetails(
        SpySalesOrderEntityTransfer $salesOrderEntityTransfer,
        QuoteTransfer $quoteTransfer
    ): SpySalesOrderEntityTransfer {
        return $this->getFactory()
            ->createOrderExpander()
            ->expandSalesOrderEntityTransferWithOrderDetails($salesOrderEntityTransfer, $quoteTransfer)
        ;
    }
}
