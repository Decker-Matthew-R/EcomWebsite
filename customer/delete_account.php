<!-- Delete customer account information from the DB -->
   

   <center>
    
    <h1> Are you sure you wish to delete your account? This will delete your order history. </h1>
    
    <form action="" method="post">
        
       <input type="submit" name="Yes" value="DELETE" class="btn btn-danger"> 
        
       <input type="submit" name="No" value="DO NOT DELETE" class="btn btn-primary"> 
        
    </form>
    
</center>


<!-- pushes delete to the database. Provides message upon deletion of account. If they do not delete, return to orders -->

<?php 

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Yes'])){
    
    $delete_customer = "delete from customers where customer_email='$c_email'";
    
    $run_delete_customer = mysqli_query($con,$delete_customer);
    
    if($run_delete_customer){
        
        session_destroy();
        
        echo "<script>alert('Your account has been delete. You will need to register a new account if you would like to shop again.')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";
        
    }
    
}

if(isset($_POST['No'])){
    
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    
}

?>