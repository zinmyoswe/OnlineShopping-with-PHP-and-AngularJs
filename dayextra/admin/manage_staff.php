<?php 
include('../confs/config.php');
include('header2.php'); 
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Staff
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section><br>

        
       <!--  ===============================staff panel starts======== -->
       <div class="container">
      <div class="row">
        <div class="col-md-11">
        
        <?php
          $sql = "SELECT * FROM admin";
          $run = mysqli_query($mysqli,$sql);
          while($row = mysqli_fetch_assoc($run)):
            $role = $row['role'];
        ?>
        <?php if($role == 'Admin'){?>
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $row['admin_name'] ?></h3>
              <h5 class="widget-user-desc"><?php echo $row['role'] ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="user_images/<?php echo $row['admin_img'] ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <a href="staff_update.php?id=<?php echo $row['admin_id'] ?>" class="btn btn-warning">Edit</a>
              <a href="" class="btn btn-default pull-right">Delete</a>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <?php }else{ ?>
                <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('AdminLTE/dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $row['admin_name'] ?></h3>
              <h5 class="widget-user-desc"><?php echo $row['role'] ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="user_images/<?php echo $row['admin_img'] ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
                <a href="staff_update.php?id=<?php echo $row['admin_id'] ?>" class="btn btn-warning">Edit</a>
              <a href="" class="btn btn-default pull-right">Delete</a>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <?php } ?>
      <?php endwhile; ?>
  
      </div>
      <!-- /.row -->
      </div><!--  col-md-12 end -->
      </div> <!-- container ends -->
     </div>
      <!--  ===============================staff panel ends======== -->


  </div>
  <!-- /.content-wrapper -->
<?php include('footer2.php'); ?>