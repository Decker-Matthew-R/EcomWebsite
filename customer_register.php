
    <!-- builds customer register page -->

    <!-- adds header and dynamically links account -->

    <?php 

    $active='Account';
    include("includes/header.php");

?>
   
   <div id="content">
       <div class="container">
           <div class="col-md-12">
               <!-- bread crumb naviation -->
               <ul class="breadcrumb">
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Register
                   </li>
               </ul>
               
           </div>
           
           <div class="col-md-3">
   
   <!-- includes sidebar -->
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
            
               <!-- builds registration menu. Will ask Name, email, password, address -->   
           </div>
           
           <div class="col-md-9">
               
               <div class="box">
                   
                   <div class="box-header">
                       
                       <center>
                           
                           <h2> Register Account </h2>
                           
                       </center>
                       
                       <form action="customer_register.php" method="post" enctype="multipart/form-data">
                           
                           <div class="form-group">
                               
                               <label>First and Last Name</label>
                               
                               <input type="text" class="form-control" name="c_name" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="c_email" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Create a Password</label>
                               
                               <input type="password" class="form-control" name="c_pass" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Address</label>
                               
                               <input type="text" class="form-control" name="c_country" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>City</label>
                               
                               <input type="text" class="form-control" name="c_city" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>State</label>
                               
                               <input type="text" class="form-control" name="c_contact" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Phone Number</label>
                               
                               <input type="text" class="form-control" name="c_address" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Your Profile Picture</label>
                               
                               <input type="file" class="form-control form-height-custom" name="c_image" required>
                               
                           </div>
                           
                           <!-- builds register button -->
                           <div class="text-center">
                               
                               <button type="submit" name="register" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Register
                               
                               </button>
                               
                           </div>
                           
                       </form>
                       
                   </div>
                   
               </div>
               
           </div>
           
       </div>
   </div>
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>

<!-- pushes information to DB -->
<?php 

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// Items in Cart ///
        /// Response to successful registation ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('Congratulations, You are Regidstered')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// No items in cart ///
        /// successful response ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('Congratulations, You are Registered')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>