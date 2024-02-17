<?php

declare(strict_types=1);

namespace Pyz\Zed\SalesOrderDetails\Business\OrderExpander;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;

class OrderExpander implements OrderExpanderInterface
{
    public function expandSalesOrderEntityTransferWithOrderDetails(
        SpySalesOrderEntityTransfer $salesOrderEntityTransfer,
        QuoteTransfer $quoteTransfer
    ): SpySalesOrderEntityTransfer {
        $salesOrderEntityTransfer->setOrderName($quoteTransfer->getOrderName());

        return $salesOrderEntityTransfer;
    }
}
