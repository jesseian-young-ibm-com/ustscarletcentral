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
        header("Location: ../memberlogin.php?error=Please fill in all required fields");
        exit();
    } else {

        $query = $db->query("SELECT * FROM members WHERE username = '$username' AND password = '$password' ");
        if ($query->num_rows > 0) {
            $result = $query->fetch_assoc();
            if ($result['is_verified'] == 1) {
                if ($result['first_time'] == 0) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['id'] = $result['id'];
                    header("Location: ../memberhome.php");
                    exit();
                } else {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['first_time'] = true;
                    $_SESSION['id'] = $result['id'];
                    header("Location: ../memberFirstTime.php");
                    exit();
                }
            } else {
                header("Location: ../memberlogin.php?error=Your account is not yet verified");
                exit();
            }
        } else {
            header("Location: ../memberlogin.php?error=Wrong credentials");
        }
    }
} else {
    header("Location: ../memberlogin.php");
    exit();
}
