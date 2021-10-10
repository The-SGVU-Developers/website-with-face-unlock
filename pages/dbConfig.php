<?php

    $hostname = "localhost:3310";
    $username = "root";
    $password = "";
    $dbname = "wwf";

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if ($conn->connect_error) {  
        die("Connection failed: " . $db->connect_error);  
    }
?>