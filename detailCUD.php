<?php

require './backend-des/includes/config.php';

$query = 'SELECT * FROM koken';
$stmt = $PDO->prepare($query);
$stmt->execute();
// Haal resultaten op in een array
$recepten = $stmt->fetchAll();

//Aantal resultaten tellen
$aantalrecepten = count($recepten);

include './views/detailCUD_view.php';