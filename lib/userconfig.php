<?php
    function safe($waarde){
        $waarde = trim($waarde);
        $waarde = stripslashes($waarde);
        $waarde = htmlspecialchars($waarde);
        return $waarde;
    }

    if(isset($_POST["voornaam"])){
        $voornaam = safe($_POST["firstname"]);
    }
    if(isset($_POST["inbetween"])){
        $tussenvoegsel = safe($_POST["inbetween"]);
    }
    if(isset($_POST["lastname"])){
        $achternaam = safe($_POST["lastname"]);
    }
    if(isset($_POST["email"])){
        $email = safe($_POST["email"]);
    }
    // $password = $conn->real_escape_string($password);
?>