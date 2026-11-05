<?php
//Foutmeldingen zichtbaar maken
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "db103449";
$password = "TSgf@y57pxR_rka0";
$database = "Recepten";


// Opties voor PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Fouten gooien als uitzondering
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetch modus
    PDO::ATTR_EMULATE_PREPARES => false, // Eechte prepared statements
];

try{
    $PDO = new PDO("mysql:host=$servername;dbname=$database", $username, $password, $options);
    //set the PDO error mode to exception
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "gelukt!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
