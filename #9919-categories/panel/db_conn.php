<?php

$sname = "localhost";
$unmae = "root";
$password = "";

$db_name = "argnv-db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "connection failed";
}

error_reporting(E_ALL);
ini_set('display_errors','1');


?>

