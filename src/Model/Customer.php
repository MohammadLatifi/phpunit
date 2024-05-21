<?php

namespace Src\Model;

use Src\Interface\Model\CustomerInterface;

class Customer implements CustomerInterface
{
    protected string $id;
    protected string $fullname;
    protected string $phoneNumber;

    public function __construct(
        string $id,
        string $fullname,
        string $phoneNumber
    ) {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->phoneNumber = $phoneNumber;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): void
    {
        $this->fullname = $fullname;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }
}
