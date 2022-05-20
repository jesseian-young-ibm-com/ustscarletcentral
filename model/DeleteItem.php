<?php

include 'DatabaseConn.php';

//Requests Accounts
if (isset($_GET['requestId'])) {

    $sql = "DELETE FROM requests WHERE id = '$_GET[requestId]' ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        header("Location: ../admindatabase.php?Error=Failed to delete id");
    } else {
        header("Location: ../admindatabase.php");
    }
}

//Admin Announcement
if (isset($_GET['announcementId'])) {

    $sql = "DELETE FROM announcements WHERE id = '$_GET[announcementId]' ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        header("Location: ../adminMA.php?Error=Failed to delete id");
    } else {
        header("Location: ../adminMA.php");
    }
}

//Member Accounts
if (isset($_GET['studentId'])) {

    $sql = "DELETE FROM members WHERE id = '$_GET[studentId]' ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        header("Location: ../adminstudentrecords.php?Error=Failed to delete id");
    } else {
        header("Location: ../adminstudentrecords.php");
    }
}

//Posts
if (isset($_GET['postId'])) {

    $sql = "DELETE FROM posts WHERE id = '$_GET[postId]' ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        header("Location: ../adminmanageposts.php?Error=Failed to delete id");
    } else {
        header("Location: ../adminmanageposts.php");
    }
}

//Archive
if (isset($_GET['archiveDelId'])) {

    $sql = "DELETE FROM archives WHERE id = '$_GET[archiveDelId]' ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        header("Location: ../adminmanageposts.php?Error=Failed to delete id");
    } else {
        header("Location: ../adminmanageposts.php");
    }
}

//Accepted
if (isset($_GET['acceptedId'])) {

    $sql = "DELETE FROM requests WHERE id = '$_GET[acceptedId]' ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        header("Location: ../admindatabase.php?Error=Failed to delete id");
    } else {
        header("Location: ../admindatabase.php");
    }
}

//Rejected
if (isset($_GET['rejectedId'])) {

    $sql = "DELETE FROM requests WHERE id = '$_GET[rejectedId]' ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        header("Location: ../admindatabase.php?Error=Failed to delete id");
    } else {
        header("Location: ../admindatabase.php");
    }
}
