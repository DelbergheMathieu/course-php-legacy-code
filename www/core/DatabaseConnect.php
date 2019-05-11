<?php
declare(strict_types=1);
namespace Core;

use Core\DatabaseInterface;
use ValueObject\DatabaseDriver;
use ValueObject\DatabaseHost;
use ValueObject\DatabaseUser;
use ValueObject\DatabaseName;
use ValueObject\DatabasePassword;
use Exception;
use PDO;

class DatabaseConnect implements DatabaseInterface
{
    private $pdo;
    public function __construct(DatabaseDriver $DatabaseDriver, DatabaseHost $DatabaseHost, DatabaseName $databaseName, DatabaseUser $databaseUser, DatabasePassword $databasePassword)
    {
        try {
            $this->pdo = new PDO($DatabaseDriver->toString() . ":host=" . $DatabaseHost->toString() . ";dbname=" . $databaseName->toString(), $databaseUser->toString(), $databasePassword->toString());
        } catch (Exception $e) {
            die("Erreur SQL : " . $e->getMessage());
        }
    }
    public function connect(): PDO
    {
        return $this->pdo;
    }
}