<?php

namespace Tests\Unit\Model;

use PHPUnit\Framework\TestCase;
use Src\Model\Customer;

class CustomerTest extends TestCase
{
    private Customer $customer;

    public function setUp(): void
    {
        $this->customer = new Customer('222', 'xxx', '9898');
    }

    /** @test */
    public function itSetFullname()
    {
        $this->customer->setFullname('Mohammad Latifi');
        $this->assertSame('Mohammad Latifi', $this->customer->getFullname());
    }

    /** @test */
    public function itSetPhoneNumber()
    {
        $this->customer->setPhoneNumber('2223332221');
        $this->assertSame('2223332221', $this->customer->getPhoneNumber());
    }
}
