<?php

include 'dbconn.php';

$username = $_POST[ 'username' ];
$password = $_POST[ 'password' ];

$stmt = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");
while($row = mysqli_fetch_assoc($stmt)){
    if($row['password'] === $password && $row['role'] === '0'){
        header('location: admin_home.php');
    }
    elseif($row['password'] === $password && $row['role'] === '1'){
        header('location: faculty_home.php');
    }
    elseif($row['password'] === $password && $row['role'] === '2'){
        header('location: student_home.php');
    }else{
        echo "<h1>Denied<h1>";
    }
}

?>