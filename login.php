<?php
$error = "";
if (isset($_POST['submit'])) {
	if (!empty($_POST['username']) && !empty($_POST['password']) ) {
		require('database/dbconnection.php');
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		$sql = "SELECT * FROM users WHERE username = '{$username}' ";

		if ($result = $connection->query($sql)) {

			$dbuser = $result->fetch_row();
			$dbpassword = $dbuser[3];
			echo $dbpassword;
			if (password_verify($password, $dbpassword)) {
				session_start();
				$_SESSION['vnaam'] = $_POST['username'];
				$_SESSION['ingelogd'] = true;
				header("location: home.view.php");

				// $error = "resultaal is goed";
			} else {
				$error = "Enter Username or Password";	
			}
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="language" constent="NL">
	<meta name="description" constent="events">
	<meta name="author" constent="Samsor Wiar">
	<meta name="keywords" constent="Coronavirus|COVID-19">
	<title>Presentatie-Pagina</title>
	<!-- standaard  -->
	 <script src="js/slideshow.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/standard.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<!-- optionieel -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
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
					<a href="index.view.php"><img src="img/logo.png" alt="MathMate"></a>
				</span>
				<div class='nav_extra'>
					<span>
						<a class="login" href="register.php">Register</a>
					</span>
				</div>
			</nav>
		</header>

			<form class="login_form" action='' method="POST">
				<h2>Login</h2>
				<input autocomplete="off" type='text' name='username' placeholder="Username"><br>
				<input autocomplete="off" type='password' name='password' placeholder="Password"><br>
				<button name="submit" type='submit'>Login</button>
			</form>

			<form class="register_form" action="register.php" method="POST">
				<button type="submit" name="submit">Register</button>
			</form>
	</main>
</body>
</html>