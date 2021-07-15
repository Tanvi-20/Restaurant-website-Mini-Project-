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
	<title>Gallery</title>
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Lobster&display=swap" rel="stylesheet">  
		<script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="Gallery.css">
</head>
<!--------------------- Navbar-------------------->
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
					        <a style="color: white;font-size: 25px; margin-left: 40px;"class="nav-link" href="#">GALLERY<span class="sr-only">(current)</span></a>
					      </li>
					       
    				</ul> 
  				</div>
			</div>
		</nav>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!---------------End of navbar------------------->
<body>
	<h1>OUR GALLERY</h1>
	<div class="maindiv">
	</div>

</body>

<!------------------- Footer--------------------------->
<footer class="footer">
	<div class="section-center">
		<p class="text">
			&copy; <span>FOOD FUSION</span>
		</p>
	</div>
	
</footer>
<!------------------- End of Footer -------------------->