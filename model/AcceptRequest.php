<?php

include 'DatabaseConn.php';
include "Emailer.php";
session_start();
if (isset($_GET['requestId'])) {

    $query = $db->query("SELECT * FROM requests WHERE id = '$_GET[requestId]' ");
    while ($result = $query->fetch_array()) {

        $uname = $result['student_number'];
        $pass = $result['student_number'];
        $fname = $result['first_name'];
        $lname = $result['last_name'];
        $snum  = $result['student_number'];
        $email = $result['ust_email'];
        $dept  = $result['department'];
        $num  = $result['phone_number'];
        $level = $result['year_level'];
        $bday  = $result['birthday'];

        $verification_code = uniqid(rand());

        $mail->SetFrom($gmailUsername, "USTSC");
        $mail->Subject = "REQUEST ACCEPTED";
        $mail->Body = "<p>Hi your request is accepted! Please click the link below to activate your account:</p>"
            . "<br/> <a href='http://localhost/ustscarletcentral/model/Confirm.php?vercode=$verification_code'> VERIFY and LOGIN</a> "
            . "<br/> <p>Your default login credentials is your student number.</p>"
            . "<br/> <p>Username: '$snum'</p>"
            . "<br/> <p>Password: '$snum'</p>";
        $mail->AddAddress($email);

        if ($mail->Send() == FALSE) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {

            $pass = md5($pass);

            $sql = "INSERT INTO members (username, password, first_name, last_name, student_number, ust_email, department, phone_number, year_level, birthday,verification_code) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($db);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "Some error occurred";
            } else {
                mysqli_stmt_bind_param($stmt, "sssssssssss", $uname, $pass, $fname, $lname, $snum, $email, $dept, $num, $level, $bday, $verification_code);
                mysqli_stmt_execute($stmt);

                $db->query("UPDATE requests SET status = 'Accepted' WHERE id = '$_GET[requestId]'");

                header("Location: ../admindatabase.php?success=Account has been created successfully");
                exit();
            }
        }
    }
}
