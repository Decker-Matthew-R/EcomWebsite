<div id="footer"><!-- Create footer for the bottom of the customer facing page -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Site Directory</h4>
                
                <ul><!-- ul Start -->
                    <li><a href="../cart.php">Shopping Cart</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="my_account.php">My Account</a></li>
                </ul><!-- ul End -->
                
                <hr>
                
                <h4>Customer Area</h4>
                
                <ul><!-- This alters what is shown in the footer based on the customer being logged in using if state -->
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../checkout.php'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?my_orders'>My Account</a>"; 
                               
                           }
                           
                           ?>
                    
                    <li>
                    
                            <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../checkout.php'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?edit_account'>Edit Account</a>"; 
                               
                           }
                           
                           ?>
                    
                    </li>
                </ul><!-- Should link footer dynamically to user infor -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 End -->
            
            <div class="com-sm-6 col-md-3"><!-- Start col-sm-6 col-md-3  -->
                
                <h4>Top Products Categories</h4>
                
                <ul><!-- Established product catagories from DB pull -->
                
                    <?php 
                    
                        $get_p_cats = "select * from product_categories";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='../shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                
                </ul><!-- End db pull-->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 End -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Start -->
                 
                <p><!-- Website contact information -->
                    
                   <strong>Green Bay Packers Proshop</strong>
                    <br/>Green Bay
                    <br/>Wisconsin
                    <br/>500-650-0000
                    
                </p><!-- contact info end -->
                
                <a href="../contact.php">Dont Hesitate to Contact Us</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- End col-sm-6 col-md-3 -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Get The News</h4>
                
                <p class="text-muted">
                    Get Our Newsletter.
                </p>
                
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- Feedburner Email Notification. Not functional as I do not want to put email in -->
                    <div class="input-group">
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="hidden" value="Packers Proshop" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="Subscribe" class="btn btn-default">
                            
                        </span>
                        
                    </div>
                </form>
                
                <hr>
                
                <!--Add social media icons. Link dead -->
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="../#" class="fa fa-facebook"></a>
                    <a href="../#" class="fa fa-twitter"></a>
                    <a href="../#" class="fa fa-instagram"></a>
                    <a href="../#" class="fa fa-google-plus"></a>
                    <a href="../#" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div>
    </div>
</div>


