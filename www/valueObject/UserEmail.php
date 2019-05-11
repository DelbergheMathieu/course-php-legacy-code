<?php
declare(strict_types=1);
namespace ValueObject;

class UserEmail
{
    private $userEmail;
    public function __construct(string $userEmail)
    {
        $this->userEmail = $userEmail;
    }
    public function userEmail(): string
    {
        return $this->userEmail;
    }
}
