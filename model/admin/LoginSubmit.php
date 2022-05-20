<?php

session_start();

include 'DatabaseConn.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $password = md5($password);

    if (empty($username) || empty($password)) {
        header("Location: ../../adminlogin.php?error=Please fill in all required fields");
        exit();
    } else {

        $query = $db->query("SELECT * FROM admin WHERE username = '$username' AND password = '$password' ");
        if ($query->num_rows > 0) {
            $result = $query->fetch_assoc();
            $_SESSION['logged_in'] = TRUE;
            header("Location: ../../adminmanageposts.php");
        } else {
            header("Location: ../../adminlogin.php?error=Wrong credentials");
        }
    }
} else {
    header("Location: ../../adminlogin.php?error=Please fill in all required fields");
    exit();
}
