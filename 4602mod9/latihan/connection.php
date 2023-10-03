<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "diary";

$con = mysqli_connect($host,$user,$pass,$db_name);
if (mysqli_connect_error()) {
    die('Database not connected');
}

