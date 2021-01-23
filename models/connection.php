<?php
// connessione al db locale 
class Connection #extends PDO
{
/*     static private $config = null;
    static private $dsn = null;
    static private $user = null;
    static private $password = null; */

    static private $dsn = 'mysql:dbname=quality_lab;host=localhost:8891';
    static private $user = 'root';
    static private $password = '1234';
    final static public function connect() : object
    {
        try
        {
            /* $config = self::$config = require_once '../config/database.php';
            self::$dsn = $config['dsn']; self::$user = $config['user']; self::$password = $config['password']; */

            return new PDO(self::$dsn, self::$user, self::$password);
        }
        catch (PDOException $e)
        {
            echo 'Connection failed ' . $e->getMessage();
        }
    }
}

/* $c = new Connection;
$c->connect(); */