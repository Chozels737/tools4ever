<?php
require "database.php";

$sql = "SELECT * FROM tools";

$result = mysqli_query($conn, $sql);

$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Overzicht</title>
</head>


<body>
`
<form action="verwerk-zoek.php" method="POST">
<input id="search" name="search" type="text" placeholder="Type here">
<input id="submit" type="submit" value="Search">
</form>

    <h1>Overzicht</h1>

    <table class="overzicht">

        <tr>
            <th>Id:</th>
            <th>Name:</th>
            <th>Category:</th>
            <th>Price:</th>
            <th>Brand:</th>
        </tr>

        <?php foreach ($all_users as $naam) : ?>
            <tr>
                <td><a href="tools-detail.php?id="> <?php echo $naam["tool_id"] ?></td>
                <td><?php echo $naam["tool_name"] ?></td>
                <td><?php echo $naam["tool_category"] ?></td>
                <td><?php echo $naam["tool_price"] ?></td>
                <td><?php echo $naam["tool_brand"] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>