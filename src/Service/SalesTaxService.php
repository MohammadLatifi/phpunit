<?php

namespace Src\Service;

use Src\Interface\Model\CustomerInterface;
use Src\Interface\Service\SalesTaxServiceInterface;

class SalesTaxService implements SalesTaxServiceInterface
{
    public function calculate(float $amount, CustomerInterface $customer): float
    {
        sleep(1);

        return $amount * 0.1;
    }
}
