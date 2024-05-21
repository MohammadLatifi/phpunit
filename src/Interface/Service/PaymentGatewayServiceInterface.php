<?php

namespace Src\Interface\Service;

use Src\Interface\Model\CustomerInterface;

interface PaymentGatewayServiceInterface
{
    public function charge(CustomerInterface $customer, float $amount, float $tax): bool;
}
