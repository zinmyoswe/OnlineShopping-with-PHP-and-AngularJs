<?php
   include('../confs/config.php');
    $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product WHERE id=$id");
   $row = mysqli_fetch_assoc($result);
?>

<?php include('header2.php'); ?>
<!-- =============================================== -->

<script src="tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <script src="jquery.tinymce.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Product
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
   <div class="col-md-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Product Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

      <?php

      if(isset($_POST['update'])){
      $id = $_POST['id'];
      $name = $_POST['name'];
      $cat = $_POST['cat'];
      $sub_cat = $_POST['sub_cat'];
      $brand = $_POST['brand'];
      $supplier = $_POST['supplier'];
      $price = $_POST['price'];
      $qty = $_POST['qty'];
      $description = $_POST['description'];
      $cover = $_FILES['cover']['name'];
      $tmp = $_FILES['cover']['tmp_name'];
     
     
      if($cover){
        move_uploaded_file($tmp, "cover/$cover");
      }
      else{
        $cover = $row['cover'];
      }
      
    
      $sql = "UPDATE product SET product_name='$name',categories='$cat',sub_cat='$sub_cat',brand='$brand',supplier='$supplier',description='$description',price='$price',cover='$cover',qty='$qty',modified_date=now() 
          WHERE id = $id ";

      mysqli_query($mysqli,$sql);

      ?>
        <script>
        alert('Successfully Updated ...');
        window.location.href='product_display2.php';
        </script>
      <?php
    }
      ?>
           
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ProductID</label>
                  <div class="col-sm-10">
                  <input type="text" name="id" value="<?php echo $row['id'] ?>" class="form-control" id="inputEmail3" disabled/> 
                  </div>
                </div>
                <!-- FORM ENDS -->
                <br>
              <!-- FORM START -->  
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">

                 <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Title</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" value="<?php echo $row['product_name'] ?>"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->


                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
                  <div class="col-sm-10">
                  <select id="cat" class="form-control" name="cat">
                     <option>Select a category</option>
                      <?php 
                      	$categories = mysqli_query($mysqli,"SELECT cat_id,cat_name FROM categories");
                      	while($cat = mysqli_fetch_assoc($categories)):
                      ?>    
                  		<option value="<?php echo $cat['cat_id'] ?>"
                  		  <?php if($cat['cat_id'] == $row['categories']) echo "selected" ?>>
                  		 <?php echo $cat['cat_name'] ?>
                  		</option> 
                      <?php endwhile; ?>        
                                          </select>  
                                           
                  </div>
                </div>
                <!-- FORM ENDS -->


                  <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SubCategory</label>
                  <div class="col-sm-10">
                  <select id="sub_cat" class="form-control" name="sub_cat">
                     <option>-- Choose --</option>
                      <?php 
                      	$subcategories = mysqli_query($mysqli,"SELECT sub_id,sub_name,category_id FROM sub_category");
                      	while($sub = mysqli_fetch_assoc($subcategories)):
                      ?>    
                  		<option value="<?php echo $sub['sub_id'] ?>"
                  		  <?php if($sub['sub_id'] == $row['sub_cat']) echo "selected" ?>>
                  		 <?php echo $sub['sub_name'] ?>
                  		</option> 
                      <?php endwhile; ?>        
                                          </select>  
                                           
                  </div>
                </div>
                <!-- FORM ENDS -->

                  <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Brand</label>
                  <div class="col-sm-10">
                  <select id="brand" class="form-control" name="brand">
                     <option>Select a Brand</option>
                      <?php 
                      	$brand = mysqli_query($mysqli,"SELECT brand_id,brand_name FROM brand");
                      	while($br = mysqli_fetch_assoc($brand)):
                      ?>    
                  		<option value="<?php echo $br['brand_id'] ?>"
                  		  <?php if($br['brand_id'] == $row['brand']) echo "selected" ?>>
                  		 <?php echo $br['brand_name'] ?>
                  		</option> 
                      <?php endwhile; ?>        
                                          </select>  
                                           
                  </div>
                </div>
                <!-- FORM ENDS -->

                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Supplier</label>
                  <div class="col-sm-10">
                  <select id="supplier" class="form-control" name="supplier">
                     <option>Select a Supplier</option>
                      <?php 
                      	$supplier = mysqli_query($mysqli,"SELECT supplier_id,supplier_name FROM supplier");
                      	while($sup = mysqli_fetch_assoc($supplier)):
                      ?>    
                  		<option value="<?php echo $sup['supplier_id'] ?>"
                  		  <?php if($sup['supplier_id'] == $row['supplier']) echo "selected" ?>>
                  		 <?php echo $sup['supplier_name'] ?>
                  		</option> 
                      <?php endwhile; ?>        
                                          </select>  
                                           
                  </div>
                </div>
                <!-- FORM ENDS -->
                  
                         <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
                  <div class="col-sm-10">
                  <input type="text" name="price"  class="form-control" id="inputEmail3" value="<?php echo $row['price'] ?>" /> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-sm-10">
                  <input type="text" name="qty"  class="form-control" id="inputEmail3" value="<?php echo $row['qty'] ?>"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                  <textarea type="text" name="description"  class="form-control" id="inputEmail3"/><?php echo $row['description'] ?></textarea>
                  </div>
                </div>
                <!-- FORM ENDS -->
                
                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                  <img src="cover/<?php echo $row['cover']?>" alt="" height="150" width="150">
                            <input type="file" name="cover">
                            </div>
                            </div>
                            <!-- FORM ENDS -->


               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="update" class="btn btn-warning pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </div> <!-- col-md-6 ends-->

          <div class="col-md-5">
          	<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Product Image</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
<!-- FORM START -->
           <img src="cover/<?php echo $row['cover']?>" alt="" height="200" width="200">
           <?php 

           	$images = "SELECT * FROM image_attributes WHERE product_id = $id ";
           	$run = mysqli_query($mysqli,$images);
           	while($img = mysqli_fetch_assoc($run)):
           ?>
       		  <img src="uploads/<?php echo $img['image']?>" alt="" height="150" width="150">
       		<?php endwhile; ?>
                <!-- FORM ENDS -->
                
  <br><br>
  
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <button type="submit" class="btn bg-maroon margin">Size&Color Update</button>
        <button type="submit" name="submit" class="btn bg-navy margin pull-right">Image Update</button>

        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
          </div><!--  col-md-4 end -->
          </div><!--  row ends -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


                

<script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#cat").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $("#cities-container").html("");
        
        $.ajax({
          type:'post',
          data:{category_id:getCountryID},
          url: 'ajax_request.php',
          success:function(returnData){
            $("#loader").hide();  
            $("#cities-container").html(returnData);
          }
        }); 
      }
      
    })
  });
</script>

  <?php include('footer2.php') ?>

