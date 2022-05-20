<?php
include 'DatabaseConn.php';

$user = $_POST['user'];
$pass = $_POST['pass'];
$password = md5($pass);

$sql = "INSERT INTO admin (username, password) VALUES ('$user', '$password')";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
