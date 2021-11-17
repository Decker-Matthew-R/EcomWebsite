<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce Website</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
   <div id="top"><!-- Top Start -->
       
       <div class="container"><!-- container Start -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Start -->
               
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">Your Cart Is Empty | $0.00 </a>
               
           </div><!-- col-md-6 offer End -->
           
           <div class="col-md-6"><!-- col-md-6 Start -->
               
               <ul class="menu"><!-- cmenu Start -->
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="checkout.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="checkout.php">Login</a>
                   </li>
                   
               </ul><!-- menu End -->
               
           </div><!-- col-md-6 End -->
           
       </div><!-- container End -->
       
   </div><!-- Top End -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Start -->
       
       <div class="container"><!-- container Start -->
           
           <div class="navbar-header"><!-- navbar-header Start -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Start -->
                   
                   <img src="images/greenbay-packers-logo-resized.jpg" alt="Packers-ProShop-Logo" class="hidden-xs">
                   <img src="images/greenbay-packers-logo-resized.jpg" alt="Packers-ProShop-Logoe" class="visible-xs">
                   
               </a><!-- navbar-brand home End -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header End -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Start -->
               
               <div class="padding-nav"><!-- padding-nav Start -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Start -->
                       
                       <li class="active">
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="checkout.php">My Account</a>
                       </li>
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left End -->
                   
               </div><!-- padding-nav End -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Start -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>0 Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary End -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Start -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Start -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn End -->
                   
               </div><!-- navbar-collapse collapse right End -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Ebd -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Start -->
                       
                       <div class="input-group"><!-- input-group Start -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Start -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Start -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary End -->
                           
                           </span><!-- input-group-btn End -->
                           
                       </div><!-- input-group End -->
                       
                   </form><!-- navbar-form End -->
                   
               </div><!-- collapse clearfix End -->
               
           </div><!-- navbar-collapse collapse End -->
           
       </div><!-- container End -->
       
   </div><!-- navbar navbar-default End -->
   
   <div class="container" id="slider"><!-- container Start -->
       
       <div class="col-md-12"><!-- col-md-12 Start -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Start -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Start -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators End -->
               
               <div class="carousel-inner"><!-- carousel-inner Start -->
                   
                   <div class="item active">
                       
                       <img src="admin_area/slides_images/carousel1.jpg" alt="Slider Image 1">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/carousel2.jpg" alt="Slider Image 2">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/carausel3.jpg" alt="Slider Image 3">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/carousel4.jpg" alt="Slider Image 4">
                       
                   </div>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Start -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control End -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Start -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control End -->
               
           </div><!-- carousel slide End -->
           
       </div><!-- col-md-12 End -->
       
   </div><!-- container End -->
   
   <div id="advantages"><!-- #advantages Start -->
       
       <div class="container"><!-- container Start -->
           
           <div class="same-height-row"><!-- same-height-row Start -->
               
               <div class="col-sm-4"><!-- col-sm-4 Start -->
                   
                   <div class="box same-height"><!-- box same-height Start -->
                       
                       <div class="icon"><!-- icon Start -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon End -->
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>Check Out Our Best Offers Today</p>
                       
                   </div><!-- box same-height End -->
                   
               </div><!-- col-sm-4 End -->
               
               <div class="col-sm-4"><!-- col-sm-4 End -->
                   
                   <div class="box same-height"><!-- box same-height End -->
                       
                       <div class="icon"><!-- icon End -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon End -->
                       
                       <h3><a href="#">Best Prices</a></h3>
                       
                       <p>Check Out Our Low Prices</p>
                       
                   </div><!-- box same-height End -->
                   
               </div><!-- col-sm-4 End -->
               
               <div class="col-sm-4"><!-- col-sm-4 Start -->
                   
                   <div class="box same-height"><!-- box same-height End -->
                       
                       <div class="icon"><!-- icon Start -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div><!-- icon End -->
                       
                       <h3><a href="#">100% Original</a></h3>
                       
                       <p>All The Gear Seen On The Sidelines</p>
                       
                   </div><!-- box same-height End -->
                   
               </div><!-- col-sm-4 End -->
               
           </div><!-- same-height-row End -->
           
       </div><!-- container End -->
       
   </div><!-- #advantages End -->
   
   <div id="hot"><!-- #hot End -->
       
       <div class="box"><!-- box Start -->
           
           <div class="container"><!-- container Start -->
               
               <div class="col-md-12"><!-- col-md-12 Start -->
                   
                   <h2>
                       Check Out Our Latest Products
                   </h2>
                   
               </div><!-- col-md-12 End -->
               
           </div><!-- container End -->
           
       </div><!-- box End -->
       
   </div><!-- #hot End -->
   
   <div id="content" class="container"><!-- container Start -->
       
       <div class="row"><!-- row Start -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Start -->
               
               <div class="product"><!-- product Start -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Start -->
                       
                       <h3>
                           <a href="details.php">
                               Packers Flat Billed Hat
                           </a>
                       </h3>
                       
                       <p class="price">$35</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">Product Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text End -->
                   
               </div><!-- product End -->
               
           </div><!-- col-sm-4 col-sm-6 single End -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Start -->
               
               <div class="product"><!-- product Start -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/product2.jpg" alt="Product 2">
                       
                   </a>
                   
                   <div class="text"><!-- text Start -->
                       
                       <h3>
                           <a href="details.php">
                               Packers Dog Jersey
                           </a>
                       </h3>
                       
                       <p class="price">$150</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">Product Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text End -->
                   
               </div><!-- product End -->
               
           </div><!-- col-sm-4 col-sm-6 single End -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Start -->
               
               <div class="product"><!-- product Start -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/product3.jpg" alt="Product 3">
                       
                   </a>
                   
                   <div class="text"><!-- text End -->
                       
                       <h3>
                           <a href="details.php">
                               Packer's Womens T-Shirt
                           </a>
                       </h3>
                       
                       <p class="price">$30</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">Product Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text End -->
                   
               </div><!-- product End -->
               
           </div><!-- col-sm-4 col-sm-6 single End -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single End -->
               
               <div class="product"><!-- product Start -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/product4.jpg" alt="Product 4">
                       
                   </a>
                   
                   <div class="text"><!-- text Start -->
                       
                       <h3>
                           <a href="details.php">
                               Packers Male T-Shirt
                           </a>
                       </h3>
                       
                       <p class="price">$25</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">Product Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text End -->
                   
               </div><!-- product End -->
               
           </div><!-- col-sm-4 col-sm-6 single End -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Start -->
               
               <div class="product"><!-- product Start -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/product5.jpg" alt="Product 5">
                       
                   </a>
                   
                   <div class="text"><!-- text Start -->
                       
                       <h3>
                           <a href="details.php">
                               Packers Male Hoodie
                           </a>
                       </h3>
                       
                       <p class="price">$55</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">Product Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text End -->
                   
               </div><!-- product End -->
               
           </div><!-- col-sm-4 col-sm-6 single End -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Start -->
               
               <div class="product"><!-- product Start -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/product6.jpg" alt="Product 6">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">
                              Packers Womens Hoodie
                           </a>
                       </h3>
                       
                       <p class="price">$55</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">Product Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text End -->
                   
               </div><!-- product End -->
               
           </div><!-- col-sm-4 col-sm-6 single End -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Start -->
               
               <div class="product"><!-- product Start -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/product8.jpg" alt="Product 8">
                       
                   </a>
                   
                   <div class="text"><!-- text Start -->
                       
                       <h3>
                           <a href="details.php">
                               Packers Male Jersey
                           </a>
                       </h3>
                       
                       <p class="price">$99</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">Product Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text End -->
                   
               </div><!-- product End -->
               
           </div><!-- col-sm-4 col-sm-6 single End -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Start -->
               
               <div class="product"><!-- product Start -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/product7.jpg" alt="Product 7">
                       
                   </a>
                   
                   <div class="text"><!-- text Start -->
                       
                       <h3>
                           <a href="details.php">
                               Packer's Women's Jersey
                           </a>
                       </h3>
                       
                       <p class="price">$99</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">Product Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text End -->
                   
               </div><!-- product End -->
               
           </div><!-- col-sm-4 col-sm-6 single End -->
           
       </div><!-- row End -->
       
   </div><!-- container End -->
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>