<?php

namespace Src\Interface\Service;

use Src\Interface\Model\CustomerInterface;

interface SalesTaxServiceInterface
{
    public function calculate(float $amount, CustomerInterface $customer): float;
}
