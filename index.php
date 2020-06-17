<!doctype html>
<?php
session_start();
if(!isset($_SESSION['ingelogd'])){
    header("Location: inlogpagina.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="language" content="nl">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Chris Aartman">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home | MathMate</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="icon" href="img/icon.png">
        <script src="js/home.js"></script> 
    </head>
    <!--Wireframe Home: https://wireframe.cc/1rzw12 -->
    <body>
        <header class="row align-items-center w-100 h-100">
            <section class="col-3 ">
                <img src="img/logo.png" class="img logo">
            </section>
                <section class="dropdown mobileNav col justify-content-end">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        &#9776
                    </button>
                    <section class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="index.php">Home</a>
                        <a class="dropdown-item" href="reeksenpagina.php">Reeksenpagian</a>
                        <a class="dropdown-item" href="berekeningenpagina.php">Berekeningenpagina</a>
                        <a class="dropdown-item" href="rekenpagina.php">Rekenpagina</a>
                        <a class="dropdown-item" href="dobbelstenen.php">Dobbelstenen</a>
                        <a class="dropdown-item" href="games.php">Games</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-item" href=""><?php echo $_SESSION['user'];?> &#x1F464</h6>
                        <a class="dropdown-item" href="logout.php">Uitloggen</a>
                    </section>
                </section>
            <nav class="desktopNav navbar col justify-content-end align-items-center">
                <a class="nav-link btn" href="index.php">Home</a>
                <section class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Berekeningen
                    </button>
                    <section class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="reeksenpagina.php">Reeksenpagian</a>
                        <a class="dropdown-item" href="berekeningenpagina.php">Berekeningenpagina</a>
                        <a class="dropdown-item" href="rekenpagina.php">Rekenpagina</a>
                    </section>
                </section>
                <a class="nav-link btn" href="dobbelstenen.php">Dobbelstenen</a>
                <a class="nav-link btn" href="games.php">Games</a>
                <section class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['user'];?> &#x1F464
                    </button>
                    <section class="dropdown-menu-right dropdown-menu w-100" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="logout.php">Uitloggen</a>
                    </section>
                </section>
            </nav>
        </header>

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
                                <p class="lead">Lorem Ipsum.</p>
                                <p>Lorem ipsum.</p> 
                                <hr class="my-4">
                                <p class="lead">
                                <a class="btn btn-primary" href="about.php" role="button">Leer meer over ons!</a>
                                </p>
                            </section>
                        <section class="col-md">
                            <img class="mascotte" src="img/mascotte.png" alt="Hier hoort afbeelding"> 
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
                <a class="card col-md-3 Ads align-items-center" href="spelpagina.php">
                    <section class="card-body" >
                        <h5 class="card-title">Komt binnenkort!</h5>
                    </section>
                </a>
                <a class="card col-md-3 Ads align-items-center" href="">
                    <section class="card-body">
                        <h5 class="card-title">Komt binnenkort!</h5>
                    </section>
                </a>
            </section>
        </main>

        <footer class="row align-items-center w-100">
            <section class="col-sm">
                <img src="img/logo.png" class="img-fluid logo">
            </section>
            <nav class="navbar col-sm justify-content-end">
                <a class="nav-link" href="">FAQ</a>
                <a class="nav-link" href="">Contact</a>
                <a class="nav-link" href="">Over Ons</a>
            </nav>
        </footer>
    <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>