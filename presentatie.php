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

				<div class="carousel slide col-sm-12 col-md-12 col-lg-8 mx-auto slideshow" data-ride="carousel">
						<div class="carousel-inner " role="listbox">
							<div class="carousel-item active mt-5">
								<div class="row">
									<img class="col d-block w-100 " src='https://www.cssdesignawards.com/articleimages/20131231/25-web-place.jpg'>
								    <img class="col d-block w-100 " src='https://cdn.dribbble.com/users/1118096/screenshots/3450211/dribbble_shot_4.jpg'>
								    <img class="col d-block w-100 " src='https://i.pinimg.com/originals/08/fd/8f/08fd8f8278d71e4133162215f6436490.jpg'>
								</div>
							</div>
							<div class="carousel-item mt-5 ">
								<div class="row">
									<img class="col d-block w-100 " src='https://cdn.dribbble.com/users/906563/screenshots/5150522/cover.jpg';>
								    <img class="col d-block w-100 " src="https://i.pinimg.com/236x/83/7b/a3/837ba330f9cb65c151e0da9e410a9d6f--contact-page-contact-form.jpg">
								    <img class="col d-block w-100 " src="https://images.ui8.net/uploads/1350x1020-1_1555933560065.jpg">
								</div>
							</div>
						</div>
					</div>
			</section> 
		</main>
	
<?php require('footer.php');?>
