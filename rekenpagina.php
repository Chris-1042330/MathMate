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
    <title>Home | MathMate</title>
    <link rel="stylesheet" type="text/css" href="css/reken.css">
    <script src="js/rekenen.js"></script> 
</head>
<body onload="opzetKeuze()">
    <main class="container-fluid row mt-4">
        <section class="col-lg jumbotron" style="background-color: rgb(244, 244, 244);">
            <p class="display-4 ">Rekenpagina</p>
                <section class="row w-100">
                    <select id="Variant" class="w-100 mt-2">
                        <option onclick="opzetKeuze()">Tafel</option>
                        <option onclick="opzetKeuze()">Macht</option>
                        <option onclick="opzetKeuze()">Kwadraat</option>
                        <option onclick="opzetKeuze()">Breuk</option>
                    </select>
                </section>
                <section class="row w-100 mt-5">
                    <input class="w-100" type="number" placeholder="Invoer" id="invoer">
                </section>
                <section class="row w-100 mt-3">
                    <input class="w-100" type="number" placeholder="Tot" id="tot">
                </section>
                <section class="row w-100 mt-2">
                    <button class="w-100 " onclick="Keuze()">Voer berekening uit!</button>
                </section>
        </section>
        <section class="col-lg jumbotron rounded">
            <p class="display-4">Resultaat</p>
            <section id="result">

            </section>
        </section>
    </main>
<?php require('footer.php');?>