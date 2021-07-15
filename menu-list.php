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
		<link rel="stylesheet" type="text/css" href="menu-list.css">
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
<main class="lst-container">
	<div class="lst">
		<h2>BREAKFAST</h2>
	<ol>
		<li>IDLI<SPAN>Rs.30</SPAN></li>
		<li>DOSA<SPAN>Rs.30</SPAN></li>
		<li>UPMA<SPAN>Rs.30</SPAN></li>
		<li>SANDWICH<SPAN>Rs.35</SPAN></li>
		<li>POHA<SPAN>Rs.30</SPAN></li>
	</ol>
	</div>

	<div class="lst">
		<h2>APPETIZERS</h2>
		<ol>
			<li>ONION RINGS<SPAN>Rs.120</SPAN></li>
			<li>GARLIC BREAD<SPAN>Rs.80</SPAN></li>
			<li>FRENCH FRIES<SPAN>Rs.80</SPAN></li>
			<li>CHICKEN SPRING ROLL<SPAN>Rs.100</SPAN></li>
			<li>TANDOORI POCKETS<SPAN>Rs.110</SPAN></li>
		</ol>
	</div>

	<div class="lst" >
		<h2>VEG SECTION</h2>
		<ol>
			<li>MALAI KOFTA<SPAN>Rs.250</SPAN></li>
			<li>PALAK PANEER<SPAN>Rs.200</SPAN></li>
			<li>RAJMA<SPAN>Rs.170</SPAN></li>
			<li>CHOLE<SPAN>Rs.180</SPAN></li>
			<li>TANDOORI PANEER TIKKA<SPAN>Rs.270</SPAN></li>
		</ol>
	</div>

	<div class="lst">
		<h2>NONVEG SECTION</h2>
		<ol>
			<li>BUTTER CHICKEN<SPAN>Rs.350</SPAN></li>
			<li>TANDOORI CHICKEN<SPAN>Rs.370</SPAN></li>
			<li>CHICKEN TIKKA<SPAN>Rs.300</SPAN></li>
			<li>RESHMI KEBAB<SPAN>Rs.350</SPAN></li>
			<li>INDIAN MUTTON CURRY<SPAN>Rs.400</SPAN></li>
		</ol>
	</div>

	<div class="lst">
		<h2>DESSERT</h2>
		<ol>
			<li>CHOCOLATE MOUSSE<SPAN>Rs.120</SPAN></li>
			<li>DOUGHNUT<SPAN>Rs.80</SPAN></li>
			<li>FROZEN YOGURT<SPAN>Rs.80</SPAN></li>
			<li>WAFFLE<SPAN>Rs.100</SPAN></li>
			<li>RED VELVET CAKE<SPAN>Rs.110</SPAN></li>
		</ol>
	</div>

	<div class="lst">
		<h2>WESTERN CUISINE</h2>
		<ol>
			<li>TACOS<SPAN>Rs.120</SPAN></li>
			<li>PIZZA<SPAN>Rs.150</SPAN></li>
			<li>MACORONI AND CHEESE<SPAN>Rs.180</SPAN></li>
			<li>BARBEQUE CHICKEN<SPAN>Rs.250</SPAN></li>
			<li>SPAGHETTI<SPAN>Rs.170</SPAN></li>
		</ol>
	</div>
	</main>

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