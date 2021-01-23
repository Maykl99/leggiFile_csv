<?php
// connessione al db locale 
class Connection #extends PDO
{
    static private $config = array();
    final static public function connect() #: object
    {
        
        try
        {
            self::$config = require_once '../config/database.php';
            return new PDO(self::$config['dsn'], self::$config['user'], self::$config['password']);
        }
        catch (PDOException $e)
        {
            echo 'Connection failed ' . $e->getMessage();
        }
    }
}


#test
/* $connect1 = new Connection();
$connect1->connect(); */