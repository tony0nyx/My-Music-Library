<?php

$db = __DIR__.'playlist';

try{
    $pdo = new PDO("sqlite:$db");
    echo "You are connected to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
