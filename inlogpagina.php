<!DOCTYPE html>
<?php
    $error = "";

    session_start();
    if(isset($_SESSION['registered'])){
        $error = $_SESSION['registered'];
        session_destroy();
        session_start();
    }
    if(isset($_SESSION['ingelogd'])){
        header("Location: index.php");
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST["user"]) && !empty ($_POST["pass"])){
            require('lib/dbconnect.php');
            require('lib/userconfig.php');

            $sql = "SELECT * FROM gebruikers WHERE username = '$username'";
            
            if($result = $conn->query($sql)){
                $dbuser = $result->fetch_row();
                $dbpass = $dbuser[2];
                if(password_verify($password, $dbpass)){
                    session_start();
                    $_SESSION['user'] = $username;
                    $_SESSION['ingelogd'] = true;
                    header("Location: index.php");
                }
                else{
                    $error = "Invalid user credentials!";
                    echo $dbpass;
                }
            }
            $conn->close();
        }
        else{
            $error = "Enter all required info!";
        }
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
    <title>Inloggen | MathMate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/inloggen.css">
    <link rel="icon" href="img/icon.png">
</head>
<body>
    <section class="modal-dialog">
        <section class="modal-content">
            <section class="modal-body">
                <section class="row justify-content-center">
                    <img src="img/Logo.png" class="logo">
                </section>
                <h5 class="error"><?php echo $error ?></h5>
                <form method="POST" class="row justify-content-center">
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" class="btn btn-secondary px-4"  name="submit" value="Inloggen">
                </form>
                <section class="register_form">
                    <a href="register.php" >
                        <button class="btn btn-secondary" type="submit" name="submit">Registreren</button>
                    </a>
                </section>
        </section>
    </section>

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>