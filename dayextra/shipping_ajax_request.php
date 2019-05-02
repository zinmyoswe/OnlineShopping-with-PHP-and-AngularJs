
<?php 
	
	session_start();
        include('confs/config.php');
        $email = $_SESSION['email'];
	if(isset($_POST['country_id']) && $_POST['country_id'] !='')
	{ ?>
                
		 <h3>Confirm Shipping Address</h3>
	    				<div class="panel-body">
                        <form method="post" action="shipping_to_home.php" enctype="multipart/form-data">

                         <label for="lastName">Full Name</label>
                        <input type="text" name="name" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                        Valid last name is required.
                        </div>

                        <label for="lastName">Address</label>
                        <input type="text" name="street" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                        Valid last name is required.
                        </div>
                        
                      <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select name="country" class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>Myanmar</option>
                  <option>Thailand</option>
                  
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select name="state" class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>Yangon</option>
                  <option>Mandalay</option>
                  <option>Naypyitaw</option>
                  <option>Bangkok</option>
                  <option>PhueKhet</option>
                  <option>Pattaya</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" name="zip" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
            <label for="zip">City</label>
                <input type="text" name="city" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
        </div>
                <div class="col-md-6 mb-3">
                <label for="zip">Phone</label>
                <input type="text" name="phone" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
        </div>
</div>
                      


                        <br>

                        
                        <input type="submit" name="submit" value="Save Address" class="btn btn-primary pull-right" style="margin-left: 4px">
                        <a href="product.php" class="btn btn-outline-primary pull-right">Back</a>
                        

                        </form>
                        </div> <!-- panel-body -->
                        <br><br>
                        <hr>
		
<?php	}
 print_r($_SESSION['email']);
?>





