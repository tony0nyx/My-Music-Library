<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Preview </title>
</head>
<body>
<div class="elements_con">
    <table class="my_table">
        <tr>
            <th> Name </th>
            <th> Artist Name </th>
            <th> Genre </th>
            <th> Release date </th>
        </tr>
        <tr>
            <td> <?= $nam; ?>  </td>
            <td> <?= $artistname; ?> </td>
            <td> <?=  $genre; ?> </td>
            <td> <?= $release_date; ?> </td>
        </tr>
    </table>

    <p>
        <?= $result; ?>
    </p>
</div>
</body>
</html>