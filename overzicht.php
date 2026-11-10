<?php
require './db.php';

// Wat heeft de gebruiker in de zoekbalk getypt?
$zoek = trim($_GET['zoek'] ?? '');

// Wil de gebruiker alleen favorieten zien?
$alleenFavorieten = isset($_GET['favorieten']);

// Alle recepten ophalen, en kijken of ze in de favorieten tabel staan
$sql = "SELECT recepten.*, favorieten.id AS favoriet_id
        FROM recepten
        LEFT JOIN favorieten ON favorieten.recept_id = recepten.id
        WHERE recepten.naamrecept LIKE :zoek";

if ($alleenFavorieten) {
    $sql .= " AND favorieten.id IS NOT NULL";
}

$sql .= " ORDER BY recepten.naamrecept";

$stmt = $pdo->prepare($sql);
$stmt->execute(['zoek' => '%' . $zoek . '%']);
$recepten = $stmt->fetchAll();
$aantalrecepten = count($recepten);

include './views/overzicht_view.php';
