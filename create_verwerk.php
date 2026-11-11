<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './backend-des/includes/config.php';

$resultaatfout = '';
$resultaatgoed = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Formuliergegevens ophalen
    $naamrecept = trim($_POST["naamrecept"] ?? '');
    $beschrijving = trim($_POST["beschrijving"] ?? '');
    $tijd = $_POST["tijd"] ?? '';
    $ingredienten = trim($_POST["ingredienten"] ?? '');
    $stappen = trim($_POST["stappen"] ?? '');

    $errors = [];

    // 1. Naam controleren
    if ($naamrecept === '') {
        $errors[] = "Vul de naam van het recept in!";
    }

    // 2. Beschrijving controleren
    if ($beschrijving === '') {
        $errors[] = "Vul een beschrijving in!";
    }

    // 3. Tijd controleren
    if (
        $tijd === '' ||
        filter_var($tijd, FILTER_VALIDATE_INT) === false ||
        $tijd < 1 ||
        $tijd >= 60
    ) {
        $errors[] = "De tijd moet tussen 1 en 59 minuten liggen!";
    }

    // 4. Ingrediënten controleren
    if ($ingredienten === '') {
        $errors[] = "Vul de ingrediënten in!";
    }

    // 5. Stappen controleren
    if ($stappen === '') {
        $errors[] = "Vul de bereidingsstappen in!";
    }

    // 6. Afbeelding controleren
    if (
        !isset($_FILES["recept_image"]) ||
        $_FILES["recept_image"]["error"] === UPLOAD_ERR_NO_FILE
    ) {
        $errors[] = "Voeg een foto toe!";
    } elseif ($_FILES["recept_image"]["error"] !== UPLOAD_ERR_OK) {
        $errors[] = "Er is iets misgegaan met het uploaden van de foto!";
    }

    // 7. Vegan is optioneel
    $vegan = isset($_POST["vegan"]) ? 1 : 0;


    // Alleen doorgaan als er geen fouten zijn
    if (empty($errors)) {

        // Afbeelding uploaden
        $ext = strtolower(pathinfo(
            $_FILES["recept_image"]["name"],
            PATHINFO_EXTENSION
        ));

        $toegestaneExtensies = ["jpg", "jpeg", "png", "webp"];

        if (!in_array($ext, $toegestaneExtensies)) {

            $errors[] = "Gebruik een JPG, JPEG, PNG of WEBP afbeelding!";

        } else {

            $imageName = uniqid("recept_") . "." . $ext;

            $target = __DIR__ . "/uploads/" . $imageName;

            if (!move_uploaded_file(
                $_FILES["recept_image"]["tmp_name"],
                $target
            )) {
                $errors[] = "De afbeelding kon niet worden geüpload!";
            }
        }
    }


    // Als er nog steeds geen fouten zijn: INSERT
    if (empty($errors)) {

        try {

            $query = "INSERT INTO koken
                      (recept_image, naamrecept, beschrijving, tijd, vegan, ingredienten, stappen)
                      VALUES
                      (:recept_image, :naamrecept, :beschrijving, :tijd, :vegan, :ingredienten, :stappen)";

            $stmt = $PDO->prepare($query);

            $stmt->execute([
                ":recept_image" => $imageName,
                ":naamrecept" => $naamrecept,
                ":beschrijving" => $beschrijving,
                ":tijd" => $tijd,
                ":vegan" => $vegan,
                ":ingredienten" => $ingredienten,
                ":stappen" => $stappen
            ]);

            $resultaatgoed = $naamrecept . " is succesvol toegevoegd!";

            echo '<div class="popup" id="popup">'
                . htmlspecialchars($resultaatgoed)
                . '</div>';

        } catch (PDOException $e) {

            error_log($e->getMessage());

            $resultaatfout = "Er is iets fout gegaan bij het toevoegen.";

            echo '<div class="popup1" id="popup1">'
                . htmlspecialchars($resultaatfout)
                . '</div>';
        }

    } else {

        // Alle foutmeldingen weergeven
        $resultaatfout = implode("<br>", $errors);

        echo '<div class="popup1" id="popup1">'
            . $resultaatfout
            . '</div>';
    }

}

// Detailpagina weergeven
include 'detailCUD.php';

?>