<?php

namespace Core;

use App\Config;
use PDO;
use PDOException;

abstract class Model
{
    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {
            try {
                $db = new PDO(
                    "mysql:host=" . Config::DB_HOST . ";dbname=" . Config::DB_NAME . ";charset=utf8",
                    Config::DB_USER,
                    Config::DB_PASS
                );
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $db;
    }
}
