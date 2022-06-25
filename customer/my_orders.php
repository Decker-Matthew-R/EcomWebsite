
   <!-- builds the order page -->

   <center>
   
   <!-- builds the header of the page -->
    
    <h1> My Orders </h1>
    
    <p class="lead"> View Your Order History</p>
    
    <p class="text-muted">
        
        Please reach out if you have any concerns regarding your order. <a href="../contact.php">Contact Us</a>. We are here for you.
        
    </p>
    
</center>


<hr>


<div class="table-responsive">
    
    <table class="table table-bordered table-hover">
        
        <!-- builds the table that will display order information -->
        
        <thead>->
            
            <tr>
                
                <th> Order Number: </th>
                <th> Order Total: </th>
                <th> Invoice No: </th>
                <th> Qty: </th>
                <th> Size: </th>
                <th> Order Date:</th>
                <th> Order Status: </th>
                <th> Status: </th>
                
            </tr>
            
        </thead>
        
        <tbody>
          
          <!-- pulls order information from the DB -->
           
           <?php 
            
            $customer_session = $_SESSION['customer_email'];
            
            $get_customer = "select * from customers where customer_email='$customer_session'";
            
            $run_customer = mysqli_query($con,$get_customer);
            
            $row_customer = mysqli_fetch_array($run_customer);
            
            $customer_id = $row_customer['customer_id'];
            
            $get_orders = "select * from customer_orders where customer_id='$customer_id'";
            
            $run_orders = mysqli_query($con,$get_orders);
            
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_orders['order_id'];
                
                $due_amount = $row_orders['due_amount'];
                
                $invoice_no = $row_orders['invoice_no'];
                
                $qty = $row_orders['qty'];
                
                $size = $row_orders['size'];
                
                $order_date = substr($row_orders['order_date'],0,11);
                
                $order_status = $row_orders['order_status'];
                
                $i++;
                
                if($order_status=='pending'){
                    
                    $order_status = 'Processing';
                    
                }else{
                    
                    $order_status = 'Paid';
                    
                }
            
            ?>
            
            <tr>
                
                <th> <?php echo $i; ?> </th>
                <td> $<?php echo $due_amount; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $qty; ?> </td>
                <td> <?php echo $size; ?> </td>
                <td> <?php echo $order_date; ?> </td>
                <td> <?php echo $order_status; ?> </td>
                
                <td>
                    
                    <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm"> Shipping Details </a>
                    
                </td>
                
            </tr>
            
            <?php } ?>
            
        </tbody>
        
    </table>
    
</div>