<!doctype html>
<html>
<?php
session_start();
if(!isset($_SESSION['ingelogd'])){
    header("Location: presentatie.php");
}
require('header_loggedin.php');
?>
    <head>
        <meta name="author" content="Chris Aartman">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Reeksenpagina | MathMate</title>
        <link rel="stylesheet" type="text/css" href="css/reeks.css">
        <script src="js/reeks.js"></script> 
    </head>
        <main class="container-fluid row mt-4">
            <section class="col-lg jumbotron" style="background-color: rgb(244, 244, 244);">
                <p class="display-4 ">Reeks</p>
                <section class="veld">
                    <input type="number" id="invoer" placeholder="Voer hier een getal in"><br>
                    <button onclick="Fibonacci()" style="width: 45%;">Fibonacci</button><!--  -
                    --><button onclick="PriemgetallenZien()" style="width: 45%;">Priemgetallen</button>
                </section>
            </section>
            <section class="col-lg jumbotron rounded">
                <p class="display-4">Resultaat</p>
                <section id="result">

                </section>
            </section>
        </main>

<?php require('footer.php');?>