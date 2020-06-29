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
        <meta name="author" content="Chris Aartman">
        <title>Home | MathMate</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <!-- <script src="js/home.js"></script>  -->
    </head>
        <main class="container-fluid">
            <section id="HomeSlide" class="carousel slide" data-ride="carousel">
                <section class="carousel-inner">
                    <ol class="carousel-indicators" style="padding-bottom: 2%;">
                        <li data-target="#HomeSlide" data-slide-to="0" class="active"></li>
                        <li data-target="#HomeSlide" data-slide-to="1"></li>
                        <li data-target="#HomeSlide" data-slide-to="2"></li>
                    </ol>
                    <section class="carousel-item active">
                        <section class="jumbotron row mt-4 HeadAd align-items-center">
                            <section class="col-md">
                                <h1 class="display-4">Welkom bij MathMate!</h1>
                                <p class="lead">De ideale website voor jouw rekenbehoeften!</p>
                                <hr class="my-4">
                                <p class="lead">
                                <a class="btn btn-primary" href="presentatie.php" role="button">Leer meer over ons!</a>
                                </p>
                            </section>
                            <section class="col-md">
                                <img class="img-slide" src="img/mascotte.png" alt="Hier hoort afbeelding"> 
                            </section>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="jumbotron row mt-4 HeadAd align-items-center">
                            <section class="col-md">
                                <h1 class="display-4">Rekenpagina!</h1>
                                <p class="lead">Makkelijk rekenen dankzij onze rekenpagina!</p>
                                <hr class="my-4">
                                <p class="lead">
                                <a class="btn btn-primary" href="rekenpagina.php" role="button">Klik hier om uit te proberen</a>
                                </p>
                            </section>
                            <section class="col-md">
                                <img class="img-slide" src="img/rekenpagina.png" alt="Hier hoort afbeelding"> 
                            </section>
                        </section>
                    </section>
                    <section class="carousel-item">
                        <section class="jumbotron row mt-4 HeadAd align-items-center">
                            <section class="col-md">
                                <h1 class="display-4">Rad van Fortuin!</h1>
                                <p class="lead">Krijg veel geluk met onze Rad van Fortuin!</p>
                                <hr class="my-4">
                                <p class="lead">
                                <a class="btn btn-primary" href="dobbelstenen.php" role="button">Klik hier om uit te proberen</a>
                                </p>
                            </section>
                            <section class="col-md">
                                <img class="img-slide" src="img/dRad.png" alt="Hier hoort afbeelding"> 
                            </section>
                        </section>
                    </section>
                </section>
            </section>
            <section class="row Ad">
                <a class="card col-md-3 Ads align-items-center" href="rekenpagina.php">
                    <section class="card-body">
                        <h5 class="card-title">Rekenpagina</h5>
                    </section>
                </a>
                <a class="card col-md-3 Ads align-items-center" href="rekenpagina.php">
                    <section class="card-body">
                        <h5 class="card-title">Rekenpagina</h5>
                    </section>
                </a>
                <section class="w-100 line"></section>
                <a class="card col-md-3 Ads align-items-center" href="dobbelstenen.php">
                    <section class="card-body" >
                        <h5 class="card-title">Rad van Fortuin</h5>
                    </section>
                </a>
                <a class="card col-md-3 Ads align-items-center" href="factorizer.php">
                    <section class="card-body">
                        <h5 class="card-title">Factor Ontbinder!</h5>
                    </section>
                </a>
            </section>
        </main>


<?php require('footer.php');?>