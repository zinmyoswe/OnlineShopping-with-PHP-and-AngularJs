
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
          <h3>Pay with Credit Card</h3>
         <form method="post" action="order-update3.php" enctype="multipart/form-data">

            <label for="lastName">Name on Card</label>
            <input type="text" name="name" class="form-control" id="lastName" placeholder="" value="<?php echo $row['full_name'] ?>" required>
            <div class="invalid-feedback">
            Valid last name is required.
            </div> 

              <label for="lastName">Card Number</label>
            <input type="text" name="card" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
            Valid last name is required.
            </div> 

                          <div class="row">
         <div class="col-md-6 mb-3">
                <label for="month">Month</label>
                <select name="month" class="custom-select d-block w-100" id="month" required>
                  <option value="">Choose...</option>
                            <option>Janurary</option>
                            <option>Feburary</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="state">Year</label>
                <select name="year" class="custom-select d-block w-100" id="year" required>
                  <option value="">Choose...</option>
                  <option >2018</option>
                  <option >2019</option>
                  <option >2020</option>
                  <option >2021</option>
                  <option >2022</option>
                  <option >2023</option>
                  <option >2024</option>
                  <option >2025</option>
                  <option >2026</option>
                  <option >2027</option>
                  <option >2028</option>
                  <option >2029</option>
                  <option >2030</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
           
            </div>

                          <div class="row">
         <div class="col-md-6 mb-3">
               <label for="lastName">Security Code</label>
            <input type="text" name="sc" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
            Valid last name is required.
            </div> 

                
              </div>

       
           
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Pay With">
          </form>
                        
            
                      


                        
      </div> <!-- panel-body -->
    </div><!--  col-md-6 end -->
    <div class="col-md-6 col-sm-6 col-xs-6"></div><!--  col-md-6 end -->
  </div> <!-- row end -->
</div><!--  container end -->
		
	  
                        <br><br>
                        
		
<?php	}

?>





