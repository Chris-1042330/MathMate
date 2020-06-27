<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="language" constent="NL">
	<meta name="description" constent="events">
	<meta name="author" constent="Samsor Wiar">
	<meta name="keywords" constent="presenteren | Presentatie-Pagina">
	<title>Presentatie-Pagina</title>
	<!-- standaard  -->
	 <script src="js/slideshow.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/standard.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<!-- optionieel -->
	<link rel="stylesheet" type="text/css" href="css/Presentatie.css">
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
						<a class="login" href="login.php">Log In</a>
					</span>
				</div>
			</nav>
		</header>

		<section class="homepage">
			<header>
				<h1 class="welkom_title"> Welkom Bij MathMate!</h1>
			</header>

			<article class="welkom_content">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</article>

			<div class="slideshow">
				<div onload='changeImg()' >
				    <img name='slide' src="https://www.cssdesignawards.com/articleimages/20131231/25-web-place.jpg" height="350px" />
				</div>
			</div>
		</section> 
	</main>
</body>
</html>
