<?php

namespace Src\Interface\Service;

use Src\Interface\Model\CustomerInterface;

interface InvoiceServiceInterface
{
    public function process(CustomerInterface $customer, float $amount): bool;
}
