<?php

declare(strict_types=1);

namespace PyzTest\Zed\SalesOrderDetails\Business\OrderExpander;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use Pyz\Zed\SalesOrderDetails\Business\OrderExpander\OrderExpander;
use Pyz\Zed\SalesOrderDetails\Business\OrderExpander\OrderExpanderInterface;

/**
 * @group PyzTest
 * @group Zed
 * @group SalesOrderDetails
 * @group Business
 * @group OrderExpander
 * @group OrderExpanderTest
 */
class OrderExpanderTest extends Unit
{
    /**
     * @dataProvider expandSalesOrderEntityTransferWithOrderDetailsProvider
     */
    public function testExpandSalesOrderEntityTransferWithOrderDetails(?string $orderName): void
    {
        $quoteTransfer = (new QuoteTransfer())->setOrderName($orderName);
        $salesOrderEntityTransfer = new SpySalesOrderEntityTransfer();

        $orderExpander = $this->createOrderExpander();

        $resultedSalesOrderEntityTransfer = $orderExpander->expandSalesOrderEntityTransferWithOrderDetails(
            $salesOrderEntityTransfer,
            $quoteTransfer,
        );

        $this->assertSame($orderName, $resultedSalesOrderEntityTransfer->getOrderName());
    }

    /**
     * @return array<array<mixed>>
     */
    public function expandSalesOrderEntityTransferWithOrderDetailsProvider(): array
    {
        return [
            [null],
            ['123456'],
            ['asdfgh'],
        ];
    }

    private function createOrderExpander(): OrderExpanderInterface
    {
        return new OrderExpander();
    }
}
