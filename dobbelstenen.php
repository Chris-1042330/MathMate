<!doctype html>
<?php
session_start();
if(!isset($_SESSION['ingelogd'])){
    header("Location: presentatie.php");
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="language" constent="NL">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <title>Rad van Fortuin | MathMate</title>
        <link rel="stylesheet" type="text/css" href="css/dobbelstenen.css">
        <script src='js/raderen.js'></script>
    </head>
        <?php require('header_loggedin.php'); ?>
        <main class="col-md-12  col-sm-12 mt-5 mb-4" >
            <div class="d-block m-auto">
                <button class="radButton col-md-1 col-sm-12" type="button" onclick='draaiRad()'>Draai</button><br>
                <button class="radButton col-md-1 col-sm-12" type="button" onclick='reset()'>reset</button>
                <p id="waarde" class="text-center">0</p>
            </div>

            <div class="row col-md-12 m-auto">
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-12 col-6 rad">

                        <div class="rad ml-5">
                            <img class="pijl" src="img/pijl.png">
                            <img class="radFoto" src="img/dRad.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-12 col-6 rad">

                        <div class="rad ml-5">
                            <img class="pijl" src="img/pijl.png">
                            <img class="radFoto" src="img/dRad.png">
                        </div>
                    </div>
                </div>
            </div>
        </main>
            
        <?php require('footer.php');?>

