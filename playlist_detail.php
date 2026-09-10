<?php
require '../connection_db/config.php';
require_once "../snippets/error_report.php";
include "../views/detail_view.php";

$ID = $_GET['ID'];

try {
    $query = "SELECT * FROM `music-list` WHERE `ID` = :ID";
    $stmt = $pdo->prepare($query);
    $stmt-> bindParam(':ID', $ID);
    $stmt->execute();

} catch (PDOException $e) {
    echo "There was an error getting playlist details. " . $e->getMessage();
    echo "Please refresh the page and try again.";
}