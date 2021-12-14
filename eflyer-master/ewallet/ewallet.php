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
      <title>Eflyer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="../css/owl.carousel.min.css">
      <link rel="stylesoeet" href="../css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel = "stylesheet" href = "script/alertify.core.css" />
      <link rel = "stylesheet" href = "script/alertify.default.css" id = "toggleCSS" />
      <script src = "script/alertify.min.js"></script>
      
      <style>
         .star-icon {
            color: #ffe400;
            font-size: 20px;
            font-family: sans-serif;
            font-weight: 800;
            text-align: center;
            text-transform: uppercase;
            padding: 20px 0;
            }
            .rating-css label {
            font-size: 30px;
            text-shadow: 1px 1px 0 #ffe400;
            cursor: pointer;
            }

            .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
            }
      </style>
   </head>
   <body>
      <?php
if(isset($_POST['subittop'])) {
   $date_today=date('d-m-Y');
	$wallet = simplexml_load_file('ewallet.xml');
	$product = $wallet->addChild('wallet');
	$product->addChild('amount', $_POST['tp']);
   $product->addChild('date', $date_today);
   $product->addChild('description', "Top Up");
	file_put_contents('ewallet.xml', $wallet->asXML()); 
   echo "<script>alertify.success('Success Top Up');</script>";
	//header('location:ewallet.php');
  
}
?>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="../images/logo.png"></a></div>
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
                     <a href="#">Contact</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="../images/toggle-icon.png"></span>
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
                              <h1 class="banner_taital">Welcome To See It <br>Free Shopping</h1>
                              <div class="buynow_bt"><a href="#">SHOP NOW</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">News <br>Product</h1>
                              <div class="buynow_bt"><a href="news.html">SHOP NOW</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Men <br>Product</h1>
                              <div class="buynow_bt"><a href="men.html">SHOP NOW</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Women <br>Product</h1>
                              <div class="buynow_bt"><a href="women.html">SHOP NOW</a></div>
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
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">E-Wallet</li>
      </ol>
      </nav>
      <div class="row">
      
         <div class="col-sm-12" style="margin-left:20px">
      <h1>Balance: RM  <?php 
$ewll = simplexml_load_file('ewallet.xml');$a=array();
foreach($ewll as $wallet1){

   
   array_push($a,(float)$wallet1->amount);
 
   //print $a;

}  
echo number_format(array_sum($a),2);
?></h1>

      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Top Up
</button>
<br><br>
<hr>
<h1>History</h1>
      <table class="table table-responsive table-striped" width="100%">
      <tr> <td>
         No.
      </td><td>Amount</td><td>Date</td><td>Description</td></tr>
<?php 
$ewll = simplexml_load_file('ewallet.xml');
//echo count($ewll);
$NO=1;
if(!count($ewll)){
echo "<tr> <td colspan='4'><div class='alert alert-secondary' role='alert'>No Record Found.</div></td></tr>";

}else{
   foreach($ewll as $wallet1){
   echo "<tr> <td>".$NO."</td><td>RM ".$wallet1->amount."</td><td>".$wallet1->date."</td><td>".$wallet1->description."</td></tr>";
   $NO++;
   }
}

?>

      </table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Up E-wallet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
            <input type="number" class="form-control" placeholder="Amount (RM)" name="tp" step="0.01">
            <br>
            <button class="btn btn-primary" name="subittop">Top Up</button> 
         </form>
      </div>
      <div class="modal-footer">
   
      </div>
    </div>
  </div>
</div>


         </div>
         </div>


           <!-- footer section start -->
           <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="../images/footer-logo.png"></a></div>
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
      <!-- footer section end -->
      <!-- Javascript files-->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="../js/jquery-3.0.0.min.js"></script>
      <script src="../js/plugin.js"></script>
      <!-- sidebar -->
      <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../js/custom.js"></script>
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