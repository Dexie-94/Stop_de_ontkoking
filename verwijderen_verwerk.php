<?php

require './backend-des/includes/config.php';

global $PDO;
$ID = $_GET['id'];


//if ($ID != NULL){

//}
try{
    $query = "DELETE FROM koken WHERE id = :ID";
    $stmt = $PDO->prepare($query);
    $stmt->bindParam(':ID', $ID);
    $stmt->execute();

    if($stmt->rowCount()){
        $resultaat = "De gegevens zijn succesvol verwijderd";
    } else {
        $resultaat = "De gegevens zijn niet verwijderd";
    }
    include './detailCUD.php';

} catch (PDOException $e) {
    echo "<p>FOUT!</p>";
    echo "<p>Query: ".$query."</p>";
    echo "<p>" . $e->getMessage() . "</p>";
    exit;
}