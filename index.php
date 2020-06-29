<!doctype html>
<?php
session_start();
if(!isset($_SESSION['ingelogd'])){
    header("Location: presentatie_pagina.php");
}
require('header_loggedin.php');
?>
<html>
    <head>
        <meta name="author" content="Chris Aartman">
        <title>Home | MathMate</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <script src="js/home.js"></script> 
    </head>
        <main class="container-fluid">
            <div id="HomeSlide" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <ol class="carousel-indicators" style="padding-bottom: 2%;">
                        <li data-target="#HomeSlide" data-slide-to="0" class="active"></li>
                        <li data-target="#HomeSlide" data-slide-to="1"></li>
                        <li data-target="#HomeSlide" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-item active">
                        <section class="jumbotron row mt-4 HeadAd align-items-center">
                            <section class="col-md">
                                <h1 class="display-4">Welkom bij MathMate!</h1>
                                <p class="lead">De ideale website voor jouw rekenbehoeften!</p>
                                <p>Lorem ipsum.</p> 
                                <hr class="my-4">
                                <p class="lead">
                                <a class="btn btn-primary" href="presentatie.php" role="button">Leer meer over ons!</a>
                                </p>
                            </section>
                            <section class="col-md">
                                <img class="img-slide" src="img/mascotte.png" alt="Hier hoort afbeelding"> 
                            </section>
                        </section>
                    </div>
                    <div class="carousel-item">
                        <section class="jumbotron row mt-4 HeadAd align-items-center">
                            <section class="col-md">
                                <h1 class="display-4">Rekenpagina!</h1>
                                <p class="lead">Lorem Ipsum.</p>
                                <p>Lorem ipsum.</p> 
                                <hr class="my-4">
                                <p class="lead">
                                <a class="btn btn-primary" href="about.php" role="button">Leer meer over ons!</a>
                                </p>
                            </section>
                        </section>
                    </div>
                    <div class="carousel-item">
                        <section class="jumbotron row mt-4 HeadAd align-items-center">
                            <section class="col-md">
                                <h1 class="display-4">Welkom bij MathMate!</h1>
                                <p class="lead">Lorem Ipsum.</p>
                                <p>Lorem ipsum.</p> 
                                <hr class="my-4">
                                <p class="lead">
                                <a class="btn btn-primary" href="about.php" role="button">Leer meer over ons!</a>
                                </p>
                            </section>
                        </section>
                    </div>
                </div>
            </div>
            <section class="row Ad">
                <a class="card col-md-3 Ads align-items-center" href="rekenpagina.php">
                    <section class="card-body">
                        <h5 class="card-title">Rekenpagina</h5>
                    </section>
                </a>
                <a class="card col-md-3 Ads align-items-center" href="reeksenpagina.php">
                    <section class="card-body">
                        <h5 class="card-title">Reeksenpagina</h5>
                    </section>
                </a>
                <section class="w-100 line"></section>
                <a class="card col-md-3 Ads align-items-center" href="dobbelstenen.php">
                    <section class="card-body" >
                        <h5 class="card-title">Rad van Fortuin</h5>
                    </section>
                </a>
                <a class="card col-md-3 Ads align-items-center" href="factorizer">
                    <section class="card-body">
                        <h5 class="card-title">Factor Ontbinder!</h5>
                    </section>
                </a>
            </section>
        </main>


<?php require('footer.php');?>