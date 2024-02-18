<?php

declare(strict_types=1);

namespace Pyz\Zed\SalesOrderDetails\Business;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;

interface SalesOrderDetailsFacadeInterface
{
    public function expandSalesOrderEntityTransferWithOrderDetails(
        SpySalesOrderEntityTransfer $salesOrderEntityTransfer,
        QuoteTransfer $quoteTransfer
    ): SpySalesOrderEntityTransfer;
}
