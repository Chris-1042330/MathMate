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
        <title>Ontbinder & Factorizer | MathMate</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/factorizer.css">
        <link rel="icon" href="img/icon.png">
        <script src="js/factorizer.js"></script> 
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
                        <h6 class="dropdown-item" href=""><?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}else{echo 'username';};?>&#x1F464</h6>
                        <a class="dropdown-item" href="">Uitloggen</a>
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
                        <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}else{echo 'username';}?>&#x1F464
                    </button>
                    <section class="dropdown-menu-right dropdown-menu w-100" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="">Action</a>
                        <a class="dropdown-item" href="">Another action</a>
                        <a class="dropdown-item" href="">Uitloggen</a>
                    </section>
                </section>
            </nav>
        </header>

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