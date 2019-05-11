<?php
declare(strict_types=1);
namespace ValueObject;

class DatabaseDriver
{
    private $databaseDriver;
    public function __construct(string $databaseDriver)
    {
        $this->databaseDriver = $databaseDriver;
    }
    public function toString() : string
    {
        return $this->databaseDriver;
    }
}
