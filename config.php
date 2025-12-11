<?php
// $host = "sql100.infinityfree.com";
// $user = "if0_40637241";
// $pass = "Laljigst77";
// $db   = "if0_40637241_kfc";


$host = "localhost";
$user = "root";
$pass = "root@123";
$db   = "kfc";



$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>
