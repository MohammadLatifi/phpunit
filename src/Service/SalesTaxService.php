<?php

namespace Src\Service;

use Src\Interface\Model\CustomerInterface;
use Src\Interface\Service\SalesTaxServiceInterface;

class SalesTaxService implements SalesTaxServiceInterface
{
    public function calculate(float $amount, CustomerInterface $customer): int
    {
        sleep(1);

        return rand(10, 100);
    }
}
