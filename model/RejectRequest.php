<?php

include 'DatabaseConn.php';

if (isset($_GET['requestId'])) {

    $db->query("UPDATE requests SET status = 'Rejected' WHERE id = '$_GET[requestId]'");
    header("Location: ../admindatabase.php?success=Account has been rejected");
}
