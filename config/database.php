<?php

// Interfaccia di connessione PDO 
return [
    'dsn' => 'mysql:dbname=quality_lab;host=localhost:8891',
    'user' => 'root',
    'password' => '1234',
    'options' => [
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    ]
];