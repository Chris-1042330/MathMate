<?php
    function safe($waarde){
        $waarde = trim($waarde);
        $waarde = stripslashes($waarde);
        $waarde = htmlspecialchars($waarde);
        return $waarde;
    }
    $username = safe($_POST["user"]);
    $password = safe($_POST["pass"]);
    
    $password = $conn->real_escape_string($password);
?>