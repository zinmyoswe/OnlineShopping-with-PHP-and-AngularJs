<?php 
	  session_start();
          include('confs/config.php');
	
	if(isset($_POST['country_id']) && $_POST['country_id'] !='')
	{ ?>
		 <h3>Contact Information</h3>
	    				<div class="panel-body">
                        <form method="post" action="shipping_to_store.php" enctype="multipart/form-data">

                            <label for="lastName">Full Name</label>
                        <input type="text" name="name" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                        Valid last name is required.
                        </div>

                         <label for="lastName">Email</label>
                        <input type="email" name="email" class="form-control" id="lastName" placeholder="" value="<?php echo $_SESSION['email'] ?>" required>
                        <div class="invalid-feedback">
                        Valid last name is required.
                        </div>


                                <div class="row">
              <div class="col-md-6 mb-3">
                <label for="country">Phone</label>
                <input type="text" name="phone" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                        Valid last name is required.
                        </div>
                  
               
              </div>
              <div class="col-md-6 mb-3">
                <label for="state">Store</label>
                <select name="store_id" class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                    
                                               <?php

                                                $sql = "SELECT * FROM store";
                                                $run = mysqli_query($mysqli,$sql);
                                                while($row= mysqli_fetch_array($run)){
                                                  $store_id = $row['store_id'];
                                                  $store_name = $row['store_name'];

                                                  echo "
                                                    <option value='$store_id'>$store_name</option>
                                                  ";
                                                }
                                                ?>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
           
            </div>
                     
                        <br>

                        <a href="" class="btn btn-outline-primary">Back</a>
                        <input type="submit" name="submit" value="Save Contact" class="btn btn-primary pull-right">


                        

                        </form>
                        </div> <!-- panel-body -->
		
<?php	}

?>