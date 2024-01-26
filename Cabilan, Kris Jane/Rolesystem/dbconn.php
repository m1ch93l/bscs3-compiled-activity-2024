<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rolesystem";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n" . $con->error);

if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}