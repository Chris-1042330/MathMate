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
                        <a class="dropdown-item" href="index.php">Home</a>
                        <a class="dropdown-item" href="reeksenpagina.php">Reeksenpagian</a>
                        <a class="dropdown-item" href="factorizer.php">Factor Ontbinder</a>
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
                        <a class="dropdown-item" href="factorizer.php">Factor Ontbinder</a>
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