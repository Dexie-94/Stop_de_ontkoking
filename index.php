<?php

require __DIR__ . '/config/db.php';
var_dump($conn);

$query = 'SELECT * FROM testTable';
$stmt = $conn->prepare($query);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$qRows = count($result);

include './views/index_view.php';