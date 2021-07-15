<?php
include ("connection.php");
include("function.php");
$msg="";
if(isset($_POST['submit']))
{

$fnm=$_POST['fname'];
$lnm=$_POST['lname'];
$address=$_POST['addr'];
$phone=$_POST['phn'];
$emailid=$_POST['email'];
$user=$_POST['user'];
$password=$_POST['pass'];

$sql="select * from signup where user='$user' or email='$emailid'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
	$msg="Email/Username already exists!";
}

else{
	$query="INSERT INTO `signup`(`fname`, `lname`, `addr`, `phone`, `email`, `user`, `password`) VALUES ('$fnm','$lnm','$address','$phone','$emailid','$user','$password')";
	$data=mysqli_query($conn,$query);
	if($data)
	{

	
		 $row=mysqli_fetch_assoc($res);
    	$_SESSION['IS_LOGIN']='yes';
    	?><script>window.alert("Signup successful");</script>
    	<?php
    	redirect('login.php');

	
	}
	else
	{
		$msg="Sorry please try again!";
	}
 }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up form</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Lobster&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet"  media="screen" type="text/css" href="signup.css">
	
</head>
<body>

<!-- Start of Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
			<div class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto justify-content-end">
      <li class="nav-item active">
        <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="MiniProjectHome.php">HOME</a>
      </li>
    
       <li class="nav-item">
        <a style="color: white; font-size: 25px; margin-left: 40px;" class="nav-link" href="#">SIGN UP<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a style="color: orange; font-size: 25px; margin-left: 40px;"class="nav-link" href="login.php">LOGIN</a>
      </li>

    </ul> 
  </div>
</div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- End of Navbar -->

<!--Sign-up form-->
	<div class="wrap">
		<div style="color: red;"><?php echo $msg; ?></div>
		<h2>Sign up Here</h2>
		
		<form name="signup" method="POST">
		
			<input type="text" name="fname" placeholder="First Name" required><br/>			
			<input type="text" name="lname" placeholder="Last Name" required><br/>

			<input type="text" name="addr" placeholder="Address" required><br/>
			<input type="text" name="phn"  placeholder="Phone Number" required><br/>
			<input type="text" name="email" placeholder="Email" required><br/>
			<input type="text" name="user" placeholder="Username" required><br/>
			<input type="password" name="pass" placeholder="Password" required><br/>
			
			<input type="submit" name="submit" value="Submit" ><br/>
    
		</form>
	</div>
<!--End of Sign-up form-->

	<!-- Footer-->
<footer class="footer">
	<div class="section-center">
		<p class="text">&copy; <span>FOOD FUSION</span></p>
	</div>	
</footer>
<!-- End of Footer -->


</body>
</html>