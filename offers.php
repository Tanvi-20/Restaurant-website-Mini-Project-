<?php
include "connection.php";
include "function.php";
session_start();
if (!isset($_SESSION['IS_LOGIN']) || $_SESSION['IS_LOGIN']!='yes') {
        header("location: login.php");
        exit;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>FOOD FUSION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet"href="offers.css">
    <!--  CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&family=Lobster&display=swap" rel="stylesheet">
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
    <a class="dropdown-item" style="font-size: 24px; color: orange;" href="#">Offer</a>
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

<!----------- End of Navbar-------------------->
      <!--Hero Section-->
      <section id="hero">
          <div class="hero-container">
              <div class="hero-logo">
                  
                  <h1> !! Best Offers & Discount !! </h1>
              <img src="https://www.madrascurrycup.com/images/grab-now/Offer-ad.jpg" alt="Burger Palace">
              </div>
          </div>
      </section>
      <!---END OF SECTION-->
<!--offers -->
<section>
    <div class="section mt-5">
        <div class="container-fluid">
            <div class="section-title">
                <h3> OFFERS OF THE DAY</h3>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="deal-box">
                        <div>
                            <img src="veg.jpg"class="img-fluid"alt="">
                        </div>
                    </div>
                </div>
                <!--para--->
                <div class="col-md-3">
                    <div class="deal-box">
                       <h2>"FAMILY Offers"</h2>
                        <div>
                           When a family sits down together, it helps them handle the stresses of daily life and the hassles of day-to-day existence.
                           Book a table and show the reservation code at the counter in order to get 15% discount on your bill! 
                        </div>
                        
                       
                    </div>
                </div>
                <!--end of para--->
                <div class="col-md-3">
                    <div class="deal-box">
                        <div>
                            <img src="nonveg3.jpg"class="img-fluid"alt="">
                        </div>
                    </div>
                </div>
                <!---para-->
                <div class="col-md-3">
                    <div class="deal-box">
                        <div>
                            <h2>"SPECIAL OFFERS"</h2>
                            Order any appetizer and get a dessert for free. Doesnt't get any special than that!
                        </div>
                        
                        
                    </div>
                </div>
                <!--end of para--->
                <div class="col-md-3">
                    <div class="deal-box">
                        <div>
                            <img src="https://i.pinimg.com/564x/9a/24/1d/9a241d8ad8ce8d69db725a5a644bd309.jpg"class="img-fluid"alt="">
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3">
                    <div class="deal-box">
                        <div>
                             <h2> "Did someone say Biryani?"" </h2>
                          Ain't no love like the love of a biryani. If ever you need to brave the harsh winter cold, try eating really spicy food, the kind that fills your belly with Dragonfire and then see if the cold can stop you. Biryani starting at just Rs.99.
                        </div>
                        
                    </div>
                </div>
                <!----->
                <div class="col-md-3">
                    <div class="deal-box">
                        <div>
                            <img src="https://thumbs.dreamstime.com/b/buy-get-free-sale-banner-design-template-discount-speech-bubble-tag-vector-illustration-buy-get-free-sale-banner-design-template-183564736.jpg"class="img-fluid"alt="">
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-3">
                    <div class="deal-box">
                        <div>
                            <h2> "2 Dish + 1 Dish free"</h2>
                             Order two dishes and get one dish of your choice absolutely free. Food Fusion does put a smile does't it?:-)                        

                        </div>

                    </div>
                </div>
                <!----->
            </div>
        </div>
    </div>
</section>
<!---End of the Deals-->

<!--BOOK TABLE -->
<section align="center">
<div class="about mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                
                <div class="about-text">
                    <div class="about-img">
                        <div class="row">
                            
                        </div>
                    </div>
                    <p  > <img src="https://lh3.googleusercontent.com/proxy/MRrGsf9caALmMlzIdTpVcJPV4iAaGe1JnbY7bQcFNv9rc3csRDkkkPOHHedbSufVPj1wuLNPCTyl79TCJBq5lW5SueLB-RK1j1UsT9pend0vMfEu6vsPUInDhtelKiZt8ttY"alt="">
                        
                    </p>

                  
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
</section>

<!---End of BOOK TABLE-->
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