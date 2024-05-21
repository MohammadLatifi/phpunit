<?php

namespace Src\Service;

use Src\Interface\Model\CustomerInterface;
use Src\Interface\Service\PaymentGatewayServiceInterface;

class PaymentGatewayService implements PaymentGatewayServiceInterface
{
    public function charge(CustomerInterface $customer, float $amount, float $tax): bool
    {
        sleep(1);

        return true;
    }
}
