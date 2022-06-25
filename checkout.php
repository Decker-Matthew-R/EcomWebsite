
    
<!-- builds the checkout menu -->
   
   
    <?php 

    $active='Account';
    include("includes/header.php");

?>
   <!-- prompts user to login or register -->
   <div id="content">
       <div class="container">
           <div class="col-md-12">
               
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
   
   <!-- includes side bar -->
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div>
           
           <div class="col-md-9">
           
           <?php 
           
           if(!isset($_SESSION['customer_email'])){
               
               include("customer/customer_login.php");
               
           }else{
               
               include("payment_options.php");
               
           }
           
           ?>
           
           </div>
           
       </div>
   </div>
   
   
   <!-- includes footer -->
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>