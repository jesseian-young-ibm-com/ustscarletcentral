<?php

if (isset($_POST["submit_new_password"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirmPassword"];

    if (empty($password) || empty($confirm_password)) {
        header("Location: ../../adminResetPassword.php?error=Please fill in all required fields");
        exit();
    } else if ($password != $confirm_password) {
        header("Location: ../../adminResetPassword.php?error=Password does not match");
        exit();
    } else if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\w).*$#", $password)) {
        header("Location: ../../adminResetPassword.php?error=Password does not meet the requirements<br>"
            . "Password should contains: <br>"
            . "- at least 1 uppercase character <br>"
            . "- at least 1 lowercase character <br>"
            . "- at least 1 symbol character <br>"
            . "- at least 1 number<br>"
            . "- minimum of 8 characters (max 20) <br>");
        exit();
    }

    $currentDate = date("U");

    require 'DatabaseConn.php';

    $sql = "SELECT * FROM password_reset WHERE selector=? AND expires >= ?";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error Data 1";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            echo "Error Data 2";
            exit();
        } else {
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row['token']);

            if ($tokenCheck === false) {
                echo "Error Data 3";
                exit();
            } else if ($tokenCheck === true) {
                $tokenEmail = $row['email'];
                $sql = "SELECT * FROM admin WHERE email=?;";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "Error Data 4";
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row == mysqli_fetch_assoc($result)) {
                        echo "Error Data 5";
                        exit();
                    } else {
                        $sql = "UPDATE admin SET password=? WHERE email=?";
                        $stmt = mysqli_stmt_init($db);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "Error Data 6";
                            exit();
                        } else {
                            $newPasswordHash = md5($password);
                            mysqli_stmt_bind_param($stmt, "ss", $newPasswordHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM password_reset WHERE email=?";
                            $stmt = mysqli_stmt_init($db);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "Error Data 7";
                                exit();
                            } else {
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../../adminlogin.php?success=Reset password successfully");
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    header("Location: ../../adminResetPassword.php?error=Error Request");
}
