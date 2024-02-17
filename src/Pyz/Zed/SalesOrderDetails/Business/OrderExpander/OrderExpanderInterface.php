<?php

declare(strict_types=1);

namespace Pyz\Zed\SalesOrderDetails\Business\OrderExpander;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;

interface OrderExpanderInterface
{
    public function expandSalesOrderEntityTransferWithOrderDetails(
        SpySalesOrderEntityTransfer $salesOrderEntityTransfer,
        QuoteTransfer $quoteTransfer
    ): SpySalesOrderEntityTransfer;
}
