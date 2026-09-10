<?php

$db = __DIR__. '/playlist.sqlite';

try{
    $pdo = new PDO("sqlite:$db");
    echo "You are connected to the database!" . $db;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
