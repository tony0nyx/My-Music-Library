<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title> My Music Playlist </title>

</head>
<body>
<div class="elements_con">
    <h1 class="header_tx"> Overview </h1>
    <!--===============================-->
    <?php
    if ($result_count > 0) { ?>

    <br><br>
        <table class="my_table">

            <tr>
                <th> Name </th>
                <th> Artist Name </th>
                <th> Genre </th>
                <th> Release date </th>
                <th>Action</th>
            </tr>

            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['artistname'] ?></td>
                    <td><?= $row['genre'] ?></td>
                    <td><?= $row['release_date'] ?></td>
                    <td>
                        <a href= "./views/detail_view.php?ID=<?=$row['ID'] ?>"> Details </a>
                        <a href="../pages/addFrom.php"> + </a>
                        - coming soon
                    </td>
                </tr>
                <?php
            } ?>
        </table>

    <?php } else { ?>

        <p> Log not found </p>
    <?php }
    ?>


</div>

</body>
</html>
