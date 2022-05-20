<?php

include "db.php";

$first_name = $_POST['email'];
$last_name = $_POST['password'];

$sql =  "INSERT INTO users (first_name, last_name) 
    VALUES ('$first_name', '$last_name')";

    if ($db->query($sql) === TRUE)  {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
$db->close();