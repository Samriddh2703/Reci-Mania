<?php

$host = "localhost";
$unm = "root";
$pass = "";
$dbnm = "recipe";
$conn = new MySQLi($host,$unm,$pass,$dbnm);
if (!$conn) {
    // print("Connection Failer");
    die("Connection failed: " . mysqli_connect_error());
 }
?>
