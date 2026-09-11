<?php
require './connection_db/config.php';
require_once "./snippets/error_report.php";

// shows in de view
$result ="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
// include sentizer function
    require_once __DIR__ . "/snippets/sanitizeVar.php";

//    sanitize posted variables
    $errors = 0;

    $name  = isset($_POST['name']) ? sanitzeVar($_POST['name']) : $errors++;
    $artistname  = isset($_POST['artistname']) ? sanitzeVar($_POST['artistname']) : $errors++;
    $genre  = isset($_POST['genre']) ? sanitzeVar($_POST['genre']) : $errors++;
    $release_date  = isset($_POST['release_date']) ? sanitzeVar($_POST['release_date']) : $errors++;

    if($errors > 0){
        header("location: ./add_to_playlist.php=".$errors);
    }

    require_once  "./connection_db/config.php";

    $query = "INSERT INTO `music-list`( `name`, `artistname`, `genre`, `release_date`)
VALUES (:name,:artistname,:genre,:release_date)";

    $stmt = $pdo->prepare($query);

    $stmt->execute(
        [
            "name" => $name,
            "artistname" => $artistname,
            "genre" => $genre,
            "release_date" => $release_date
        ]
    );

    header("location: ./index.php");

} else {
    include __DIR__."/pages/addFrom.php";
}
