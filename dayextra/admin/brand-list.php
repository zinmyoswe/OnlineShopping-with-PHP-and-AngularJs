<?php 
include('../confs/config.php');
include('header2.php');
?>
<link rel="stylesheet" type="text/css" href="css/201.css">


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Brands
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

      <!-- Default box -->
      <div class="row">


        <!-- Default box -->
        <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">New Brand Registration</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <?php
          if(isset($_POST['brand'])){
            $name = $_POST['name'];
            $cover = $_FILES['cover']['name'];
              $tmp = $_FILES['cover']['tmp_name'];

               if($cover){
                  move_uploaded_file($tmp,"cover/$cover");

                }
                if($name == null){
                  echo '  <div class="notice notice-danger">
        <strong><i class="fa fa-exclamation-triangle"> </i> Brand Name Required!</strong>
        </div>';
                }else{


            $query = $mysqli->query("INSERT INTO brand(brand_name,brand_cover,created_date)
                VALUES ('$name','$cover',NOW())");

             if($query){

                  echo '  <div class="notice notice-success">
        <strong><i class="fa fa-check-circle-o"> </i> Brand Added Successfully</strong>
        </div>';
                  }
                }
                }

               
  
  
          ?>
          <form method="post" action="" enctype="multipart/form-data">
<!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">BrandName</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="Brandname"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->
                <br>
                <!-- FORM ENDS -->

                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                            <input type="file" name="cover" >
                            </div>
                            </div>
                            <!-- FORM ENDS -->
  <br><br>
  
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" name="brand" value="Add Brand" class="btn btn-warning pull-right">
</form>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </div> <!-- col-md-4 end -->
    </div> <!-- row ends -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


    <?php include('footer2.php'); ?>




