<!-- this page would normally contain payment information. Enter credit card etc. However I did not want to include this as this website is obviously not shipping product -->
  

  <div class="box">
   
   <?php 
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customers where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    
    ?>
    
    <h1 class="text-center">Payment Options For You</h1>  
    
     <p class="lead text-center">
         
         <a href="order.php?c_id=<?php echo $customer_id ?>"> Test Payment to Clear Cart </a>
         
     </p>
     
     <center>
         
        <p class="lead">
            
            <a href="#">
                
                Credit Card Payment
                
                <img class="img-responsive" src="images/paymentlogo.jpg" alt="img-paypall">
                
            </a>
            
        </p> 
         
     </center>
    
</div>