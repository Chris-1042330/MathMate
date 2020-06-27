<!doctype html>
<html>
<?php
session_start();
if(!isset($_SESSION['ingelogd'])){
	require('header_loggedout.php');
}else{
	require('header_loggedin.php');
}
?>
	<head>
		<meta name="author" constent="">
		<title>Presentatie-Pagina | MathMate</title>
		<script src="js/slideshow.js"></script> 
		<link rel="stylesheet" type="text/css" href="css/presentatie.css">
	<head>


       <main>
			<h1 class="col-md-12 mt-5 text-center welkom_title">Welkom Bij MathMate!</h1>
				
			<section class="row col-12  justify-content-center">
				<article class="col-md-6 d-flex p-2 bd-highlight">
					<p class="text-center">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>

				<div class="col-12  mt-5  text-center">
					<div class="slideshow " onload='changeImg()' >
					    <img name='slide'  src="https://www.cssdesignawards.com/articleimages/20131231/25-web-place.jpg"/>
					</div>
				</div>
			</div>
		</section> 
	</main>
	
<?php require('footer.php');?>
