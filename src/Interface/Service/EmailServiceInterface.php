<?php

namespace Src\Interface\Service;

use Src\Interface\Model\CustomerInterface;

interface EmailServiceInterface
{
    public const INVOICE_TYPE = 'invoice_type';
    public const REPORT_TYPE = 'report_type';

    public function send(CustomerInterface $customer, string $type): bool;
}
