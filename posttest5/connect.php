<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_posttest";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("gagal terhubung".mysqli_connect_error());
}

?>