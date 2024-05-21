<?php

namespace Tests\Unit\Service;

use PHPUnit\Framework\TestCase;
use Src\Interface\Model\CustomerInterface;
use Src\Interface\Service\EmailServiceInterface;
use Src\Interface\Service\PaymentGatewayServiceInterface;
use Src\Interface\Service\SalesTaxServiceInterface;
use Src\Service\InvoiceService;

class InvoiceServiceTest extends TestCase
{
    private $customer;
    private $salesTaxService;
    private $paymentGatewayService;
    private $emailService;
    private $invoiceService;

    protected function setUp(): void
    {
        $this->customer = $this->createMock(CustomerInterface::class);
        $this->salesTaxService = $this->createMock(SalesTaxServiceInterface::class);
        $this->paymentGatewayService = $this->createMock(PaymentGatewayServiceInterface::class);
        $this->emailService = $this->createMock(EmailServiceInterface::class);

        $this->invoiceService = new InvoiceService(
            $this->salesTaxService,
            $this->paymentGatewayService,
            $this->emailService
        );
    }

    /** @test */
    public function process(): void
    {
        $this->salesTaxService->method('calculate')->willReturn(10.0);
        $this->paymentGatewayService->method('charge')->willReturn(true);

        $this->assertTrue($this->invoiceService->process($this->customer, 100.0));
    }

    /** @test */
    public function processFailsWhenPaymentFails(): void
    {
        $this->salesTaxService->method('calculate')->willReturn(10.0);
        $this->paymentGatewayService->method('charge')->willReturn(false);

        $this->assertFalse($this->invoiceService->process($this->customer, 100.0));
    }
}
