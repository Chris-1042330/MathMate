<!doctype html>
<?php
session_start();
if(!isset($_SESSION['ingelogd'])){
    header("Location: presentatie.php");
}
require('header_loggedin.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="language" constent="NL">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" constent="">
        <meta name="author" constent="">
        <meta name="keywords" constent="">
        <title>Rad van Fortuin | MathMate</title>
        <!-- koppelen van bootstrap -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
        <!-- koppelen van overige style -->
        <link rel="stylesheet" type="text/css" href="css/dobbelstenen.css">
        <script src='js/raderen.js'></script>
    </head>
        <main class="row col-md-12 d-sm-block col-sm-12 mt-5">
            <div class="d-block m-auto">
                <button class="radButton col-md-1 col-sm-12" type="button" onclick='draaiRad()'>Draai</button><br>
                <button class="radButton col-md-1 col-sm-12" type="button" onclick='reset()'>reset</button>
            </div>

            <div class="row col-md-12 m-auto">
                        <p id="waarde">0</p>
                <div class="row mt-5 ">
                    <div class="col-md-12 col-6 rad">

                        <div class="rad ml-5">
                            <img class="pijl" src="img/pijl.png">
                            <img class="radFoto" src="img/dRad.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 col-6 rad">

                        <div class="rad ml-5 mb-4">
                            <img class="pijl" src="img/pijl.png">
                            <img class="radFoto" src="img/dRad.png">
                        </div>
                    </div>
                </div>
            </div>
        </main>
            
        <?php require('footer.php');?>

