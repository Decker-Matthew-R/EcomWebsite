<!-- This page builds the contact menu -->
  <!-- add header -->
   <?php 
    
    $active='Contact';
    include("includes/header.php");

?>
  <!-- establish breadcrumb for navigation -->
   <div id="content">
       <div class="container">
           <div class="col-md-12">
               
               <ul class="breadcrumb">
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Contact Us
                   </li>
               </ul>
               
           </div>
           
           <div class="col-md-3">
   
   
   <!-- includes sidebar -->
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div>
           
           <div class="col-md-9">
                
               <div class="box">
                   
                   <div class="box-header">
                       
                       <center>
                           
                           <h2> Feel free to Contact Us</h2>
                           
                           <p class="text-muted">
                               
                               If you have any questions, feel free to contact us. We are here to support you.
                               
                           </p>
                           
                       </center>
                       
                       <!-- builds response mechanism for contact. Will send to my email. I did not put my email in because I dont want random emails -->
                       <!-- establishes email contact group -->
                       <form action="contact.php" method="post">
                           
                           <div class="form-group">
                               
                               <label>Name</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Subject</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div>
                           
                           <div class="form-group">
                               
                               <label>Message</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div>
                           
                           <div class="text-center">
                               
                               <!-- submit button -->
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Send Message
                               
                               </button>
                               
                           </div>
                           
                       </form>
                       
                       <!-- response builder. Not currently active through XAMPP. Auto reply template. Not active -->
                       <?php 
                       
                       if(isset($_POST['submit'])){
                           
                           /// Admin receives message with this ///
                           
                           $sender_name = $_POST['name'];
                           
                           $sender_email = $_POST['email'];
                           
                           $sender_subject = $_POST['subject'];
                           
                           $sender_message = $_POST['message'];
                           
                           $receiver_email = "mdeckerr@gmail.com";
                           
                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           
                          
                           
                           $email = $_POST['email'];
                           
                           $subject = "Thank You For Reaching Out";
                           
                           $msg = "Thank you for reaching out to us. We will be in touch shortly.";
                           
                           $from = "mdeckerr@gmail.com";
                           
                           mail($email,$subject,$msg,$from);
                           
                           echo "<h2 align='center'> We have recieved your message. We will reach out to you shortly. </h2>";
                           
                       }
                       
                       ?>
                       
                   </div>
                   
               </div>
               
           </div>
           
       </div>
   </div>
   
   <!-- links footer -->
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>