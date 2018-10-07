<?php

$db_host = 'localhost';
$db_name = 'dkirschman';
$db_username = 'root';

$dsn = "mysql:host=$db_host;dbname=$db_name";

try {
    $db_connection = new PDO($dsn, $db_username);
} catch (Exception $e) {
    echo 'There was an error: ' . $e->getMessage();
}