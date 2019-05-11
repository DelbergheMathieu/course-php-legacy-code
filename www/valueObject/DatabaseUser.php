<?php
declare(strict_types=1);
namespace ValueObject;

class DatabaseUser
{
    private $databaseUser;
    public function __construct(string $databaseUser)
    {
        $this->databaseUser = $databaseUser;
    }
    public function toString() : string
    {
        return $this->databaseUser;
    }
}
