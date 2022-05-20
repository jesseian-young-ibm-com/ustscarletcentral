<?php

session_start();

if (isset($_SESSION['id'])) {

    include "DatabaseConn.php";

    if (isset($_POST['studNo']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['yearLevel']) && isset($_POST['phone'])) {

        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $student_number = validate($_POST['studNo']);
        $first_name = validate(ucwords($_POST['firstName']));
        $last_name = validate(ucwords($_POST['lastName']));
        $email = validate($_POST['email']);
        $year_level = validate($_POST['yearLevel']);
        $phone = validate($_POST['phone']);


        $sql = "UPDATE members SET first_name = ?, last_name = ?, student_number = ?, ust_email = ?, phone_number = ?, year_level = ? WHERE id='$_SESSION[id]'";
        $stmt = mysqli_stmt_init($db);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Some error occurred";
        } else {
            mysqli_stmt_bind_param($stmt, "ssssss", $first_name, $last_name, $student_number, $email, $year_level, $phone);
            mysqli_stmt_execute($stmt);
            header("Location: ../memberprofile.php?success_bio=Your information has been changed successfully");
            exit();
        }
    }
} else {
    header("Location: ../memberprofile.php?error_bio=Refresh the page and try again");
    exit();
}
