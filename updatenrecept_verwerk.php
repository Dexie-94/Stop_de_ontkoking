
<?php
require './backend-des/includes/config.php';

$resultaatfout='';
$resultaatgoed='';




if($_SERVER["REQUEST_METHOD"] === "POST"){
    $ID = $_POST["ID"];
   // $recept_image = $_POST["recept_image"];
    $naamrecept = $_POST["naamrecept"];
    $beschrijving = $_POST["beschrijving"];
    $tijd = $_POST["tijd"];
    //$vegan = $_POST["vegan"];
    $ingredienten = $_POST["ingredienten"];
    $stappen = $_POST["stappen"];

    //var_dump($_POST);
   // var_dump($_FILES);
    // Verwerking en invoegen in de database

$errors = [];

if (empty($_POST['naamrecept']) || empty($_POST['beschrijving']) || empty($_POST['tijd']) || empty($_POST['ingredienten']) || empty($_POST['stappen'])) {
    array_push($errors, "EMPTY FIELD");
}
if (preg_match("/^[a-zA-Z ]*$/", $_POST['naamrecept']) || preg_match("/^[a-zA-Z0-9]*$/", $_POST['beschrijving']) || preg_match("/^[0-9]*$/", $_POST['tijd']) || preg_match("/^[a-zA-Z0-9 ]*$/", $_POST['ingredienten']) || preg_match("/^[a-zA-Z0-9 ]*$/", $_POST['stappen'])) {
    array_push($errors, "SPECIAL CHARACTERS DETECTED");
}


    $imageName = "";
    $imageName = "";

    if (isset($_FILES["recept_image"]) && $_FILES["recept_image"]["error"] === UPLOAD_ERR_OK) {

        $ext = pathinfo($_FILES["recept_image"]["name"], PATHINFO_EXTENSION);

        $imageName = uniqid("recept_") . "." . $ext;

        $target = __DIR__ . "/uploads/" . $imageName;

        if (!move_uploaded_file($_FILES["recept_image"]["tmp_name"], $target)) {

            die("Upload failed. Path: " . $target

                . " | folder exists: " . (is_dir(__DIR__ . "/uploads") ? "yes" : "NO")

                . " | writable: " . (is_writable(__DIR__ . "/uploads") ? "yes" : "NO"));

        }

    } else {

        die("No file received. Upload error code: " . ($_FILES["recept_image"]["error"] ?? "no file key"));

    }

    if (empty($errors)) {
        try {
            // Query voor het invoegen van gegevens
            $query = "UPDATE koken
                      SET recept_image = :recept_image, naamrecept = :naamrecept, beschrijving = :beschrijving, tijd = :tijd, vegan = :vegan, ingredienten = :ingredienten, stappen = :stappen
                      WHERE ID = :ID";

            // Bereid de query voor
            $stmt = $PDO->prepare($query);

            // Voer de query uit met de schoon gemaakte en gecontroleerde formuliergegevens
            $stmt->execute([
                ":recept_image" => $imageName,
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
    } else {
        // Voeg de foutmeldingen samen tot één string
        $resultaatfout = implode(", ", $errors);
    }
    include "./views/create_verwerk_view.php";
}
