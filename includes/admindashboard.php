<?php
session_start();

if (isset($_SESSION['logged_in']) == false) {
    header("Location: adminlogin.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UST SCARLET CENTRAL ADMIN WEBSITE</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <script type="text/javascript" src="js/toggle.js"></script>

</head>

<div class="wrapper">
    <div class="sidebar">

        <div class="logo">
            <img src="assets/ustlogo.png" alt="" class="ustlogo">
            <img src="assets/sclogo.png" alt="" class="scarletlogo">
        </div>

        <h3>UST SCARLET CENTRAL</h3>
        <h5>Main Website</h5>
        <ul style="list-style-type:none;">
            <li><a href="adminmanageposts.php">Manage Posts</a></li>
            <li id="toggle1"><a href="adminaddnew.php">Add New Post</a></li>
            <li id="toggle2"><a href="adminmanageofficers.php">Manage Officers</a></li>
            <li><a href="mainhome.php" target="_blank" rel="noopener noreferrer">View Website</a></li>
            <li><a href="adminstudentrecords.php">Student Records Database</a></li>
        </ul>

        <h5>Member Website</h5>
        <ul style="list-style-type:none;">
            <li><a href="adminMA.php">Announcements</a></li>
            <li><a href="adminAddAnn.php">Add New Announcement</a></li>
            <li><a href="memberhome.php" target="_blank" rel="noopener noreferrer">View Website</a></li>
        </ul>

        <h5>Applicants</h5>
        <ul style="list-style-type:none;">
            <li><a href="admindatabase.php">Requests</a></li>
        </ul>

    </div>
    <div class="main_content">
        <div class="header">
            <a href="model/admin/Logout.php" class="button-34">Log out</a>
        </div>

    </div>


</div>