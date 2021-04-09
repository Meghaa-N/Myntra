<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'myntra');
$_SESSION['order_id']=1;
$_SESSION['customer_id']=1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">
        <title>Dynamic and Resizable Tee Designer</title>
          <link rel="stylesheet" href="styles.css" />
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
            .size_input
            {
              height: 25vw;
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
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="product_list.php" class="nav-item nav-link">Products</a>
                            <a href="cart.php" class="nav-item nav-link">Cart</a>
                            <a href="wishlist.html" class="nav-item nav-link">Wishlist</a>
                            
                            <a href="tshirt_customization.php" class="nav-item nav-link active">Customization</a>
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
<section style="background-color:white">
<h1 style="color: #3E4152;font-family: Whitney,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif; text-align: center">Create your own designs!</h1>
    <!-- Create the container of the tool -->
    <div class="tshirt-container">
      <div class="tshirt-image-container" style="position:relative;margin-top:0%">
        <div id="tshirt-div">
          <!-- 
                Initially, the image will have the background tshirt that has transparency
                So we can simply update the color with CSS or JavaScript dinamically
            -->
          <img id="tshirt-backgroundpicture" src="./background_tshirt.png" />

          <div id="drawingArea" class="drawing-area">
            <div class="canvas-container">
              <canvas id="tshirt-canvas" width="200" height="400"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="tshirt-form">
        <!-- The select that will allow the user to pick one of the static designs -->
        <div class="tshirt-form-label">
          <label for="tshirt-design">T-Shirt Design</label>
        </div>
        <select id="tshirt-design">
          <option value="">Select one of our designs ...</option>
          <option value="batman.png">Batman</option>
        </select>

        <!-- The Select that allows the user to change the color of the T-Shirt -->
        <br /><br />
        <div class="tshirt-form-label">
          <label for="tshirt-color">T-Shirt Color</label>
        </div>
        <select id="tshirt-color">
          <!-- You can add any color with a new option and definings its hex code -->
          <option value="#fff">White</option>
          <option value="#000">Black</option>
          <option value="#f00">Red</option>
          <option value="#008000">Green</option>
          <option value="#ff0">Yellow</option>
        </select>

        <br /><br />
        <div class="tshirt-form-label">
          <label for="tshirt-custompicture">Upload your own design</label>
          <label class="custom-file-upload-btn" style="border-color:#FF6F61">
            <input type="file" id="tshirt-custompicture" /> Choose file
          </label>
        </div>

        <br /><br />
        <div class="tshirt-form-label">
          <label for="text-color">Text Color</label>
        </div>
        <select id="text-color">
          <!-- You can add any color with a new option and definings its hex code -->
          <option value="#fff">White</option>
          <option value="#000">Black</option>
          <option value="#f00">Red</option>
          <option value="#008000">Green</option>
          <option value="#ff0">Yellow</option>
        </select>

        <br /><br />
        <div class="tshirt-form-label">
          <label for="tshirt-text">Upload your text</label>
        </div>
        <div>
          <input type="text" id="tshirt-text"  />
          <!--button to submit-->
          <!-- <button onclick="myFunction()">Click me</button> -->
          <input type="button" id="btn" value="Create" style="border-color:#FF6F61"> 
        </div>
        <div class="sizes-row">
          <div class="size">
            <label for="size-no-1">XS</label>
            <input type="number" id="size-no-1" min="0" class="size_input"/>
          </div>
          <div class="size">
            <label for="size-no-2">S</label>
            <input type="number" id="size-no-2" min="0" class="size_input" />
          </div>
          <div class="size">
            <label for="size-no-3">M</label>
            <input type="number" id="size-no-3" min="0" class="size_input"/>
          </div>
          <div class="size">
            <label for="size-no-4">L</label>
            <input type="number" id="size-no-4" min="0" class="size_input" />
          </div>
          <div class="size">
            <label for="size-no-5">XL</label>
            <input type="number" id="size-no-5" min="0" class="size_input" />
          </div>
          <div class="size">
            <label for="size-no-6">XXL</label>
            <input type="number" id="size-no-6" min="0" class="size_input"/>
          </div>
        </div>
		<div>
          
          <!--button to submit-->
          <!-- <button onclick="myFunction()">Click me</button> -->
          <a href="billing.php"><input type="button" id="btn" value="Create"style="background-color:#FF6F61;position:relative;margin-left:13vw"></a>
        </div>
        <div class="form-footer">
          <p>
            To remove a loaded picture on the T-Shirt select it and press the
            <kbd>DEL</kbd> key.
          </p>
        </div>
      </div>
    </div>
</section>
    <!-- Include Fabric.js in the page -->
    <script src="fabric.js-4.3.1/dist/fabric.min.js"></script>
    <script src="dom-to-image/dist/dom-to-image.min.js"></script>

    <script>
      //window.alert(domtoimage);
      let canvas = new fabric.Canvas("tshirt-canvas");

      // var text = new fabric.Text('hello world', { left: 100, top: 100 });
      // canvas.add(text);

      function updateTshirtImage(imageURL) {
        fabric.Image.fromURL(imageURL, function (img) {
          img.scaleToHeight(300);
          img.scaleToWidth(300);
          canvas.centerObject(img);
          canvas.add(img);
          canvas.renderAll();
        });
      }

      // Update the TShirt color according to the selected color by the user
      document.getElementById("tshirt-color").addEventListener(
        "change",
        function () {
          document.getElementById(
            "tshirt-div"
          ).style.backgroundColor = this.value;
        },
        false
      );

      //submit button
      document.getElementById("tshirt-color").addEventListener(
        "change",
        function () {
          document.getElementById(
            "tshirt-div"
          ).style.backgroundColor = this.value;
        },
        false
      );

      // Update the TShirt color according to the selected color by the user
      document.getElementById("tshirt-design").addEventListener(
        "change",
        function () {
          // Call the updateTshirtImage method providing as first argument the URL
          // of the image provided by the select
          updateTshirtImage(this.value);
        },
        false
      );

      // When the user clicks on upload a custom picture
      document.getElementById("tshirt-custompicture").addEventListener(
        "change",
        function (e) {
          var reader = new FileReader();

          reader.onload = function (event) {
            var imgObj = new Image();
            imgObj.src = event.target.result;

            // When the picture loads, create the image in Fabric.js
            imgObj.onload = function () {
              var img = new fabric.Image(imgObj);

              img.scaleToHeight(300);
              img.scaleToWidth(300);
              canvas.centerObject(img);
              canvas.add(img);
              canvas.renderAll();
            };
          };

          // If the user selected a picture, load it
          if (e.target.files[0]) {
            reader.readAsDataURL(e.target.files[0]);
          }
        },
        false
      );

      //to add custom text in the tshirt
      document.getElementById("tshirt-text").addEventListener(
        "change",
        function (e) {
          var text = new fabric.Text(
            document.getElementById("tshirt-text").value,
            {
              left: 100,
              top: 100,
              fill: document.getElementById("text-color").value,
            }
          );
          canvas.add(text);
        },
        false
      );

      //to set text to '' when color of text is changed
      document.getElementById("text-color").addEventListener(
        "change",
        function (e) {
          document.getElementById("tshirt-text").value = "";
        },
        false
      );

      // When the user selects a picture that has been added and press the DEL key
      // The object will be removed !
      document.addEventListener(
        "keydown",
        function (e) {
          var keyCode = e.keyCode;

          if (keyCode == 46) {
            console.log(
              "Removing selected element on Fabric.js on DELETE key !"
            );
            canvas.remove(canvas.getActiveObject());
          }
        },
        false
      );
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
  </body>
</html>
