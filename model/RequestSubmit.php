<?php

include "DatabaseConn.php";

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['snum']) && isset($_POST['email']) && isset($_POST['dept']) && isset($_POST['num']) && isset($_POST['level']) && isset($_POST['bday'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    date_default_timezone_set('Asia/Manila');
    $date_and_time = date('F d, Y @ h:i:sa, l');

    $fname = validate(ucwords($_POST['fname']));
    $lname = validate(ucwords($_POST['lname']));
    $snum = validate($_POST['snum']);
    $email = validate($_POST['email']);
    $dept = validate($_POST['dept']);
    $num = validate($_POST['num']);
    $level = validate(ucwords($_POST['level']));
    $bday = validate($_POST['bday']);


    if (empty($fname) || empty($lname) || empty($snum) || empty($email) || empty($dept) || empty($num) || empty($level) || empty($bday)) {
        header("Location: ../registration.php?error=Please fill in all required fields");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../registration.php?error=Invalid email");
        exit();
        // } else if (!preg_match("^09(?=.*[0-9])", $phone)) {
        //     header("Location: ../registration.php?error=Invalid phone number <br>"
        //             . "Phone number should start with 09 (e.g. 09123456789)" . "&$user_data");
        //     exit();
     } 
    //  else if (!isset($_POST['chkbox'])) {
    //     header("Location: ../registration.php?error=Please check the checkbox if you agree with the Terms of Services");
    //     exit();
    // } 
    else {

        $check_duplicate = "SELECT * FROM members WHERE ust_email='$email' AND phone_number='$num' ";
        $result = mysqli_query($db, $check_duplicate);

        if (mysqli_num_rows($result) > 0) {
            header("Location: ../registration.php?error=Email or phone number is already taken");
            exit();
        } else {

            $sql = "INSERT INTO requests (first_name, last_name, student_number, ust_email, department, phone_number, year_level, birthday, date_and_time_of_request) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($db);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "Some error occurred";
            } else {
                mysqli_stmt_bind_param($stmt, "sssssssss", $fname, $lname, $snum, $email, $dept, $num, $level, $bday, $date_and_time);
                mysqli_stmt_execute($stmt);
                header("Location: ../registration.php?success=Your request has been sent. Thank you.");
                exit();
            }
        }
    }
} else {
    header("Location: ../registration.php?error=Please fill in all required fields");
    exit();
}
