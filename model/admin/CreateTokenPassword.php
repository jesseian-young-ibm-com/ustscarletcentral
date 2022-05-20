<?php

include 'DatabaseConn.php';
include "Emailer.php";

if (isset($_POST["reset_submit"])) {

    $email = $_POST["reset_email"];

    $check_email = "SELECT * FROM admin WHERE email='$email'";
    $result = mysqli_query($db, $check_email);

    if (mysqli_num_rows($result) == 0) {
        header("Location: ../../adminlogin.php?forgot=Email does not exist");
        exit();
    } else {

        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "http://localhost/ustsc/adminresetpassword.php?selector=" . $selector . "&validator=" . bin2hex($token);

        $expires = date("U") + 1800;

        require 'DatabaseConn.php';

        // $email = $_POST["reset_email"];

        $sql = "DELETE FROM password_reset WHERE email=?";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "CODE 2319!";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
        }

        $sql = "INSERT INTO password_reset (email, selector, token, expires) VALUES (?,?,?,?);";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "CODE 2319!";
            exit();
        } else {
            $hash = password_hash($token, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hash, $expires);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($db);

        $mail->SetFrom($gmailUsername, "USTSC");
        $mail->Subject = "Password Reset";
        $mail->Body = "<p>Hi! Please click the link below to reset your password:</p>"
            . '<br/> <a href="' . $url . '">' . $url . '</a></p>';
        $mail->AddAddress($email);

        $mail->send();

        header("Location: ../../adminlogin.php?reset=We sent an email to reset your password");
    }
} else {
    header("Location: ../../adminlogin.php?forgot=Error request");
}
