<?php
session_start();

include "DatabaseConn.php";

$query = $db->query("SELECT * FROM members WHERE id='$_SESSION[id]'");
while ($username = $query->fetch_assoc()) {

    if (isset($_POST['new_password']) && isset($_POST['confirm_new_password'])) {

        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $new_password = validate($_POST['new_password']);
        $confirm_new_password = validate($_POST['confirm_new_password']);

        if (empty($new_password)) {
            header("Location: ../memberFirstTime.php?error=New password is required");
            exit();
        } else if ($new_password !== $confirm_new_password) {
            header("Location: ../memberFirstTime.php?error=Confirm password does not match");
            exit();
        } else if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $new_password)) {
            header("Location: ../memberFirstTime.php?error=New password does not meet the requirements<br>"
                . "Password should contains: <br>"
                . "- atleast 1 uppercase character <br>"
                . "- atleast 1 lowercase character <br>"
                . "- atleast 1 symbol character <br>"
                . "- atleast 1 number<br>"
                . "- minimum of 8 characters <br>&");
            exit();
        } else {

            $hash = md5($new_password);

            $db->query("UPDATE members SET password = '$hash', first_time = '0' WHERE id='$_SESSION[id]' ");
            header("Location: ../memberhome.php?success=Your password has been changed successfully");
            exit();
        }
    } else {
        header("Location: ../memberFirstTime.php?error=Please fill in all required fields");
        exit();
    }
}
