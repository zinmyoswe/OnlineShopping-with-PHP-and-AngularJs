
<?php
   include('../confs/config.php');
?>

<?php include('header2.php'); ?>
<!-- =============================================== -->
<script src="tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
  selector: 'textarea',
  height: 400,
  theme: 'modern',
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
    </script>
  <script src="jquery.tinymce.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Product
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

   <div class="col-md-11">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">NEW PRODUCT ADD FORM</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="product_add.php" enctype="multipart/form-data">
              <div class="box-body">
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Title</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="Product Name"/> 
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
                                                $get_cat = "SELECT * FROM categories";
                                                $run_cat = mysqli_query($mysqli,$get_cat);
                                                while($row_cat= mysqli_fetch_array($run_cat)){
                                                  $id = $row_cat['cat_id'];
                                                  $name = $row_cat['cat_name'];

                                                  echo "
                                                    <option value='$id'>$name</option>
                                                  ";
                                                }
                                                ?>
                                          </select>  
                                           <img src="img/progress2.gif" id="loader" width="60" height="45"> 
                  </div>
                </div>

                 <div class="form-group" id="cities-container">
                                 
                                  </div>
                <!-- FORM ENDS -->

                   <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Brand</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="brand">
                                                <option>Select a brand</option>
                                               <?php

                                                $get_brand = "SELECT * FROM brand";
                                                $run_brand = mysqli_query($mysqli,$get_brand);
                                                while($row_brand= mysqli_fetch_array($run_brand)){
                                                  $brand_id = $row_brand['brand_id'];
                                                  $brand_title = $row_brand['brand_name'];

                                                  echo "
                                                    <option value='$brand_id'>$brand_title</option>
                                                  ";
                                                }
                                                ?>
                                          </select> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Supplier</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="supplier">
                                                <option>Select a supplier</option>
                                               <?php

                                                $get_brand = "SELECT * FROM supplier";
                                                $run_brand = mysqli_query($mysqli,$get_brand);
                                                while($row_brand= mysqli_fetch_array($run_brand)){
                                                  $brand_id = $row_brand['supplier_id'];
                                                  $brand_title = $row_brand['supplier_name'];

                                                  echo "
                                                    <option value='$brand_id'>$brand_title</option>
                                                  ";
                                                }
                                                ?>
                                          </select> 
                  </div>
                </div>
                <!-- FORM ENDS -->
                  
                         <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
                  <div class="col-sm-10">
                  <input type="text" name="price"  class="form-control" id="inputEmail3" placeholder="Price"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-sm-10">
                  <input type="text" name="qty"  class="form-control" id="inputEmail3" placeholder="Qty"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                  <textarea type="text" name="description"  class="form-control" id="inputEmail3"/></textarea>
                  </div>
                </div>
                <!-- FORM ENDS -->

                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                            <input type="file" name="cover" >
                            </div>
                            </div>
                            <!-- FORM ENDS -->

               
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" name="submit" class="btn btn-warning pull-right" style="margin: 0 4px">Save</button>
                <a href="home.php" class="btn btn-default pull-right" >Back</a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </div> <!-- col-md-6 ends-->

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
  </div>
  <?php include('footer2.php') ?>

<?php

    if(isset($_POST['submit'])){

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
     

      // $product_image2 = $_FILES['product_image2']['name'];
      // $tmp2 = $_FILES['product_image2']['tmp_name'];

      // $product_image3 = $_FILES['product_image3']['name'];
      // $tmp3 = $_FILES['product_image3']['tmp_name'];

      
      // move_uploaded_file($tmp,"cover/$product_image");
      // move_uploaded_file($tmp2,"cover/$product_image2");
      // move_uploaded_file($tmp3,"cover/$product_image3");
      
      if($cover){
        move_uploaded_file($tmp, "cover/$cover");

      }
      
    
      $sql = "INSERT INTO product(product_name,categories,sub_cat,brand,supplier,description,price,cover,qty)
                   VALUES('$name','$cat','$sub_cat','$brand','$supplier','$description','$price','$cover','$qty')";

      $run=mysqli_query($mysqli,$sql);
      
      if($run){

        echo "<script>alert('Product has been inserted')</script>";
        echo "<script>window.open('product_2nd.php','_self')</script>";
      }
      else{
        echo "error";
      }

    
    }
?>