<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

$resultaatfout='';
$resultaatgoed='';

global $PDO;
require './backend-des/includes/config.php';
// kijk naar server variabele referer voor de afzender
//if (isset($_SERVER["HTTP_REFERER"])) {
//    $afzender = $_SERVER["HTTP_REFERER"];
//    //echo "afzender" . $afzender;
//    if ($afzender != "https://103449.stu.sd-lab.nl/Stop_de_ontkoking/create.php") {
//        $resultaatfout .= "Het formulier komt niet over een met de url.<br/>";
//    }
//
//    // sessie starten om sessie variabelen te kunnen gebruiken
//    session_start();
//
//    // kijken of de token overeenkomt met sessie
//    if (!isset($_SESSION["token"]) && $_SESSION["token"] != $_POST["tokenVeld"]) {
//        $resultaatfout = "Er is iets fout gegaan.<br/>";
//        include './views/create_verwerk_view.php';
//        exit;
//    }
    // kijken of het post is
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        if (isset($_POST["recept_image"]) &&
//            isset($_POST["naamrecept"]) &&
//            isset($_POST["beschrijving"]) &&
//            isset($_POST["tijd"]) &&
//            isset($_POST["vegan"]) &&
//            isset($_POST["ingredienten"]) &&
//            isset($_POST["stappen"])
//        ) {
//
//            if (empty($_post["recept_image"])) {
//                $resultaatfout .= "Voeg een foto toe.<br/>";
//            }
//            // kijken of onderwerp niet leeg is
//            if (empty($_POST["naamrecept"])) {
//                $resultaatfout .= "Vergeet geen naam aan je recept te geven!<br/>";
//
//            }
//
//            if (empty($_POST["beschrijving"])) {
//                $resultaatfout .= "Geef een beschrijving!<br/>";
//            }
//
//            if (empty($_POST["ingredienten"])) {
//                $resultaatfout .= "Geef een beschrijving!<br/>";
//            }
//
//            if (empty($_POST["stappen"])) {
//                $resultaatfout .= "Geef een beschrijving!<br/>";
//            }
//            if (empty($_POST["tijd"])){
//                $resultaatfout .= "Vergeet nietr hoelang je bezig bent!<br/>";
//            }
//
//
//
//
//            // kijken of prioriteit getal tussen 1 en 5 is
//            //meters
//            $tijd = $_POST['tijd'];
//            if ((!is_numeric($tijd)) || ($tijd < 0|| $tijd > 60)) {
//                $resultaatfout .= "De minuten moeten minder dan 60 min zijn.<br />";
//
//            }


            // kijken of datum goed ingevuld is

            // $begindatum = $_POST['datum'];
            //$datum1 = strtotime($begindatum);
            // $goede_datum = date("Y-m-d", $datum1);
            // if ($begindatum != $goede_datum) {
            //  $resultaat = "Datum moet ingevuld zijn in juiste format";
            //  include 'views/toevoegen_verwerk_view.php';
            //  exit;
            //}


            //$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            //if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //   $foutmelding = "Er is iets fout gegaan";
            //}
            //if(!preg_match("/[1-9] [0-9] {3} [A-Z]{2}/", $_POST["postcode"])) {
            //   $foutmelding = "Er is iets fout gegaan";
            //}
//            if ($resultaatfout == ''){
//                try {
//var_dump($_POST);
//var_dump($_FILES);
                    // insert query in twee delen
                    $query = "INSERT INTO koken( naamrecept, beschrijving, tijd, vegan, ingredienten, stappen)";
                    $query .= " VALUES ( :naamrecept, :beschrijving, :tijd, :vegan, :ingredienten, :stappen)";
                    // print_r($_POST);
                    $resultaatfout = "";
                    $resultaatgoed = "";
                    // maak query klaar voor uitvoering
                    $stmt = $PDO->prepare($query);
                    // voer query uit
                    $stmt->execute([
                    // "recept_image" => $_POST["recept_image"],
                        ":naamrecept" => $_POST["naamrecept"],
                        ":beschrijving" => $_POST["beschrijving"],
                        ":tijd" => $_POST["tijd"],
                        "vegan" => isset($_POST["vegan"]) ? 1 : 0,
                        //"vegan" => $_POST["vegan"],
                        ":ingredienten" => $_POST["ingredienten"],
                        ":stappen" => $_POST["stappen"],
                    ]);

                    $naamrecept = $_POST["naamrecept"];

                    if ($stmt->rowCount() > 0) {
                        $resultaatgoed = "{$naamrecept} is succesvol toegevoegd<br />";
                    } else {
                        $resultaatfout .= "niet toegevoegd<br />";
                    }

//                } catch (PDOException $e) {
//                    $resultaatfout = "Error: " . $e->getMessage();
//                }
//            }


//        } else {
//            $resultaatfout .= "niet verstuurd1.<br />";
//        }
//    } else {
//        $resultaatfout .= "niet verstuurd2.<br />";
//    }
//} else {
//    $resultaatfout .= "Er is iets fout gegaan<br />";
//}

 include 'detailCUD.php';