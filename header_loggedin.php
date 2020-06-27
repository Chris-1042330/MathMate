<?php 
$menu = [
    'Home',
    'Reeksenpagina',
    'Factor Ontbinder',
    'Rekenpagina',
    'Dobbelsteen']
?><html>
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
        <link rel="icon" href="img/icon.png">
    </head>
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
                        <a class="dropdown-item" href="index.php"><?php echo $menu[0]; ?></a>
                        <a class="dropdown-item" href="reeksenpagina.php"><?php echo $menu[1]; ?></a>
                        <a class="dropdown-item" href="factorizer.php"><?php echo $menu[2]; ?></a>
                        <a class="dropdown-item" href="rekenpagina.php"><?php echo $menu[3]; ?></a>
                        <a class="dropdown-item" href="dobbelstenen.php"><?php echo $menu[4]; ?></a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-item" href=""><?php echo $_SESSION['user'];?> &#x1F464</h6>
                        <a class="dropdown-item" href="logout.php">Uitloggen</a>
                    </section>
                </section>
            <nav class="desktopNav navbar col justify-content-end align-items-center">
                <a class="nav-link btn" href="index.php"><?php echo $menu[0]; ?></a>
                        <a class="nav-link btn" href="reeksenpagina.php"><?php echo $menu[1]; ?></a>
                        <a class="nav-link btn" href="factorizer.php"><?php echo $menu[2]; ?></a>
                        <a class="nav-link btn" href="rekenpagina.php"><?php echo $menu[3]; ?></a>
                <!-- <section class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Berekeningen
                    </button>
                    <section class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    </section>
                </section> -->
                <a class="nav-link btn" href="dobbelstenen.php"><?php echo $menu[4]; ?></a>
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