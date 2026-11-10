<?php
require './db.php';

// Dit bestand zet een recept in de favorieten, of haalt het eruit.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recept_id'])) {
    $receptId = (int) $_POST['recept_id'];

    // Staat het recept al in de favorieten?
    $stmt = $pdo->prepare("SELECT id FROM favorieten WHERE recept_id = :id");
    $stmt->execute(['id' => $receptId]);

    if ($stmt->fetch()) {
        // Ja: dan halen we hem weg
        $stmt = $pdo->prepare("DELETE FROM favorieten WHERE recept_id = :id");
    } else {
        // Nee: dan voegen we hem toe
        $stmt = $pdo->prepare("INSERT INTO favorieten (recept_id) VALUES (:id)");
    }
    $stmt->execute(['id' => $receptId]);
}

// Terug naar het overzicht, met dezelfde zoekopdracht
$terug = './overzicht.php';
if (!empty($_POST['terug'])) {
    $terug .= '?' . $_POST['terug'];
}
header('Location: ' . $terug);
exit;
