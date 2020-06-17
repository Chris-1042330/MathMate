<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db= "MathMate";

    $conn = new mysqli($server_name, $username, $password, $db);

    if($conn->connect_error){
        die ("MISSON FAILED WE'LL GET EM NEXT TIME" . $conn->connect_error);
    }
?>