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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            #jewellery_main_slider a.carousel-control-prev{
               top:85%;
            }
            #jewellery_main_slider a.carousel-control-next{
               top:85%;
            }
            .inside{
               margin-top:50px;
               margin-bottom:50px;
            }
            #jewellery_main_slider .carousel-control-next, #jewellery_main_slider .carousel-control-prev{
               margin-top:150px;
            }
            @media (min-width: 768px) and (max-width: 991px){
               #jewellery_main_slider .carousel-control-next, #jewellery_main_slider .carousel-control-prev{
                  margin-top:120px;
               }
               .dropdown{
					   display:block;
			   }
            }
            @media (max-width: 575px){
               #jewellery_main_slider .carousel-control-next, #jewellery_main_slider .carousel-control-prev{
                  margin-top: 380px;
               }
               .login_menu li{
					   font-size:14pt;
			      }
			      .dropdown{
				      display:block;
			      }
               .login_menu li{
                  padding-left:0px;
               }
               .login_menu ul{
                  padding:0px;
                  margin:0px;
               }
            }

      </style>
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
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
                     <a href="#">Contact</a>
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
                         
                              <span class="padding_10">Cart <span class="badge badge-secondary">     <?php
               $products = simplexml_load_file('product.xml'); //load the files xml . 
                echo count($products); // count the number products
               // echo '<br>List Product Information';
                ?></span></span></a>
                           </li>
                           <?php

                           if(!isset($_COOKIE['user'])){?>
                           <li><a href="login.php">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Login</span></a>
                           </li>
                           <?php }else{ ?>

<<<<<<< Updated upstream
                              <li><a href="login.php">
                              <i class="fa fa-user" style="display:none;" aria-hidden="true"></i>
                              <div class="dropdown">
                                 <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="padding_10 "><?php echo $_COOKIE['user']; ?></span>
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><button class="dropdown-item" type="button">Account</button></li>
                                    <li><button class="dropdown-item" type="button">Payment</button></li>
									         <li><button class="dropdown-item" type="button">History</button></li>
                                    <li><button class="dropdown-item" type="button">Logout</button></li>
                                 </ul>
                            </div></a>
							   </li>
=======
                            <li><a href="signup.php">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10"><?php echo $_COOKIE['user']; ?></span></a>
                           </li>
>>>>>>> Stashed changes

                           <?php }
                           ?>
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
      <!-- banner bg main end -->
      <!-- fashion section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">News</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Square Toe Slide Slipper</h4>
                                 <div class="tshirt_img"><img src="images/news-1.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM30</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Washed Woven Sleep Set</h4>
                                 <div class="tshirt_img"><img src="images/news-2.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM49</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Smoothing  Bike Short</h4>
                                 <div class="tshirt_img"><img src="images/news-3.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM59</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
               $products = simplexml_load_file('product.xml'); //load the files xml . 
                echo 'Number of products: '.count($products); // count the number products
               // echo '<br>List Product Information';
                ?>
             
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">News</h1>
                     <div class="fashion_section_2">
                        <div class="row">   <?php foreach($products->news as $news) { ?>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?php echo $news->product->name; ?></h4>
                                 <div class="tshirt_img"><img src="<?php echo $news->product->path; ?>"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM<?php echo $news->product->price; ?></span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="index.php/?id=<?php echo $news['id']; ?>">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="product_details/?id=<?php echo $news['id']; ?>">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           
                             <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
          
               <!--second-section-->
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">News</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Active Tech T-Shirt</h4>
                                 <div class="tshirt_img"><img src="images/news-7.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM30</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mens Toweling Gown</h4>
                                 <div class="tshirt_img"><img src="images/news-8.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM49</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Lounge T-Shirt</h4>
                                 <div class="tshirt_img"><img src="images/news-9.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM59</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- news section end -->
      <!-- men section start -->
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Men</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Tbar Collab Music T-Shirt</h4>
                                 <div class="electronic_img"><img src="images/men-1.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM29</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="buy1_prodyct_details/?d=$row[1]">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Graphic T</h4>
                                 <div class="electronic_img"><img src="images/men-2.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM39</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Loose Fit T-Shirt</h4>
                                 <div class="electronic_img"><img src="images/men-3.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM39</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Men</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Brunswick Shirt</h4>
                                 <div class="electronic_img"><img src="images/men-4.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM69</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Slim Fit Jean</h4>
                                 <div class="electronic_img"><img src="images/men-5.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM69</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Skinny Stretch Chino</h4>
                                 <div class="electronic_img"><img src="images/men-6.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM99</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Men</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Essential Fleece Pullover</h4>
                                 <div class="electronic_img"><img src="images/men-7.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM89</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Kakao Friends Fleece Pullover</h4>
                                 <div class="electronic_img"><img src="images/men-8.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM99</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Heavy Overshirt</h4>
                                 <div class="electronic_img"><img src="images/men-9.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM99</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- men section end -->
      <!-- women  section start -->
      <div class="jewellery_section">
         <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Women</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Woven Petite Tea Dress</h4>
                                 <div class="jewellery_img"><img src="images/women-1.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM69</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Lara Shoulder Mini Dress</h4>
                                 <div class="jewellery_img"><img src="images/women-2.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM69</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Set Up Cami</h4>
                                 <div class="jewellery_img"><img src="images/women-3.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM69</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Women</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">High Neck Crew Tank</h4>
                                 <div class="jewellery_img"><img src="images/women-4.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM59</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Essential Midi Skirt</h4>
                                 <div class="jewellery_img"><img src="images/women-5.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM59</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Woven Tawni Tiered Mini Skirt</h4>
                                 <div class="jewellery_img"><img src="images/women-6.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM59</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating3" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Women</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Essential Midi Skirt</h4>
                                 <div class="jewellery_img"><img src="images/women-7.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM99</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Everyday Crop Cardi</h4>
                                 <div class="jewellery_img"><img src="images/women-8.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM99</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Cotton Cropped Pullover</h4>
                                 <div class="jewellery_img"><img src="images/women-9.jpg"></div>
                                 <p class="price_text">Price : <span style="color: #262626;">RM99</span></p>
                                 <div class="rating-css">
                                    <div class="star-icon">
                                      <label for="rating1" class="fa fa-star"></label>
                                      <label for="rating2" class="fa fa-star"></label>
                                      <label for="rating4" class="fa fa-star"></label>
                                      <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                  </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="inside">
               <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
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
      <!-- footer section end -->
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
</html>s