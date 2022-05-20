<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="./css/all.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>

    <!-------------- Navigation bar start ---------->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="memberhome.php" class="logo"><img src="assets/sclogo.png" alt="" class="scarletlogo"></a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="memberhome.php">Welcome</a>
                    </li>
                    <li class="nav-link">
                        <a href="memberannounce.php">Announcements</a>
                    </li>
                    <li class="nav-link">
                        <a href="membercalendar.php">Calendar</a>
                    </li>
                    <li class="nav-link">
                        <a href="memberprofile.php">Profile</a>
                    </li>
                </ul>
            </div>
            <div class="btnlogout text-gray">
                <a href="model/Logout.php" class="button-34">Log out</a>
            </div>
        </div>
    </nav>