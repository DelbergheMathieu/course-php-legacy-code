<?php
declare(strict_types = 1);
namespace Models;

use ValueObject\UserEmail;
use ValueObject\UserIdentity;
use ValueObject\UserPassword;
use ValueObject\UserId;

class Users
{
    private $uid;
    private $userIdentity;
    private $userEmail;
    private $userPassword;
    private $role;
    private $status;
    public function __construct(UserIdentity $userIdentity, UserEmail $userEmail, UserPassword $userPassword)
    {
        $this->userIdentity = $userIdentity;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        $this->role = 1;
        $this->status = 0;
    }
    public function userIdentity(): UserIdentity
    {
        return $this->userIdentity;
    }
    public function userEmail(): UserEmail
    {
        return $this->userEmail;
    }
    public function userPassword(): UserPassword
    {
        return $this->userPassword;
    }
    public function role(): int
    {
        return $this->role;
    }
    public function status() : int
    {
        return $this->status;
    }
    public function uid() : uid
    {
        return $this->uid();
    }
}