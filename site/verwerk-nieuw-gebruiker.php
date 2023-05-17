<?php

$email = $_POST["email"];
$firstname  = $_POST["firstname"];
$lastname  = $_POST["lastname"];
$password  = $_POST["password"];
$address = $_POST["address"];
$city  = $_POST["city"];
$role = $_POST["role"];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

require "database.php"; 

$sql = "INSERT INTO users (email, firstname, lastname, password, address, city, role, is_active)

VALUES('$email','$firstname','$lastname','$hashed_password','$address','$city','$role', 1)";

if (mysqli_query($conn, $sql))
{
    header("location: nieuw-gebruiker.php");
}