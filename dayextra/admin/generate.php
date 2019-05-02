<?php
   session_start();
   include('../confs/config.php');

   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product where id = $id");
   $row = mysqli_fetch_assoc($result);
?>
<?php include('header2.php'); ?>
<link rel="stylesheet" type="text/css" href="css/201.css">
<link rel="stylesheet" type="text/css" href="css/display.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product 3rd Registration
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
      <div class="box box-warning">
       
        <div class="box-header with-border">
          <h3 class="box-title">Product Size&color Option</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <span class="badge progress-bar-warning">
        ProductID : <?php echo $_SESSION['id']=$row['id']; ?>
        </span>
         <form method="post" action="">
           <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Row No</label>
                  <div class="col-sm-10">
                  <input type="text" name="no_of_rec" placeholder="how many records u want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" class="form-control" id="inputEmail3" required />
                  </div>
                </div>
                <!-- FORM ENDS -->
                <br><br>
                <td align="right"><button type="submit" name="btn-gen-form" class="btn btn-warning pull-right">Generate</button> 
                  </form>
                  <br><br>
                 <?php include("color_attribute.php"); ?>


      
      
   
  
          






 
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->

  
      </div>
      <!-- /.box -->
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('footer2.php'); ?>
    

 
