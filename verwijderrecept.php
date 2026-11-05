<?php

require './backend-des/includes/config.php';

$ID = $_GET['id'];
//echo "ID van het item is:" . $ID . "<br>";


try {
    $query = "SELECT * FROM koken WHERE id = :ID ";

    // url besmetting mag niet in database komen
    $stmt = $PDO->prepare($query);
    // koppelt id aan :ID
    $stmt->bindParam(':ID', $ID);
    //voert uit
    $stmt->execute();
    // haal resultaten op
    $recepten = $stmt->fetchAll();
    //telt de rijen
    $aantalrecepten = count($recepten);
    include "./views/verwijderrecept_view.php";

} catch (PDOException $e) {
    echo $e->getMessage();
}
