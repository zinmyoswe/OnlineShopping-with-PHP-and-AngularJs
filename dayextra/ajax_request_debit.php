
  
  <style type="text/css">
    .error{
      color: #DC3545;
      font-size: 13px;

    }
  </style>


<!--  ==================login form ======================== -->
<?php 
	
	session_start();
        include('confs/config.php');
        $email = $_SESSION['email'];
        $shipping = $_SESSION['shipping'];
        $result = mysqli_query($mysqli,"SELECT * FROM shipping where shipping_id='$shipping'");
        $row = mysqli_fetch_assoc($result);


	if(isset($_POST['country_id']) && $_POST['country_id'] !='')
	{ ?>
                
                <div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
         <div class="panel-body">
          <h3>Pay with Debit Card</h3>
         <form method="post" action="order-update2.php" enctype="multipart/form-data" id="debit-form">

            <label for="lastName">Name on Card</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="" value="<?php echo $row['full_name'] ?>" required>
            <div class="invalid-feedback">
            Valid last name is required.
            </div> 

              <label for="lastName">Card Number</label>
            <input type="text" name="card" class="form-control" id="card" placeholder="" value="" required>
            <div class="invalid-feedback">
            Valid last name is required.
            </div> 

                          

                          <div class="row">
         <div class="col-md-6 mb-3">
               <label for="lastName">Security Code</label>
            <input type="text" name="sc" class="form-control" id="sc" placeholder="" value="" required>
            <div class="invalid-feedback">
            Valid last name is required.
            </div> 

                
              </div>

       
           
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Pay With" id="btn-debit">
          </form>
                        
            
                      


                        
      </div> <!-- panel-body -->
    </div><!--  col-md-6 end -->
    <div class="col-md-6 col-sm-6 col-xs-6"></div><!--  col-md-6 end -->
  </div> <!-- row end -->
</div><!--  container end -->
		
	  
                        <br><br>
                        
		
<?php	}

?>





