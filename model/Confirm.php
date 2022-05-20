<?php

include 'DatabaseConn.php';

$vcode = $_GET['vercode'];

$db->query("UPDATE members SET is_verified = 1 WHERE verification_code = '$vcode' ");
header("Location: ../memberlogin.php?success=Your email is now verified");
