<?php

include 'DatabaseConn.php';

if (isset($_GET['postId'])) {

    $query = $db->query("SELECT * FROM posts WHERE id = '$_GET[postId]' ");
    while ($result = $query->fetch_array()) {

        $title = $result['title'];
        $short_description = $result['short_description'];
        $long_description = $result['long_description'];
        $uploads = $result['uploads'];
        $date_and_time = $result['date_and_time'];

        $sql = "INSERT INTO archives (title, short_description, long_description, uploads, date_and_time) VALUES ('$title', '$short_description', '$long_description', '$uploads', '$date_and_time')";

        if ($db->query($sql) === TRUE) {

            $sqlDel = "DELETE FROM posts WHERE id = '$_GET[postId]' ";
            $row = mysqli_query($db, $sqlDel);
            if (!$row) {
                header("Location: ../../adminmanageposts.php?error=Database Error");
            } else {
                header("Location: ../../adminmanageposts.php?success=Added to archive successfully");
            }
        } else {
        }
    }
}

if (isset($_GET['archiveId'])) {

    $query = $db->query("SELECT * FROM archives WHERE id = '$_GET[archiveId]' ");
    while ($result = $query->fetch_array()) {

        $title = $result['title'];
        $short_description = $result['short_description'];
        $long_description = $result['long_description'];
        $uploads = $result['uploads'];
        $date_and_time = $result['date_and_time'];

        $sql = "INSERT INTO posts (title, short_description, long_description, uploads, date_and_time) VALUES ('$title', '$short_description', '$long_description', '$uploads', '$date_and_time')";

        if ($db->query($sql) === TRUE) {

            $sqlDel = "DELETE FROM archives WHERE id = '$_GET[archiveId]' ";
            $row = mysqli_query($db, $sqlDel);
            if (!$row) {
                header("Location: ../adminmanageposts.php?errorArchive=Database Error");
            } else {
                header("Location: ../../adminmanageposts.php?archive=Added to active successfully");
            }
        } else {
        }
    }
}

//Announcement
if (isset($_GET['itemId'])) {

    $query = $db->query("SELECT * FROM announcements WHERE id = '$_GET[itemId]' ");
    while ($result = $query->fetch_array()) {

        $title = $result['title'];
        $description = $result['description'];
        $date_and_time = $result['date_and_time'];

        $sql = "INSERT INTO hidden_announcements (title, description, date_and_time) VALUES ('$title', '$description', '$date_and_time')";

        if ($db->query($sql) === TRUE) {

            $sqlDel = "DELETE FROM announcements WHERE id = '$_GET[itemId]' ";
            $row = mysqli_query($db, $sqlDel);
            if (!$row) {
                header("Location: ../adminMA.php?errorArchive=Database Error");
            } else {
                header("Location: ../../adminMA.php?archive=Added to archive successfully");
            }
        } else {
        }
    }
}

if (isset($_GET['hiddenId'])) {

    $query = $db->query("SELECT * FROM hidden_announcements WHERE id = '$_GET[hiddenId]' ");
    while ($result = $query->fetch_array()) {

        $title = $result['title'];
        $description = $result['description'];
        $date_and_time = $result['date_and_time'];

        $sql = "INSERT INTO announcements (title, description, date_and_time) VALUES ('$title', '$description', '$date_and_time')";

        if ($db->query($sql) === TRUE) {

            $sqlDel = "DELETE FROM hidden_announcements WHERE id = '$_GET[hiddenId]' ";
            $row = mysqli_query($db, $sqlDel);
            if (!$row) {
                header("Location: ../adminMA.php?errorArchive=Database Error");
            } else {
                header("Location: ../../adminMA.php?archive=Added to archive successfully");
            }
        } else {
        }
    }
}
