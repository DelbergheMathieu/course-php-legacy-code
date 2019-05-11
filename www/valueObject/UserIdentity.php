<?php
declare(strict_types=1);
namespace ValueObject;

class UserIdentity
{
    private $firstName;
    private $lastName;
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function FirstName(): string
    {
        return $this->firstName;
    }
    public function LastName(): string
    {
        return $this->firstName;
    }
}
