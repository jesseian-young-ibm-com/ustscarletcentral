<?php

session_start();

if (isset($_SESSION['id'])) {

    include "DatabaseConn.php";

    if (isset($_POST['new_password']) && isset($_POST['confirm_new_password'])) {

        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $old_password = validate($_POST['old_password']);
        $new_password = validate($_POST['new_password']);
        $confirm_new_password = validate($_POST['confirm_new_password']);

        if (empty($new_password)) {
            header("Location: ../memberprofile.php?error=New Password is required");
            exit();
        } else if ($new_password !== $confirm_new_password) {
            header("Location: ../memberprofile.php?error=Confirm password does not match");
            exit();
        } else if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $new_password)) {
            header("Location: ../memberprofile.php?error=New password does not meet the requirements<br>"
                . "Password should contains: <br>"
                . "- atleast 1 uppercase character <br>"
                . "- atleast 1 lowercase character <br>"
                . "- atleast 1 symbol character <br>"
                . "- atleast 1 number<br>"
                . "- minimum of 8 characters <br>");
            exit();
        } else {

            $hash = md5($new_password);

            // $query = $db->query("SELECT * FROM members WHERE id='$_SESSION[id]' AND password = '$hash' ");
            // if ($query->num_rows > 0) {
            $db->query("UPDATE members SET password = '$hash' WHERE id='$_SESSION[id]'");
            header("Location: ../memberprofile.php?success=Password has been successfully changed");
            exit();
            // } else {
            //     header("Location: ../memberprofile.php?error=Old password is incorrect");
            //     exit();
            // }
        }
    } else {
        header("Location: ../memberprofile.php?error=Please fill in all required fields");
        exit();
    }
} else {
    header("Location: ../memberprofile.php?error=Please relogin");
    exit();
}
