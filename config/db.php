<?php

$DB_HOST = 'localhost';
$DB_PORT = '3306';
$DB_USER = 'db103631';
$DB_PASS = 'PanKoekDB';
$DB_NAME = 'F4T_DB';

$dsn = "mysql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME;charset=utf8mb4;unix_socket=/tmp/database_server.sock";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conn = new PDO($dsn, $DB_USER, $DB_PASS, $options);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
} catch(PDOException $e) {
    echo 'CONNECTION FAILED: '. $e->getMessage() .' :(';
}