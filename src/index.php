<?php

use Src\Model\Customer;
use Src\Service\EmailService;
use Src\Service\InvoiceService;
use Src\Service\PaymentGatewayService;
use Src\Service\SalesTaxService;

require __DIR__.'/../vendor/autoload.php';

$customer = new Customer(
    id: '1',
    fullname: 'Mohammad Latifi',
    phoneNumber: '3518889999'
);

$amount = 100;

$invoiceService = new InvoiceService(
    new SalesTaxService(),
    new PaymentGatewayService(),
    new EmailService()
);

echo $invoiceService->process($customer, $amount)."\n";
