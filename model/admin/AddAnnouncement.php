<?php

include "DatabaseConn.php";

if (isset($_POST['title']) && isset($_POST['description'])) {

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

    $title = validate($_POST['title']);
    $description = validate($_POST['description']);

    if (empty($title) || empty($description)) {
        header("Location: ../../adminAddAnn.php?error=Please fill in all required fields");
        exit();
    }

    $db->query("INSERT INTO announcements (title, description, date_and_time) VALUES ('$title','$description','$date_and_time') ");
    header("Location: ../../adminAddAnn.php?success=Posted successfully");
    exit();
} else {
    header("Location: ../../adminAddAnn.php?error=Please fill in all required fields");
    exit();
}
