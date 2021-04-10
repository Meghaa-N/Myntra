<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'myntra');
$_SESSION['tailor']=1;
$_SESSION['order_id_decline']=2;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <title>MYNTRA</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
<style>
            a.nav-item.nav-link
            {
                font-size: 100px;
            }

        </style>
    <body>
        
        <!-- Nav Bar Start -->
        <div class="nav" style="height: 80px;">
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
                            <a href="tailor_interface.php" class="nav-item nav-link active">Home</a>
                            <a href="tailor_interface.php" class="nav-item nav-link">Booked</a>
                            <a href="pending.php" class="nav-item nav-link">Pending</a>
                            <a href="completed.php" class="nav-item nav-link">Completed</a>
                            
                            <a href="my-account.html" class="nav-item nav-link">My Account</a>
                        </div>
                        
                        <div class="navbar-nav ml-auto" style="position: relative;right:50px">
                            
                                
                                    <a href="login.php" class="dropdown-item">Logout</a>
                            
                            </div>
                        </div>
                    </div>
                     <
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
       
<script>

function deleteRow(element) {

   var parent = element.parentNode;
   
   
  
      
     var text="";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
          
    if (this.readyState == 4 && this.status == 200) {
      text =this.responseText;
      
    }
    
  }

  xhttp.open("POST", "change_pending.php", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("item_sno="+parent.id);
location.reload();

  
 }

 function decline(element) {

   var parent = element.parentNode;
   
   
  
      
     var text="";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
          
    if (this.readyState == 4 && this.status == 200) {
      text =this.responseText;
      
    }
    
  }

  xhttp.open("POST", "decline.php", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("item_sno="+parent.id);
location.reload();

  
 }
  
  

</script>


<style>
    .txt
    {
        text-align: justify;
        margin-left: 18%;
        margin-right: 18%;
        display:block;
    }
    span
    {
        font-weight: 900;

    }
</style>
    
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1 style="color: #3E4152;font-family: Whitney,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;">Your recent bookings</h1>
                </div>
               
               <!--<div class="row align-items-center product-slider product-slider-4" style="width: 100%;">-->
                <div class="row" style="height: 100%">

                    <?php $sql="select * from billing where tailor_id=$_SESSION[tailor] and tailor_status='booked';"; 
                    $temp=mysqli_query($con,$sql); 
                    while ($row = mysqli_fetch_assoc($temp)) {?>
                    <div class="col-lg-3" style="height: 100%">
                        <div class="product-item" style="width:22vw;background-color: white;padding-bottom: 10%;padding-top: 10%;border:5px solid #3E4152;height: 60vh">
                        <p class="txt"><span>Order ID: </span><?php echo $row['order_id'] ?></p> 
                        <p class="txt"><span>Name: </span><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></p> 
                        <p class="txt"><span>Address:</span> <?php echo $row['address'] ?></p> 
                        <p class="txt"><span>Phone Number: </span><?php echo $row['phno'] ?></p> 
                        <p class="txt"><span>Delivered Date:</span><?php echo $row['delivery_date'] ?></p> 
                        <p class="txt"><span>Price to be charged:</span> Free</p>
                        <P style="text-align: center;"><button id='<?php echo $row['sno'] ?>' onclick="deleteRow(this)" class="btn">Accept</button>
                        <button id='<?php echo $row['sno'] ?>' onclick="decline(this)" class="btn">Decline</button></P>
                        

                        </div>
                    </div><?php } ?>
                    
                    </div>
                </div>
            </div>









       <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Buildings Alyssa,
Begonia and Clover situated in Embassy Tech Village,
Outer Ring Road,
Devarabeesanahalli Village,
Varthur Hobli,
Bengaluru – 560103, India</p>
                                <p><i class="fa fa-envelope"></i>queriesmyntra@myntra.com</p>
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
                                <li><a href="#">Payment Policy</a></li>
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