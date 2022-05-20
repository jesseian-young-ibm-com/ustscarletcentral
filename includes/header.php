<?php
include "model/admin/DatabaseConn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UST SCARLET CENTRAL</title>

    <link rel="stylesheet" href="css/all.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script type="text/javascript" src="js/toggle.js"></script>

</head>

<body>

    <!-------------- Navigation bar start ---------->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="mainhome.php" class="logo"><img src="assets/sclogo.png" alt="" class="scarletlogo"></a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="mainhome.php">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="mainevents.php">Events</a>
                    </li>
                    <li class="nav-link">
                        <a href="mainaboutus.php">About Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="maincontactus.php">Contact Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="mainhighlights.php">Highlights</a>
                    </li>
                </ul>
            </div>
            <div class="btnlogout">
                <form action="registration.php">
                    <div class="dropdown">
                        <button>Register Here</button>
                        <div>
                            <a href="dataprivacy.php">Register to be a Member</a>
                            <a href="memberlogin.php">Already a Member? Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>