
   <!-- builds footer for customers not logged in -->

   <div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
               
               <h4>Site Directory</h4>
                
                
                <!-- builds list of catagories -->
                
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul>
                
                <hr>
                
                <h4>User Section</h4>
                
                
                <!--establishes if statement to dynamically adjust footer if customer is logged in -->
                <ul>
  
                           <?php
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>Login</a>";
                               
                           }else{
                            
                               echo"<a href='customer/my_account.php?my_orders'>My Account</a>";
                               
                           }
                           
                           ?>
                           
                    <li><a href="customer_register.php">Register</a></li>
                </ul>
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div>
            
            <div class="com-sm-6 col-md-3">
                
                <h4>Top Products Categories</h4>
                
                
                <!-- pull product catogires from DB -->
                <ul>
                
                    <?php 
                    
                        $get_p_cats = "select * from product_categories";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                
                </ul>
                
                <hr class="hidden-md hidden-lg">
                
            </div>
            
            <div class="col-sm-6 col-md-3">
                
                <!-- update contact information -->
                <p>
                    
                    <strong>Green Bay Packers Proshop</strong>
                    <br/>Green Bay
                    <br/>Wisconsin
                    <br/>500-650-0000
                    
                    
                </p>
                
                <a href="contact.php">Dont Hesitate to Contact Us</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div>
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Stay Up to Date</h4>
                
                <p class="text-muted">
                    Get Our Newsletter
                </p>
                
                <form action="insert subscription software through XAMPP">
                   
                    <div class="input-group">
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="hidden" value="M-devMedia" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                        
                        <span class="input-group-btn">
                            
                            <input type="submit" value="Subscribe" class="btn btn-default">
                            
                        </span>
                        
                    </div>
                </form>
                
                <hr>
                
                <!-- insert social media icons. No social media connections at this time -->
                <h4>Follow Us</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div>
    </div>
</div>
