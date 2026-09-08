<?php
require "../main/playlist.php";

$query = "SELECT * FROM playlist";
$stmt = $conn->prepare($query);
$stmt->execute();

// Get result
$result = $stmt->fetchAll();

// checks the amount of the result
$amountRows = count($result);


include "../views/playlist_view.php";
include_once "../snippets/error_report.php";

