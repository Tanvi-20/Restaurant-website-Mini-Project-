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
$reserve_id="";
if(isset($_POST['submit']))
{

$nm=$_POST['name1'];
$phn=$_POST['phone'];
$dbook=$_POST['datebook'];
$tbook=$_POST['timebook'];
$nopr=$_POST['nop'];
$tbn=$_POST['tableno'];

$sql="select * from tablebook where tableno='$tbn' and time='$tbook' and date='$dbook'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
	{
		$msg1="Table Already booked at selected time";
	}
else
{
		$reserve_id=substr($phn, 3 ,4);
		$query="INSERT INTO TABLEBOOK VALUES ('$nm','$phn','$dbook','$tbook','$nopr','$tbn','$reserve_id')";
		$data=mysqli_query($conn,$query);

		if($data)
		{	
			
			$msg="Reservation successful! Your code is: ";
		}
		else
		{   
			$msg="Error, Please try again!";
		}
	}
}
?>
<html>
<head>
	<title>Table Booking</title>
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Lobster&display=swap" rel="stylesheet">  
		<script src="https://kit.fontawesome.com/f1045cddcf.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="Tablebooking.css">
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

<!----------- End of Navbar------------------ -->	

 <!---------Table Booking Section------------>
 <div class="container1">
 	<div class="container-time">
 		<h2 class="heading" style="color: orange;">Time Open</h2>
 		<h3 class="heading-days" style="color: #998100;">Monday-Friday</h3>
 		<p style="color: white;">8am - 11am (breakfast)</p>
 		<p style="color: white;">11am - 11pm(lunch/dinner)</p>

 		<h3 class="heading-days" style="color: #998100;">Saturday and Sunday</h3>
 		<p style="color: white;">8am - 12pm (breakfast)</p>
 		<p style="color: white;">12pm - 11pm(lunch/dinner)</p>

 		<hr>

 		<h4 class="heading-phone">Call Us: 888-999-222</h4>
 	</div>

 	<div class="container-form">
 		<div style="color: green; font-size: 20px;"><?php echo $msg.$reserve_id;?></div>
 		<div style="color: red;"><?php echo $msg1 ;?></div>
 	
 		<form action="" method="POST">
 			<h2 class="heading heading-yellow" style="color: orange;">Table Reservation</h2>
 			
 			<div class="form-field">
 				<p>Name</p>
 				<input type="text" required="required" name="name1" value="<?php if (isset($_POST['submit'])) echo $_POST['name1']; ?>">
 			</div>

 			<div class="form-field">
 				<p>Phone</p>
 				<input type="text" required="required" minlength="10" maxlength="10" name="phone" value="<?php if (isset($_POST['submit'])) echo $_POST['phone']; ?>">
 			</div>

 			<div class="form-field">
 				<p>Date</p>
 				<input type="date"required="required" name="datebook" value="<?php if (isset($_POST['submit'])) echo $_POST['datebook']; ?>">
 			</div>

 			<div class="form-field">
 				<p>Time</p>
 				<input type="time"required="required" min="08:00" max="22:00" name="timebook" value="<?php if (isset($_POST['submit'])) echo $_POST['timebook']; ?>">
 			</div>

 			<div class="form-field">
 				<p>No.of Persons</p>
 				<input type="number" name="nop" required="required" min="1" max="6" value="<?php if (isset($_POST['submit'])) echo $_POST['nop']; ?>">
 			</div>

 			<div class="form-field">
 				<p>Table Number</p>
 				<input type="number" name="tableno" required="required" min="1" max="12" value="<?php if (isset($_POST['submit'])) echo $_POST['tableno']; ?>">
 			</div>
 			
 			<a href="Tablebooking.php"><input type="submit" class="btn" name="submit" value="BOOK"></a>
 		</form>
 	</div>
 	
 </div>
 <!------------- End of Table Booking Section------------>


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
