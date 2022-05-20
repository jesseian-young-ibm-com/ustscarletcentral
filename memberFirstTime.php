<?php
session_start();

if (isset($_SESSION['first_time']) == false) {
    header("Location: memberhome.php");
}

$title = "Change Password";
include "./includes/memberheader.php";
?>

<h2>Change Password</h2>
<?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<form method="post" action="model/FirstTime.php">
    <label>New Password</label>
    <input type="password" name="new_password">
    <label>Confirm Password</label>
    <input type="password" name="confirm_new_password">
    <input type="submit" name="change_password" value="Change Password">
</form>
</body>

</html>