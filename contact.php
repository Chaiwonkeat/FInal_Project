<?php
if(isset($_POST['submitSave'])) {
	$signup = simplexml_load_file('contact.xml');
	$product = $signup->addChild('customer');
	$product->addChild('firstname', $_POST['firstname']);
	$product->addChild('lastname', $_POST['lastname']);
    $product->addChild('email', $_POST['email']);
    $product->addChild('phone', $_POST['phone']);
    $product->addChild('comments', $_POST['comments']);
	file_put_contents('contact.xml', $signup->asXML());
	//header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Jewellery</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <style>
        body {
            color: #999;
            background: #fafafa;
            font-family: 'Roboto', sans-serif;
        }
        .form-control {
            min-height: 41px;
            box-shadow: none;
            border-color: #e6e6e6;
        }
        .form-control:focus {
            border-color: #00c1c0;
        }
        .form-control, .btn {        
            border-radius: 3px;
        }
        .signup-form {
            width: 550px;
            margin: 0 auto;
            padding: 30px 0;
            padding-top:550px;
        }
        .signup-form h2 {
            color: #333;
            font-weight: bold;
            margin: 0 0 25px;
              text-align: center;
        }
        .signup-form h5 {
            color: black;
        }
        .signup-form form {
            margin-bottom: 15px;
            background: #fff;
            border: 1px solid #f4f4f4;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 40px 100px;
        }
        .signup-form .form-group {
            margin-bottom: 20px;
        }
        .signup-form label {
            font-weight: normal;
            font-size: 14px;
        }
        .signup-form input[type="checkbox"] {
            position: relative;
            top: 1px;
        }    
        .signup-form .btn, .signup-form .btn:active {        
            font-size: 16px;
            font-weight: bold;
            background: #00c1c0 !important;
            border: none;
            min-width: 140px;
        }
        .signup-form .btn:hover, .signup-form .btn:focus {
            background: #00b3b3 !important;
         }
        .signup-form a {
            color: #00c1c0;
            text-decoration: none;
         }	
        .signup-form a:hover {
            text-decoration: underline;
         }
        .form-group{
            text-align: center;
         }
        .tex{
            text-align: center;
         }
         .ter{
            padding-bottom:40px;
         }
         .bot{
            padding: 8px 80px;
         }
        </style>
    </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     <a href="news.html">News</a>
                     <a href="men.html">Men</a>
                     <a href="women.html">Women</a>
                     <a href="#">About</a>
                     <a href="contact.html">Contact</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                           <li><a href="#">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Login</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- jewellery  section start -->
      <div class="container">
    <div class="row">
        <h1>Contact Us!</h1>
        <form class="row g-3" action="" method="POST">
          <!-- Honeypot -->
          <input type="text" name="_honey" style="display: none;">

          <!-- Disable Captcha -->
          <input type="hidden" name="_captcha" value="false">

          <input type="hidden" name="_next" value="success.html" >

          <div class="col-xs-6 col-md-4">
            <label for="firstName" class="form-label">First Name</label>
            <input type="firstname" class="form-control" name="firstname" id="firstName" required>
          </div>
          <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="lastname" class="form-control" name="lastname" id="lastName" required>
          </div>
          <div class="col-md-8">
            <label for="emailInfo" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="emailInfo" required>
          </div>
          <div class="col-md-4">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="phone number" pattern="[0-9]{3}-[0-9]{2}[0-9]{5}">
          </div>
          <div class="col-md-12">
            <label for="comments" class="form-label">Comments, questions?</label>
            <textarea class="form-control" id="comments" name="comments,&nbsp;questions" rows="3" required cols="50" minlength="3" maxlength="30"></textarea>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- jewellery  section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="news.html">News</a></li>
                  <li><a href="men.html">Men</a></li>
                  <li><a href="women.html">Women</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">(+060) 120 2200</a></div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>