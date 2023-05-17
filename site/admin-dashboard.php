<?php

session_start();

if(!isset($_SESSION['isIngelogd'])){
    header('location: inloggen.php');
    exit;
}

if($_SESSION['role'] != "admin"){
    header('location: store.php');
    exit;
}

$timestamp = time();
echo date('Y-D-M', $timestamp)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welkom beste administrator
</body>
</html>