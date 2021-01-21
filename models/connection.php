<?php

// connessione al db locale con libreria PDO
class Connection extends PDO
{
    static private $dsn = 'mysql:dbname=quality_lab;host=localhost:8891';
    static private $user = 'root';
    static private $password = '1234';

    final static public function connect() : object
    {
        try
        {
            return new PDO(self::$dsn, self::$user, self::$password);
        }
        catch (PDOException $e)
        {
            echo 'Connection failed ' . $e->getMessage();
        }
    }
}