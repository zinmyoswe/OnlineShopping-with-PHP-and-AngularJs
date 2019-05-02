
<?php
   include('../confs/config.php');
     $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product where id = $id");
   $row = mysqli_fetch_assoc($result);
?>
 <?php include('header.php'); ?>
 <div class="container">
            <div class="row">
             <div class="col-md-6">
                   
                <div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Discount</strong> 
                    </div>
                    <div class="panel-body">
                        <form method="post" action="" enctype="multipart/form-data">

                          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                         ProductID :  PRO_<?php echo $row['id'] ?><br>

                        <label>Product Name : </label>
                        <?php echo $row['product_name'] ?><br>

                         <label>Price : </label>
                        US$<?php echo $row['price'] ?><br>

                         <label>Brand : </label>
                         <?php 
                         	$result = mysqli_query($mysqli,"SELECT product.*,brand.brand_name,brand.brand_id FROM product LEFT JOIN brand
                         		ON brand.brand_id = product.brand
                         		WHERE product.id = $id");
                         	$row2 = mysqli_fetch_assoc($result)
                         ?>
                         <?php echo $row2['brand_name'] ?><br>

                         <label>Categories : </label>
                         <?php 
                         	$result = mysqli_query($mysqli,"SELECT product.*,cat.cat_name,cat.cat_id FROM product LEFT JOIN categories cat
                         		ON cat.cat_id = product.categories
                         		WHERE product.id = $id");
                         	$row3 = mysqli_fetch_assoc($result)
                         ?>
                         <?php echo $row3['cat_name'] ?><br>


                        

                            <div class="row">
                <div class="col-xs-4">
                <label>From : </label>
                  <input type="text" class="form-control" name="str_date" id="dob"  data-provide="datepicker" placeholder="dd/mm/yy" required/>
                </div>
                <div class="col-xs-4">
                <label>To : </label>
                  <input type="text" class="form-control" name="end_date" id="dob"  data-provide="datepicker" placeholder="dd/mm/yy" required/>
                </div>
                <div class="col-xs-4">
                <label>Reduce Percentage  : </label>
                    <input type="text" class="form-control" name="percentage" id="dob" required/>
                </div>
                </div><!--  row end -->

                        
              

                        
                      
              <hr />
                        
                      <input type="submit" name="submit" value="Save" class="btn btn-warning btn-lg btn-block login-button">
          </form>
          
                    </div>
                    <div class="panel-footer text-muted">
                        <strong>Note : </strong>Please note that we track all messages so don't send any spams.
                    </div>
                </div>
                     </div>
                </div><!-- end form-->

                </div>
          </div> <!-- end container -->

          
                 
   <?php include('footer.php'); ?>


   <?php

    if(isset($_POST['submit'])){

      $id = $_POST['id'];
      $str_date = $_POST['str_date'];
      $end_date = $_POST['end_date'];
      $percentage = $_POST['percentage'];
 
      
    
      $sql = "INSERT INTO discount(product_id,percentage,created_date,duration,end_date)
                   VALUES('$id','$percentage','$str_date','','$end_date')";

      $run=mysqli_query($mysqli,$sql);
      
      if($run){

        echo "<script>alert('Discount has been inserted')</script>";
        echo "<script>window.open('product_display2.php','_self')</script>";
      }
      else{
        echo "error";
      }

    
    }
?>


