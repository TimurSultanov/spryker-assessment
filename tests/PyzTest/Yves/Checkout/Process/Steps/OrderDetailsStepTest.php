<?php

declare(strict_types=1);

namespace PyzTest\Yves\Checkout\Process\Steps;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\PaymentMethodsTransfer;
use Generated\Shared\Transfer\PaymentMethodTransfer;
use Generated\Shared\Transfer\PaymentTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Pyz\Yves\CheckoutPage\Process\Steps\OrderDetailsStep;
use Spryker\Yves\Messenger\FlashMessenger\FlashMessengerInterface;
use Spryker\Yves\StepEngine\Dependency\Plugin\Handler\StepHandlerPluginCollection;
use Spryker\Yves\StepEngine\Dependency\Plugin\Handler\StepHandlerPluginInterface;
use SprykerShop\Yves\CheckoutPage\Dependency\Client\CheckoutPageToCalculationClientBridge;
use SprykerShop\Yves\CheckoutPage\Dependency\Client\CheckoutPageToCalculationClientInterface;
use SprykerShop\Yves\CheckoutPage\Dependency\Client\CheckoutPageToPaymentClientInterface;
use SprykerShop\Yves\CheckoutPage\Extractor\PaymentMethodKeyExtractor;
use SprykerShop\Yves\CheckoutPage\Process\Steps\PaymentStep;
use SprykerShop\Yves\CheckoutPageExtension\Dependency\Plugin\CheckoutPaymentStepEnterPreCheckPluginInterface;
use SprykerShop\Yves\QuoteApprovalWidget\Plugin\CheckoutPage\QuoteApprovalCheckerCheckoutPaymentStepEnterPreCheckPlugin;
use Symfony\Component\HttpFoundation\Request;

/**
 * @group PyzTest
 * @group Yves
 * @group Checkout
 * @group Process
 * @group Steps
 * @group OrderDetailsStepTest
 */
class OrderDetailsStepTest extends Unit
{
    /**
     * @dataProvider postConditionsProvider
     */
    public function testPostConditions(bool $expectedResult, ?string $orderName): void
    {
        $quoteTransfer = (new QuoteTransfer())->setOrderName($orderName);

        $orderDetailsStep = $this->createOrderDetailsStep();

        $this->assertSame($expectedResult, $orderDetailsStep->postCondition($quoteTransfer));
    }

    /**
     * @return array<string, array<mixed>>
     */
    public function postConditionsProvider(): array
    {
        return [
            'return false when orderName is null' => [false, null],
            'return true when orderName is set' => [true, '1234567'],
        ];
    }

    protected function createOrderDetailsStep(): OrderDetailsStep
    {
        return new OrderDetailsStep('checkout-order-details', 'home');
    }
}
