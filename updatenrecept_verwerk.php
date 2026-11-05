
<?php
require './backend-des/includes/config.php';

$resultaat = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $ID = $_POST["ID"];
    $naam = $_POST["naam"];
    $grote = $_POST["grote"];
    $gewicht = $_POST["gewicht"];


    // Verwerking en invoegen in de database
    try {
        // Query voor het invoegen van gegevens
        $query = "UPDATE koken
                  SET naam = :naam, grote = :grote, gewicht = :gewicht
                  WHERE ID = :ID";

        // Bereid de query voor
        $stmt = $PDO->prepare($query);

        // Voer de query uit met de schoon gemaakte en gecontroleerde formuliergegevens
        $stmt->execute([
            'naam'  => $naam,
            'grote'     => $grote,
            'gewicht' => $gewicht,
            'ID'         => $ID
        ]);

        // Controleer of het is gelukt
        if ($stmt->rowCount()) {
            $resultaat = "Het $naam is aangepast!";
        } else {
            $resultaat = "Er is iets fout gegaan bij het aanpassen van het item.";
        }

    } catch (PDOException $e) {
        // Foutafhandeling
        $resultaat = "Fout bij het toevoegen: " . $e->getMessage();
    }
    include "views/updatenrecepten_verwerk_view.php";
}
