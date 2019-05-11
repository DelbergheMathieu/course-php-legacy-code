<?php
declare(strict_types=1);
namespace ValueObject;

class DatabaseHost
{
    private $databaseHost;
    public function __construct(string $databaseHost)
    {
        $this->databaseHost = $databaseHost;
    }
    public function toString() : string
    {
        return $this->databaseHost;
    }
}
