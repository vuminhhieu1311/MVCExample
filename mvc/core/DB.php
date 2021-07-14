<?php

class DB
{
    private static $connection;

    private function __construct()
    {
    }

    private static function initConnection()
    {
        $serverName = '127.0.0.1';
        $username = 'root';
        $password = '';
        $dbName = 'personal_management';

        self::$connection = new mysqli(
            $serverName,
            $username,
            $password,
            $dbName
        );
        self::$connection->query("SET NAMES 'utf8'");
    }

    public static function getConnection(): ?mysqli
    {
        if (self::$connection == null) {
            self::initConnection();
        }

        return self::$connection;
    }
}
