<?php
include "connection.php";
include "function.php";

$msg="";

if(isset($_POST['submit']))
{
  $username=$_POST['user'];
  $password=$_POST['pass'];

  $sql="select * from signup where user='$username' and password='$password'";
  $res=mysqli_query($conn,$sql);

  if(mysqli_num_rows($res)>0)
  {
    $row=mysqli_fetch_assoc($res);
    session_start();
    $_SESSION['IS_LOGIN']='yes';
    $_SESSION['user'] = $username;
    redirect('welcome.php');
  }

  else
  {
    $msg="Please enter valid login details";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  media="screen" type="text/css" href="login.css">
  
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
        <a style="color:orange; font-size: 25px; margin-left: 40px;" class="nav-link" href="signup.php">SIGN UP</a>
      </li>
       <li class="nav-item">
        <a style="color: white ; font-size: 25px; margin-left: 40px;"class="nav-link" href="#">LOGIN<span class="sr-only">(current)</span></a>
      </li>

    </ul> 
  </div>
</div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- End of Navbar -->

<!-- Start of Login form -->
  <div class="wrap">
    <div style="color: red;"><?php echo $msg; ?></div>
    <h2>Login Here</h2>
    <form name="login" method="post">
    
      <input type="text" name="user" placeholder="Username" required value="<?php if (isset($_POST['submit'])) echo $_POST['user']; ?>"><br/>
      <input type="password" name="pass" placeholder="Password" required><br/>
      
      <input type="submit" value="Submit" name="submit"><br/>
    </form>
  </div>
  <!-- End of Login form -->

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