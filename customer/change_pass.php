<!-- build chang password screen -->

<h1 align="center"> Change Password </h1>


<form action="" method="post">
    
    <div class="form-group">
        
        <label>Enter Old Password:</label>
        
        <input type="text" name="old_pass" class="form-control" required>
        
    </div>
    
    <div class="form-group">
        
        <label> Enter New Password: </label>
        
        <input type="text" name="new_pass" class="form-control" required>
        
    </div>
    
    <div class="form-group">
        
        <label> Confirm New Password: </label>
        
        <input type="text" name="new_pass_again" class="form-control" required>
        
    </div>
    
    <div class="text-center">
       
       <!-- build submit button for change password -->
        
        <button type="submit" name="submit" class="btn btn-primary">
            
            <i class="fa fa-user-md"></i> Update
            
        </button>
        
    </div>
    
</form>

<!-- push changes to the db and verify that the password meets conditions. Current conditions: password cannot equal nothing-->


<?php 

if(isset($_POST['submit'])){
    
    $c_email = $_SESSION['customer_email'];
    
    $c_old_pass = $_POST['old_pass'];
    
    $c_new_pass = $_POST['new_pass'];
    
    $c_new_pass_again = $_POST['new_pass_again'];
    
    $sel_c_old_pass = "select * from customers where customer_pass='$c_old_pass'";
    
    $run_c_old_pass = mysqli_query($con,$sel_c_old_pass);
    
    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);
    
    
    if($check_c_old_pass==0){
        
        echo "<script>alert('Please Try Again. Review Password Rules')</script>";
        
        exit();
        
    }
    
    if($c_new_pass!=$c_new_pass_again){
        
        echo "<script>alert('Your Passwords Did Not Match')</script>";
        
        exit();
        
    }
    
    $update_c_pass = "update customers set customer_pass='$c_new_pass' where customer_email='$c_email'";
    
    $run_c_pass = mysqli_query($con,$update_c_pass);
    
    if($run_c_pass){
        
        echo "<script>alert('Your Password has been Succesfully Changed')</script>";
        
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        
    }
    
}

?>