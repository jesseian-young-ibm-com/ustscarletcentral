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

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    //$password = $password;

    if (empty($username) || empty($password)) {
        header("Location: ../../adminlogin.php?error=Please fill in all required fields");
        exit();
    } else {
        //   echo '<pre>';
        //      var_dump($password);
        //      echo '</pre>';
        //      exit;
            //$_SESSION['id']=$result;

        $query = $db->query("SELECT * FROM admin WHERE username = '$username' AND password = '$password' ");
        if ($query->num_rows > 0) {
            $result = $query->fetch_assoc();
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['id']=$result['id'];
            //echo '<pre>';
            //var_dump($_SESSION['id']);
            //echo $_SESSION['id'];
            //echo '</pre>';
            //exit;
            //$_SESSION['id']=$result;
            header("Location: ../../adminmanageposts.php");
        } else {
            // echo '<pre>';
            // var_dump($password);
            // echo '</pre>';
            // exit;
            header("Location: ../../adminlogin.php?error=Wrong credentials");
        }
    }
} else {
    header("Location: ../../adminlogin.php?error=Please fill in all required fields");
    exit();
}


// echo '<pre>';
            // var_dump($_SESSION['logged']);
            // echo '</pre>';
            // exit;