<?php

class Config
{

    function __construct()
    {
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASSWORD', '');
        define('DB', 'MyDB');

        try {
            $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASSWORD);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

new Config();
