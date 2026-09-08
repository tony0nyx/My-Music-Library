<?php
include_once "../snippets/error_report.php";

$db = 'playlist.sqlite';
try{
    $pdo = new PDO("sqlite:$db");
    echo "You are connected to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
