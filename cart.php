<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'myntra');
$sql="select * from product join order_log where sno=product_id and order_id=$_SESSION[order_id]";
$temp=mysqli_query($conn,$sql);

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
        <script>
      function increaseValue(element) {

 
  var parent = element.parentNode;

   if(Number(document.getElementById('q'+parent.id).innerHTML)<500){

      var text="";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      text =this.responseText;

 document.getElementById('t'+parent.id).innerHTML=Number(document.getElementById('p'+parent.id).innerHTML)*Number(text);
 
  document.getElementById('q'+parent.id).innerHTML=text;
  document.getElementById('total').innerHTML=Number(document.getElementById('total').innerHTML)+Number(document.getElementById('p'+parent.id).innerHTML);
document.getElementById('gtotal').innerHTML=Number(document.getElementById('gtotal').innerHTML)+Number(document.getElementById('p'+parent.id).innerHTML);
  
      
    }
    
  }

  xhttp.open("POST", "increase_cart.php", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("item_sno="+parent.id);


  
 }
 

  
 
}

function decreaseValue(element) {
   
 
  var parent = element.parentNode;
   if(Number(document.getElementById('q'+parent.id).innerHTML)>0){

      
           var text="";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      text =this.responseText;

 document.getElementById('t'+parent.id).innerHTML=Number(document.getElementById('p'+parent.id).innerHTML)*Number(text);
 
  document.getElementById('q'+parent.id).innerHTML=text;
  document.getElementById('total').innerHTML=Number(document.getElementById('total').innerHTML)-Number(document.getElementById('p'+parent.id).innerHTML);
document.getElementById('gtotal').innerHTML=Number(document.getElementById('gtotal').innerHTML)-Number(document.getElementById('p'+parent.id).innerHTML);
  
  
      
    }
    
  }

  xhttp.open("POST", "decrease_cart.php", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("item_sno="+parent.id);


  
 }
  
}



function deleteRow(element) {

   var parent = element.parentNode;
   
   
  document.getElementById('total').innerHTML=Number(document.getElementById('total').innerHTML)-Number(document.getElementById('p'+parent.id).innerHTML);
document.getElementById('gtotal').innerHTML=Number(document.getElementById('gtotal').innerHTML)-Number(document.getElementById('p'+parent.id).innerHTML);
 

      
     var text="";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
		  
    if (this.readyState == 4 && this.status == 200) {
      text =this.responseText;
    }
    
  }

  xhttp.open("POST", "delete_cart.php", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("item_sno="+parent.id);
location.reload();

  
 }
  

        </script>
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
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="product_list.php" class="nav-item nav-link">Products</a>
                            <a href="cart.php" class="nav-item nav-link">Cart</a>
                            <a href="wishlist.html" class="nav-item nav-link">Wishlist</a>
                            
                            <a href="tshirt_customization.php" class="nav-item nav-link">Customization</a>
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
                               <a href="product_list" class="nav-item nav-link">My Account</a>
                               
                            </div>
                        </div>
                    </div>
                     <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span></span>
                            </a>
                            <a href="cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span></span>
                            </a>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->    
        
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <?php $sum=0;
                                        while ($row = mysqli_fetch_assoc($temp)) {
                                            $sum=$sum+$row['total'];?>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/<?php echo $row['image'] ?>" alt="Image"></a>
                                                    <p><?php echo $row['name'] ?></p>
                                                </div>
                                            </td>
                                            <td id="p<?php echo $row['sno'] ?>"><?php echo $row['discount'] ?></td>
                                            <td>
                                                <div id=<?php echo $row['sno'] ?>>
  <button onclick="decreaseValue(this)" >-</button>
  <h2 pattern="[0123456789]"style="text-align: center;display: inline;" id="q<?php echo $row['sno'] ?>" value="<?php echo $row['quantity'] ?>" /><?php echo $row['quantity']?></h2>
  <button  onclick="increaseValue(this)" >+</button>
</div>
                                            </td>
                                            <td id="t<?php echo $row['sno'] ?>"><?php echo $row['total'] ?></td>
                                            <td id="<?php echo $row['sno'] ?>"><button onclick="deleteRow(this)"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Sub Total:Rs.<span id="total"><?php echo $sum ?></span></p>
                                            <p>Shipping Cost<span>Rs.0</span></p>
                                            <h2>Grand Total:Rs.<span id="gtotal"><?php echo $sum ?></span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            
                                            <a href="billing.php"><button>Checkout</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        
        <!-- Footer Start -->
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
        <!-- Footer End -->
        
         
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
