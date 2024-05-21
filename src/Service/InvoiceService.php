<?php

namespace Src\Service;

use Src\Interface\Model\CustomerInterface;
use Src\Interface\Service\EmailServiceInterface;
use Src\Interface\Service\PaymentGatewayServiceInterface;
use Src\Interface\Service\SalesTaxServiceInterface;

class InvoiceService
{
    public function __construct(
        SalesTaxServiceInterface $salesTaxService,
        PaymentGatewayServiceInterface $paymentGatewayService,
        EmailServiceInterface $emailService
    ) {
        $this->salesTaxService = $salesTaxService;
        $this->paymentGatewayService = $paymentGatewayService;
        $this->emailService = $emailService;
    }

    public function process(CustomerInterface $customer, float $amount): bool
    {
        // 1. calculate sales tax
        $tax = $this->salesTaxService->calculate($amount, $customer);

        // 2. charge the customer for amount and tax
        if (!$this->paymentGatewayService->charge($customer, $amount, $tax)) {
            return false;
        }

        // 3.send reciept to costomer
        $this->emailService->send($customer, EmailService::INVOICE_TYPE);

        return true;
    }
}
