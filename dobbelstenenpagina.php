<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="language" constent="NL">
    <meta name="description" constent="events">
    <meta name="author" constent="Samsor Wiar">
    <meta name="keywords" constent="Dobbelstenen gooien">
    <title>Rad van fortuin</title>
    <link rel="stylesheet" type="text/css" href="css/dobbelstenen.css">
    <link rel="stylesheet" type="text/css" href="css/standard.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script src='js/raderen.js'></script>
</head>
<body>
    <main class="container">
        <header>
            <nav class="nav">
                <div class='nav_standard'>
                    <span>
                        <!-- <a class="login" href="login.php">Log In</a>
                        <a class="login" href="login.php">Log out</a> -->
                    </span>
                </div>
                <span class='nav_img'>
                    <img src="img/logo.png" alt="MathMate">
                </span>
                <div class='nav_extra'>
                    <span>
                        <a class="login" href="login.view.php">Log In</a>
                    </span>
                </div>
            </nav>
        </header>

        <button type="button" onclick='draaiRad()'>Draai</button><br>
        <button type="button" onclick='reset()'>reset</button>
        <div>
                    <p id="waarde">0</p>
            <div>
                <div class="rad">
                    <img src="img/dRad.png">
                </div>
                <img class="pijl" src="img/pijl.png">
            </div>
            <div>
                <div class="rad">
                    <img src="img/dRad.png">
                </div>
                <img class="pijl" src="img/pijl.png">
            </div>

            <!-- Voor meer plezier uncomment dit -->
            <!-- <div>
                <div class="rad"></div>
                <img class="pijl" src="img/pijl.png">
            </div> -->
        </div>
    </main>
</body>
</html>