<?php

class DB_PdoFactory
{

    private function __construct()
    {
    }

    public static function getInstance()
    {
        static $instance = null;
        if ($instance === null) {
            $instance = new self;
        }
        return $instance;
    }

    public function getPdo($server)
    {
        try {
            $dsn = "mysql:host={$server['hsot']};dbname={$server['dbname']}";
            $pdo = new PDO($dsn, $server['username'], $server['password']);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            exit;
        }
        return $pdo;
    }

}
