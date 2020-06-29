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
        <title>Factor Ontbinder | MathMate</title>
        <link rel="stylesheet" type="text/css" href="css/factorizer.css">
        <script src="js/factorizer.js"></script> 
    </head>
        <main class="container-fluid row mt-4">
            <section class="col-lg jumbotron" style="background-color: rgb(244, 244, 244);">
                <p class="display-3 ">Factor Ontbinder</p>
                <h4>Factorizer</h4>
                <section class="veld">
                    <input type="number" id="invoer" placeholder="Voer hier een getal in"><br><br>
                    <button onclick="Ontbinden()" style="width: 90%;">Ontbinden</button>
                </section><br><br>
                <h4>Talstelselomrekenaar</h4>
                <section class="veld">
                    <input type="number" id="invoerB" placeholder="Voer hier een getal in"><!--
                  --><input type="number" id="talBegin" placeholder="A" max="16" min="2" value="10"><!--  --><input type="number" id="talEinde" placeholder="B" max="16" min="2"><br><br>
                    <button onclick="Talstelsel()" style="width: 90%;">Omrekenen</button>
                </section>
            </section>
            <section class="col-lg jumbotron rounded">
                <p class="display-4">Resultaat</p>
                <section id="result">

                </section>
            </section>
        </main>
<?php require('footer.php');?>