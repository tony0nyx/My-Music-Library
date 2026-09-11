<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Delete page</title>
</head>
<body>
<div class="elements_con">
    <h1 class="header_tx"> Overview </h1>

    <?php
    if ($result_count > 0) { ?>

        <table class="my_table">

            <tr>
                <th> Name </th>
                <th> Artist Name </th>
                <th> Genre </th>
                <th> Release date </th>
            </tr>

            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['artistname'] ?></td>
                    <td><?= $row['genre'] ?></td>

                </tr>
                <?php
            } ?>
        </table>
        <p>
            Weet je het zeker? <a href="../delete_playlist.php?ID=<?=$row['ID'] ?>">JA</a>
        </p>
    <?php } else { ?>

        <p> Log not found </p>
    <?php }
    ?>

</div>
</body>
</html>

