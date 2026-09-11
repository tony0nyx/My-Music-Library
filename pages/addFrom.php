<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Add to the playlist</title>
</head>
<body>
<div class="elements_con">
    <h1 class="header_tx"> Add to the playlist </h1>

    <form action="../add_to_playlist.php" method="post">
        <table class="my_table">
            <tr>
                <th> Name </th>
                <th> Artist Name </th>
                <th> Genre </th>
                <th> Release date </th>
            </tr>
            <tr>
                <td> <input type="text" name="name" placeholder=" Metilda ">  </td>
                <td> <input type="text" name="artistname" placeholder=" Harry Styles"> </td>
                <td> <input type="text" name="genre" placeholder=" Pop "> </td>
                <td> <input type="text" name="release_date" placeholder=" 30-6-2023 "> </td>
            </tr>
        </table>

        <input type="submit" value="Submit">
    </form>

</div>
</body>
</html>