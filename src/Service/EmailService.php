<?php

namespace Src\Service;

use Src\Interface\Model\CustomerInterface;
use Src\Interface\Service\EmailServiceInterface;

class EmailService implements EmailServiceInterface
{
    public const INVOICE_TYPE = 'invoice_type';
    public const REPORT_TYPE = 'report_type';

    public function send(CustomerInterface $customer, string $type): bool
    {
        sleep(1);

        return true;
    }
}
