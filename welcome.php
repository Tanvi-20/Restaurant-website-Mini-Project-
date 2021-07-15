<?php
include "connection.php";
include "function.php";
session_start();
if (!isset($_SESSION['IS_LOGIN']) || $_SESSION['IS_LOGIN']!='yes') {
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Food Fusion</title>
		<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Lobster&display=swap" rel="stylesheet">  
		<script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="homepage.css">
	</head>
	<body>
		<!-- Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
			<div class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


<div class="dropdown">
<ul><li class="wel">Welcome <?php echo $_SESSION['user'];?>
   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: inherit; border: none; outline: none;"><i class="fas fa-user"></i></button>
  
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:rgba(0,0,0,0.7); ">
    <a class="dropdown-item" style="font-size: 24px; color: orange;" href="offers.php">Offer</a>
    <a class="dropdown-item" style="font-size: 24px; color: orange;" href="logout.php">Logout</a>
  </div></li></ul>
</div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto justify-content-end">
      <li class="nav-item active">
        <a style="color: white; font-size: 25px; margin-left: 40px;"class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="ContactUs.php">CONTACT</a>
      </li>
       <li class="nav-item">
        <a style="color: orange;font-size: 25px; margin-left: 40px;"class="nav-link" href="Gallery.php">GALLERY</a>
      </li>
    

    </ul> 
    
  </div>
</div>
</nav>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End of Navbar -->			
		<!--HEADER-->
		<header class="header">
			<div class="hero">
				<h1 class="title">FOOD FUSION</h1>
				<a href="Tablebooking.php" class="hero-button pulsate">Book A Table</a>
					
				</h1>
				
			</div>			
		</header>
		<!--End of HEADER-->
		<!-- ABOUT US SECTION-->
		<section id="about">
			<div>
				<h2 class="title-text">Our Inventory</h2>
			</div>
			<div class="about-center">
				<!--Start of the article-->
				<article class="about">
					<div class="about-icon">
						<i class="fas fa-mug-hot"></i>
					</div>
						<div class="about-text">
							<h2 class="about-subtitle">Drinks</h2>
							<p class="about-info">Drinks which will make you refreshed and reborn. Let the Fusion absorb IN!</p>
						</div>
				</article>
				<!--End of the article-->
				<!--Start of the article-->
				<article class="about">
					<div class="about-icon">
						<i class="fas fa-utensils"></i>
					</div>
						<div class="about-text">
							<h2 class="about-subtitle">Fusion Food</h2>
							<p class="about-info">Get Served by the taste from heaven, Let it Fuse within YOU!</p>
						</div>
				</article>
				<!--End of the article-->
				<!--Start of the article-->
				<article class="about">
					<div class="about-icon">
						<i class="fas fa-mortar-pestle"></i>
					</div>
						<div class="about-text">
							<h2 class="about-subtitle">Organic Fusion</h2>
							<p class="about-info">A blend of mouth watering taste Fused with organic flavours </p>
						</div>
				</article>
				<!--End of the article-->
				<!--Start of the article-->
				<article class="about">
					<div class="about-icon">
						<i class="fas fa-drumstick-bite"></i>
					</div>
						<div class="about-text">
							<h2 class="about-subtitle">Non Veg Delicacies</h2>
							<p class="about-info">What's with the food without the REAL content. Real Real Chicken Meal! </p>
						</div>
				</article>
				<!-- End of Article-->
				<!--Start of the article-->
				<article class="about">
					<div class="about-icon">
						<i class="fas fa-fish"></i>
					</div>
						<div class="about-text">
							<h2 class="about-subtitle">Sea Food</h2>
							<p class="about-info">And yeah! We got you covered with seafood as well! ;-) </p>
						</div>
				</article>
				<!-- End of Article-->
				<!--Start of the article-->
				<article class="about">
					<div class="about-icon">
						<i class="fas fa-pepper-hot"></i>
					</div>
						<div class="about-text">
							<h2 class="about-subtitle">Hot & Spicy</h2>
							<p class="about-info">For all those who need that Fusion of Spice in life!</p>
						</div>
				</article>
				<!-- End of Article-->
			</div>
		</section>

		<!--END OF ABOUT US-->
		<!-- Menu Section---->
		<section class="menu" id="menu">
			<article class="menu-image">
				
			</article>
			<article class="menu-text">
				<div class="menu-text-center">
					<h1>Our Menu</h1>
					<p>Our Menu of delicious dishes, which have been created with the hard work of our special chefs to bring the best of them to you! FUSE IN!!! Click on "Explore" to go to Explore our Menu!</p>
					<a href="menu.php">Explore</a> 
				</div>
			</article>
		</section>
		<!-- End of Menu Section-->
		<!-- Social Icons -->
		<section id="social-icons">
			<a href="#"><i class="fab fa-facebook facebook"></i></a>
			<a href="#"><i class="fab fa-twitter twitter"></i></a>
			<a href="#"><i class="fab fa-instagram instagram"></i></a>
			<a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>	
		</section>


		<!-- End of Social Icons setion-->

<!-- Footer-->
<footer class="footer">
	<div class="section-center">
		<p class="text">
			&copy; <span>FOOD FUSION</span>
		</p>
	</div>
	
</footer>
<!-- End of Footer -->
</body>

</html>