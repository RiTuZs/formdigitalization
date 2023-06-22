<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "suku_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo ("Connection failed: " . mysqli_connect_error());
}   
?>