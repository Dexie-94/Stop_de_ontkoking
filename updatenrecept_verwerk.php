
<?php
require './backend-des/includes/config.php';


$resultaatfout='';
$resultaatgoed='';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $ID = $_POST["ID"];
    $naamrecept = $_POST["naamrecept"];
    $beschrijving = $_POST["beschrijving"];
    $tijd = $_POST["tijd"];
    //$vegan = $_POST["vegan"];
    $ingredienten = $_POST["ingredienten"];
    $stappen = $_POST["stappen"];

    var_dump($_POST);
    var_dump($_FILES);
    // Verwerking en invoegen in de database
    try {
        // Query voor het invoegen van gegevens
        $query = "UPDATE koken
                  SET naamrecept = :naamrecept, beschrijving = :beschrijving, tijd = :tijd, vegan = :vegan, ingredienten = :ingredienten, stappen = :stappen
                  WHERE ID = :ID";

        // Bereid de query voor
        $stmt = $PDO->prepare($query);

        // Voer de query uit met de schoon gemaakte en gecontroleerde formuliergegevens
        $stmt->execute([
            ':naamrecept'  => $naamrecept,
            ':beschrijving'  => $beschrijving,
            ':tijd' => $tijd,
            "vegan" => isset($_POST["vegan"]) ? 1 : 0,
            ":ingredienten" => $_POST["ingredienten"],
            ":stappen" => $_POST["stappen"],
            ':ID'         => $ID
        ]);

        // Controleer of het is gelukt
        if ($stmt->rowCount()) {
            $resultaatgoed = "Het $naamrecept is aangepast!";
        } else {
            $resultaatfout = "Er is iets fout gegaan bij het aanpassen van het item.";
        }

    } catch (PDOException $e) {
        // Foutafhandeling
        $resultaatfout = "Fout bij het toevoegen: " . $e->getMessage();
    }
    include "views/create_verwerk_view.php";
}
