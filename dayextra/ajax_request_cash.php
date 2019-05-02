
<?php 
	
	session_start();
        include('confs/config.php');
        $email = $_SESSION['email'];
        $shipping = $_SESSION['shipping'];
        $result = mysqli_query($mysqli,"SELECT * FROM shipping where shipping_id='$shipping'");
        $row = mysqli_fetch_assoc($result);


	if(isset($_POST['country_id']) && $_POST['country_id'] !='')
	{ ?>
                
		 <h3>Pay with Cash</h3>
	    				<div class="panel-body">
                        
                        
                    
                  <div class="notice notice-warning">
        <strong><p>Dear <?php echo $row['full_name'] ?>,</p></strong> 
        <p>it is need to pay <a href="">within 2 day</a> to near CAPITALA Fashion Store after making order.
      If cash is not received by store specified day, <a href="">the order will auto cancel.</a></p>
    </div>
      
                      


                        <br>

                       
                        

                        <a href="order-update.php" class="btn btn-info pull-right" style="margin-left: 4px">Place In Order</a>
                        <a href="shipping_info.php" class="btn btn-outline-info pull-right">Back</a>
                        
                        </div> <!-- panel-body -->
                        <br><br>
                        
		
<?php	}

?>





