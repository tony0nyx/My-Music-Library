<?php
require_once "./snippets/error_report.php";

require_once "./connection_db/config.php";

try {
    // statement om data van database op te halen
    $query = "SELECT * FROM `music-list`";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    // haaldt de restutaat op
    $result = $stmt->fetchAll();

    // telt de hoeveelheid van de restutaat
    $result_count = count($result);

    include __DIR__. "/views/playlist_view.php";

} catch (PDOException $e) {
    echo "<p> Sorry, something went wrong.</p>";
    echo "<p> Please, Try again</p>";
    echo "<p> Query:" . $query. " </p>";
    echo $e->getMessage();
}

