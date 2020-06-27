<!doctype html>
<?php
session_start();
if(!isset($_SESSION['ingelogd'])){
    header("Location: inlogpagina.php");
}
require('header_loggedin.php');
?>
<html>
    <head>
        <meta name="author" content="Chris Aartman">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Ontbinder & Factorizer | MathMate</title>
        <link rel="stylesheet" type="text/css" href="css/factorizer.css">
        <script src="js/factorizer.js"></script> 
    </head>
        <main class="container-fluid row mt-4">
            <section class="col-lg jumbotron" style="background-color: rgb(244, 244, 244);">
                <p class="display-4 ">Ontbinder</p>
                <section class="veld">
                    <input type="number" id="invoer" placeholder="Voer hier een getal in"><br>
                    <button onclick="Ontbinden()" style="width: 90%;">Ontbinden</button>
                </section>
            </section>
            <section class="col-lg jumbotron rounded">
                <p class="display-4">Resultaat</p>
                <section id="result">

                </section>
            </section>
        </main>
<?php require('footer.php');?>