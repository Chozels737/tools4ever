<?php

if($_SERVER["REQUEST_METHOD"] !=="POST"){
    exit;
}
if(!empty($_POST['naamproduct'])){

    $naam        = $_POST['naamProduct'];
    $categorie   = $_POST['categorieProduct'];
    $prijs       = $_POST['prijsProduct'];
    $merk        = $_POST['merkProduct'];
}
require 'database.php';

$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand ) 
        VALUES ('$naam', '$categorie', '$prijs', '$merk')";
if(mysqli_query($conn,$sql)){
    header("location: tools-overzicht.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] != "POST"){
    echo 'De verkeerde REQUEST METHOD wordt gebruikt. Helaas stopt het script nu';
    include '405.php';
    exit;
}
 
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . "405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}