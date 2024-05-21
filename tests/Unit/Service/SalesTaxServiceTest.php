<?php

namespace Tests\Unit\Service;

use PHPUnit\Framework\TestCase;
use Src\Interface\Model\CustomerInterface;
use Src\Service\SalesTaxService;

class SalesTaxServiceTest extends TestCase
{
    /** @test */
    public function calculate(): void
    {
        $customer = $this->createMock(CustomerInterface::class);
        $salesTaxService = new SalesTaxService();

        $this->assertSame(10.0, $salesTaxService->calculate(100.0, $customer));
    }
}
