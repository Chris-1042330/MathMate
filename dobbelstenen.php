<!DOCTYPE html>
<html>
<?php
session_start();
if(!isset($_SESSION['ingelogd'])){
    header("Location: inlogpagina.php");
}
// require('header_loggedin.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="language" constent="NL">
    <meta name="description" constent="events">
    <meta name="author" constent="Samsor Wiar">
    <meta name="keywords" constent="Dobbelstenen gooien">
    <title>Rad van fortuin</title>
    <link rel="stylesheet" type="text/css" href="css/dobbelstenen.css">
    <link rel="stylesheet" type="text/css" href="css/standard.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script src='js/raderen.js'></script>
</head>
<body>
    <main class="container">
        <button type="button" onclick='draaiRad()'>Draai</button><br>
        <button type="button" onclick='reset()'>reset</button>
            <div>
                <p id="waarde">0</p>
            <div>
                <div class="rad">
                    <img src="img/dRad.png">
                </div>
                <img class="pijl" src="img/pijl.png">
            </div>
            <div>
                <div class="rad">
                    <img src="img/dRad.png">
                </div>
                <img class="pijl" src="img/pijl.png">
            </div>

            <!-- Voor meer plezier uncomment dit -->
           <!--  <div>
                <div class="rad">
                    <img src="img/dRad.png">
                </div>
                <img class="pijl" src="img/pijl.png">
            </div> -->
        </div>
    </main>
    
<?php require('footer.php');?>