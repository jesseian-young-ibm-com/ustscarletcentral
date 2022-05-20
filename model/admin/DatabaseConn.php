<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "ustsc";

$db = new mysqli($db_host, $db_username, $db_password, $db_name);

//For checking if database is connected

// if ($db->connect_error) {

//     die($db->connect_error);
// } else {

//     echo "Connected";
// }
