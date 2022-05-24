<?php

include "DatabaseConn.php";

if (isset($_POST['title']) && isset($_POST['short_description']) && isset($_POST['long_description'])) {

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
    $short_description = validate(nl2br($_POST['short_description']));
    $long_description = validate(nl2br($_POST['long_description']));

    if (empty($title) || empty($short_description) || empty($long_description)) {
        header("Location: ../../adminaddnew.php?error=Please fill in all required fields");
        exit();
    } else {

        $file_size = $_FILES['file']['size'];
        $allowedTypes = ['jpeg', 'JPEG', 'jpg', 'JPG', 'png', 'PNG', 'gif', 'GIF'];
        $file_extension = end(explode('.', $_FILES['file']['name']));
        if (in_array($file_extension, $allowedTypes)) {
            if ($file_size > 500000) {
                header("Location: ../../adminaddnew.php?error=Your file is too big. Upload 5mb or less than only");
                exit();
            } else {
                $destination = "../../assets/uploads/";
                $file_name = time() . $_FILES['file']['name'];
                $temp_name = $_FILES['file']['tmp_name'];
                move_uploaded_file($temp_name, $destination . $file_name);

                $db->query("INSERT INTO posts (title, short_description, long_description, uploads, date_and_time) VALUES ('$title','$short_description','$long_description','$file_name' ,'$date_and_time') ");
                header("Location: ../../adminaddnew.php?success=Posted successfully");
                exit();
            }
        } else {
            $db->query("INSERT INTO posts (title, short_description,long_description, date_and_time) VALUES ('$title','$short_description','$long_description','$date_and_time') ");
            header("Location: ../../adminaddnew.php?success=Posted successfully");
            exit();
        }
    }
} else {
    header("Location: ../../adminaddnew.php?error=Please fill in all required fields");
    exit();
}
?>