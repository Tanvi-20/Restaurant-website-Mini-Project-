<?php
include("connection.php");
include("function.php");
session_start();
if (!isset($_SESSION['IS_LOGIN']) || $_SESSION['IS_LOGIN']!='yes') {
        header("location: login.php");
        exit;
    }
$msg="";
$msg1="";
if(isset($_POST['submit']))
{
$nm=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$query="INSERT INTO `contactus`(`name`, `email`, `message`) VALUES ('$nm','$email','$message')";


if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		$data=mysqli_query($conn,$query);
		if($data)
		{

			$msg="Feedback has been sent";
		}
		else
		{
			$msg1="Sorry there was some error";
		}
	}
	else{
		$msg1="Please enter valid email";
	}
}
?>
<html>
<head>
	<title>CONTACT US</title>
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Lobster&display=swap" rel="stylesheet">  
		<script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="ContactUs.css">
</head>
<body>
	<!--------- Navbar-------------->
		
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
					        <a style="color: white; font-size: 25px; margin-left: 40px;"class="nav-link" href="#">CONTACT<span class="sr-only">(current)</span></a>
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

<!----------- End of Navbar-------------------->
<!---------------Contact Us-------------------->
<section class="contact">
	<div class="content">
		<h2>Contact Us</h2>
		<p>We here at food fusion would always want to serve the best to our guests.Any feedback or query from you will surely be looked upon and reverted to the earliest.For any doubts or queries you can contact us anytime!</p>
	</div>
	<div class="container1">
		<div class="contactInfo">
			<div class="box">
				<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>

					<div class="text">
						<h3>Address</h3>
						<p>No.13,Military Lane,<br> Opposite Bus Stand,<br> Andheri, Mumbai</p>
					</div>
			</div>

			<div class="box">
				<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Phone</h3>
						<p>888-999-222</p>
					</div>
			</div>
			
			<div class="box">
				<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>foodfusionresto@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="contactForm">
			<div style="color: green; font-size: 20px;"><?php echo $msg;?></div>
			<div style="color: red; font-size: 20px;"><?php echo $msg1;?></div>
			<form action="" method="POST">
				<h2>Send Message</h2>
				<div class="inputBox">
					<input type="text" name="name" required="required">
					<span>Name</span>
				</div>

				<div class="inputBox">
					<input type="text" name="email" required="required">
					<span>Email</span>
				</div>

				<div class="inputBox">
					<textarea name="message" required="required"></textarea>
					<span>Type your message...</span>
				</div>

				<div class="inputBox">
					<input type="submit" name="submit" value="Send">
					
				</div>


			</form>
			
		</div>
	</div>
</section>




<!----------------End of Contact Us------------------>
<!------------------- Footer--------------------------->
<footer class="footer">
	<div class="section-center">
		<p class="text">
			&copy; <span>FOOD FUSION</span>
		</p>
	</div>
	
</footer>
<!------------------- End of Footer -------------------->	

</body>
</html>
