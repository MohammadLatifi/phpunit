<?php

namespace Src\Interface\Model;

interface CustomerInterface
{
    public function getId(): string;

    public function getFullname(): string;

    public function setFullname(string $fullname): void;

    public function getPhoneNumber(): string;

    public function setPhoneNumber(string $phoneNumber): void;
}
