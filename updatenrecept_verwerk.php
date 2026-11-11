<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './backend-des/includes/config.php';

$resultaatfout = '';
$resultaatgoed = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $ID = filter_input(INPUT_POST, "ID", FILTER_VALIDATE_INT);

    if (!$ID) {
        die("Ongeldig recept-ID!");
    }

    try {

        // Oude gegevens ophalen
        $stmt = $PDO->prepare("SELECT * FROM koken WHERE ID = :ID");
        $stmt->execute([":ID" => $ID]);

        $oudRecept = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$oudRecept) {
            die("Recept niet gevonden!");
        }

        // Lege velden behouden hun oude waarde
        $naamrecept = trim($_POST["naamrecept"] ?? '');
        if ($naamrecept === '') {
            $naamrecept = $oudRecept["naamrecept"];
        }

        $beschrijving = trim($_POST["beschrijving"] ?? '');
        if ($beschrijving === '') {
            $beschrijving = $oudRecept["beschrijving"];
        }

        $tijd = $_POST["tijd"] ?? '';
        if ($tijd === '') {
            $tijd = $oudRecept["tijd"];
        }

        $ingredienten = trim($_POST["ingredienten"] ?? '');
        if ($ingredienten === '') {
            $ingredienten = $oudRecept["ingredienten"];
        }

        $stappen = trim($_POST["stappen"] ?? '');
        if ($stappen === '') {
            $stappen = $oudRecept["stappen"];
        }

        // Vegan: aangevinkt = 1, niet aangevinkt = 0
        $vegan = isset($_POST["vegan"]) ? 1 : 0;

        // Oude afbeelding behouden
        $imageName = $oudRecept["recept_image"];

        // Bereidingstijd controleren
        if (
            filter_var($tijd, FILTER_VALIDATE_INT) === false ||
            $tijd < 1 ||
            $tijd >= 180
        ) {
            throw new Exception(
                "De bereidingstijd moet tussen 1 en 180` minuten liggen!"
            );
        }

        // Nieuwe afbeelding uploaden indien gekozen
        if (
            isset($_FILES["recept_image"]) &&
            $_FILES["recept_image"]["error"] !== UPLOAD_ERR_NO_FILE
        ) {

            if ($_FILES["recept_image"]["error"] !== UPLOAD_ERR_OK) {
                throw new Exception("Er ging iets fout met de afbeelding!");
            }

            $ext = strtolower(
                pathinfo(
                    $_FILES["recept_image"]["name"],
                    PATHINFO_EXTENSION
                )
            );

            $toegestaneExtensies = ["jpg", "jpeg", "png", "webp"];

            if (!in_array($ext, $toegestaneExtensies, true)) {
                throw new Exception(
                    "Gebruik een JPG-, JPEG-, PNG- of WEBP-afbeelding!"
                );
            }

            $imageName = uniqid("recept_") . "." . $ext;

            $target = __DIR__ . "/uploads/" . $imageName;

            if (!move_uploaded_file(
                $_FILES["recept_image"]["tmp_name"],
                $target
            )) {
                throw new Exception(
                    "De nieuwe afbeelding kon niet worden opgeslagen!"
                );
            }
        }

        // Database aanpassen
        $query = "UPDATE koken
                  SET recept_image = :recept_image,
                      naamrecept = :naamrecept,
                      beschrijving = :beschrijving,
                      tijd = :tijd,
                      vegan = :vegan,
                      ingredienten = :ingredienten,
                      stappen = :stappen
                  WHERE ID = :ID";

        $stmt = $PDO->prepare($query);

        $stmt->execute([
            ":recept_image" => $imageName,
            ":naamrecept" => $naamrecept,
            ":beschrijving" => $beschrijving,
            ":tijd" => $tijd,
            ":vegan" => $vegan,
            ":ingredienten" => $ingredienten,
            ":stappen" => $stappen,
            ":ID" => $ID
        ]);

        $resultaatgoed = $naamrecept . " is succesvol aangepast!";

        echo '<div class="popup" id="popup">' .
            htmlspecialchars($resultaatgoed) .
            '</div>';

    } catch (Exception $e) {

        error_log($e->getMessage());

        $resultaatfout = $e->getMessage();

        echo '<div class="popup1" id="popup1">' .
            htmlspecialchars($resultaatfout) .
            '</div>';
    }
}

include "detailCUD.php";

?>