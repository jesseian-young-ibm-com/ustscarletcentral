<?php
session_start();

if (isset($_SESSION['logged_in']) == false) {
    header("Location: memberlogin.php");
}

include "./includes/memberheader.php";
?>

<style>
    body {
        background-image: url('assets/bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<center>
    <br>
    <h1 style="font-family:sedan ;">UST SCARLET CENTRAL CALENDAR</h1><br>
    <!-- <iframe src="https://calendar.google.com/calendar/embed?src=s168togr6t1cu0pr4v1o2l11vs%40group.calendar.google.com&ctz=Asia%2FManila" style="border: 0" width="900" height="600" frameborder="2" scrolling="no"></iframe> -->

    <iframe src="https://calendar.google.com/calendar/embed?src=scarlet.uso%40ust.edu.ph&ctz=Asia%2FManila" style="border-width:0" width="100%" height="650" frameborder="0" scrolling="no"></iframe>

</center>

<?php
include "./includes/footer.php";
?>