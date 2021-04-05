<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'myntra');
$sql="select zipcode from billing where order_id=$_SESSION[order_id]";
$result=mysqli_query($conn,$sql);
$temp=mysqli_fetch_assoc($result);
$zip=$temp['zipcode'];
$sql="select * from tailor where pincode=$zip";
$result=mysqli_query($conn,$sql);
//echo "<script>alert($result)</script>";
if($result==NULL || $result=="")
{
 $msg="Sorry you address is not covered by Myntra yet! Soon we will extend our features to your place! Sorry for the inconvinience!" ;
}
else
{
  $temp=mysqli_fetch_assoc($result);
}



?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
        <meta charset="utf-8">
        <title>MYNTRA</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
	
   <body onload="move()">
        
        <!-- Nav Bar Start -->
        <div class="nav" style="height: 80px">
            <div class="container-fluid">

                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

                        <div class="logo" >
                            <a href="index.html">
                                <img style="max-height:50px" src="img/myntra_logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="navbar-nav mr-auto">
                            <a id="lid"href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="product-list.html" class="nav-item nav-link">Products</a>
                            <a href="cart.html" class="nav-item nav-link">Cart</a>
                            <a href="wishlist.html" class="nav-item nav-link">Wishlist</a>
                            
                            <a href="my-account.html" class="nav-item nav-link">My Account</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                    
                                    <a href="login.html" class="dropdown-item">Login & Register</a>
                                    <a href="contact.html" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                        <div class="navbar-nav ml-auto" style="position: relative;right:50px">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Login</a>
                                    <a href="#" class="dropdown-item">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                               
                            </a>
                </nav>
            </div>
        </div>
     <section  style="background-color: white;position: relative;top:5vh;margin-left:5%;margin-right: 5%">
     <h1 style="text-align: center;">Order Status</h1>
     <ul class="fa-ul" >
     <li style="margin-left: 2vw"><i class="fa-li fa fa-check-square"></i>Ordered</li>
     <li><i class="fa-li fa fa-check-square"></i>Shipped</li>
     <li><i class="fa-li fa fa-check-square"></i>Out for Delivery</li>
     <li><i class="fa-li fa fa-check-square"></i>Delivered</li>
   </ul>

        <div class="w3-light-grey">
    <div id="myBar" class="w3-green" style="height:24px;width:0"></div>
  </div>
  <div style="position: relative;margin:10%">
  <h2 >
    Hope You Liked Our product!
  </h2>
  <p>We are introducing a new feature! Now, you can avail Myntra tailors incase you need any of our products stitched or altered! You can get it altered free or just pay subsidized price from market price, based on your order! Our tailors come to your housee, note these alterations, make the necessary changes and then return back to you at your door step! All our tailors are handpicked, verified and offer best services! <h5>Your Delight is our Pleasure !</h5></p>
    <input type="checkbox" onclick="show()" id="need">Need a tailor?<br><br>
    <div id="tailor"style="height: 100%"><h5 style="float:left;border:5px solid #FF6F61B3;padding: 4%;"><?php if(isset($msg))
    {echo $msg;}
    else{
    ?>We have chosen our tailor based on your billing address.<br><br>Here are the details of your tailor:<br>Name: <?php echo $temp['name'] ?><br><br>Phone: <?php echo $temp['phno'] ?><br><br>Address: <?php echo $temp['address'] ?><br><br>Orders Completed: <?php echo $temp['orders_completed'] ?><br><br>Shop:<?php echo $temp['shop'] ?><br><br><a href="" style="text-decoration:underline;">Want tailor from different location?</a></h5><img style="height: 100%;width: 20vw;margin-left: 5%" src="img/<?php echo $temp['picture'] ?>"><?php } ?></div>
     <br><br><br><br></section>
     <style>
      #tailor
      {
        display: none;
      }
     li
     {
         display:block;
         float:left;
         margin-left:10vw;
         margin-right:2vw;
        
     }
     ul
     {
         position:relative;
         top:4vh;
         left:15vw;
         z-index: 4;

     }
     .w3-light-grey {
  width:62%;
  position:relative; 
  left:18vw;
}
     
     </style>



  <br>
  </div>
  <style>
  
  </style>
  <script>
    function show()
    {
      if(document.getElementById('need').checked)
      {
        document.getElementById('tailor').style.display='block';
      }
      else
      {
        document.getElementById('tailor').style.display='none';

      }
    }
function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
</script>


        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Pyament Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>