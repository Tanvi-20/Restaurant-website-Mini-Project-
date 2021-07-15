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
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Lobster&display=swap" rel="stylesheet">  
		<script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
	<!-- Start of Navbar -->
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
        <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="welcome.php">HOME</a>
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

	<section>
		<div class="container1">
			<header>
				<h1>MENU</h1>
			</header>
			<main>
				<div class="card">
					<img src="./cofee.jpg" alt="Sandwich" height="270px">
					<div class="breakfast-content">
						
						<h3>BREAKFAST</h3>
						<p>Morning spirit brings more joys with good food as this is our motive to bring it for you!</p>
					<div><a href="./menu-list.php" class="btn">Read More</a></div>
						
				</div>
			</div>

			<div class="card">
					<img src="./appetizer.jpg" alt="Appetizer" height="270px">
					<div class="breakfast-content">
						
						<h3>APPETIZER</h3>
						<p>When you fall for your Appetite too early, you may not be able to endure to end!</p>
						<div><a href="./menu-list.php" class="btn">Read More</a>

						</div>
						
				</div>
				
			</div>

			<div class="card">
					<img src="./veg.jpg" alt="Sandwich" height="270px">
					<div class="breakfast-content">
						
						<h3>VEG SECTION</h3>
						<p>Vegetarian food leaves a deep Impression on or nature that we provide in plate!</p>
						<div><a href="./menu-list.php" class="btn">Read More</a></div>
						
				</div>
				
			</div>

			<div class="card">
					<img src="./nonveg3.jpg" alt="Sandwich" height="270px">
					<div class="breakfast-content">
						
						<h3>NONVEG SECTION</h3>
						<p>We bring you a best taste that fulfil your taste and the secret of specie!</p>
						<div><a href="./menu-list.php" class="btn">Read More</a></div>
						
				</div> 
				
			</div>

			<div class="card">
					<img src="./icecream3.jpg" alt="Sandwich" height="270px">
					<div class="breakfast-content">
						
						<h3>DESSERT</h3>
						<p>As we all crave for diferent side dish but our Combo pack will fulfil ur Wish !..</p>
						<div><a href="./menu-list.php" class="btn">Read More</a></div>	
				</div> 
			</div>

			<div class="card">
					<img src="./food.jpg" alt="Sandwich" height="270px">
					<div class="breakfast-content">
						
						<h3>WESTERN CUISINE</h3>
						<p>A recipe has no soul but till a cook brings the soul from their touch!</p>
						<div><a href="./menu-list.php" class="btn">Read More</a></div>	
				</div> 
			</div>


		</main>
		</div>
	</section>

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