<?php

namespace Pyz\Zed\SalesOrderDetails\Business;

use Pyz\Zed\SalesOrderDetails\Business\OrderExpander\OrderExpander;
use Pyz\Zed\SalesOrderDetails\Business\OrderExpander\OrderExpanderInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class SalesOrderDetailsBusinessFactory extends AbstractBusinessFactory
{
    public function createOrderExpander(): OrderExpanderInterface
    {
        return new OrderExpander();
    }
}
