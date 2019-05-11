<?php
declare(strict_types=1);
namespace ValueObject;

class UserPassword
{
    private $userPassword;
    public function __construct(?string $userPassword)
    {
        $this->userPassword = password_hash($userPassword, PASSWORD_BCRYPT);
    }
    public function toString(): string
    {
        return $this->userPassword;
    }
    public function passwordVerify(string $userPassword, string $hashedPassword): bool
    {
        return password_verify($userPassword, $hashedPassword);
    }
}
