<?php
require_once "./connection_db/config.php";

require_once "./snippets/error_report.php";


try {
    $query = "SELECT * FROM `music-list`";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll();

    $result_count = count($result);

    include "../views/playlist_view.php";
} catch (PDOException $e) {
    echo "<p> Sorry, something went wrong.</p>";
    echo "<p> Please, Try again</p>";
    echo "<p> Query:" . $query. " </p>";
    echo $e->getMessage();
}

