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
        Manage Category
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
          <h3 class="box-title">New Category Registration</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
                 <?php
          if(isset($_POST['cat'])){
            $name = $_POST['name'];
  
            if($name == null){
                  echo '  <div class="notice notice-danger">
        <strong><i class="fa fa-exclamation-triangle"> </i> Categories Name Required!</strong>
        </div>';
                }else{
      $query = $mysqli->query("INSERT INTO categories(cat_name,created_date)
      VALUES ('$name',NOW())");

               
                

             if($query){

                  echo '  <div class="notice notice-success">
        <strong><i class="fa fa-check-circle-o"> </i> Category Added Successfully</strong>
        </div>';
                  }
                }
                }

               
  
  
          ?>
          <form method="post" action="" enctype="multipart/form-data">
<!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="Categoryname"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->
                
  <br><br>
  
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" name="cat" value="Add Category" class="btn btn-warning pull-right">
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



