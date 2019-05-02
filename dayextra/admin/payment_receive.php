<?php
	
	include('../confs/config.php');
	include('header2.php'); 
	$id = $_GET['id'];
	$result = mysqli_query($mysqli,"SELECT * FROM orders WHERE order_id=$id ");
	$row = mysqli_fetch_assoc($result);
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Payment
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

   <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-navy">
            <div class="box-header with-border">
              <h3 class="box-title">PAYMENT RECEIVE FORM</h3>
            </div>
            <!-- /.box-header -->
              <?php
                if(isset($_POST['receive'])){
                  $id = $_POST['id'];
                  $payment = $_POST['payment'];
                  $total = $_POST['total'];
                  $payamount = $_POST['payamount'];

                  $sql = "INSERT INTO payment(order_id,payment_type,amount,payamount,payment_date)
                   VALUES('$id','$payment','$total','$payamount',NOW())";

                  $run=mysqli_query($mysqli,$sql);

                  $sql2 = "UPDATE orders SET status=3,modified_date=NOW() WHERE order_id=$id";

                  $run2 = mysqli_query($mysqli,$sql2);
                  
                  if($run){

                    echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success</h4>
                Payment was Received successfully
              </div>';
                  }

                 

                }
              ?>
            <!-- form start -->
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">OrderID</label>
                  <div class="col-sm-10">
                  <input type="hidden" name="id" value="<?php echo $row['order_id'] ?>">
                  <input type="text" name="id"  class="form-control" id="inputEmail3" value="<?php echo $row['order_id'] ?>" disabled/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                    <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">PaymentType</label>
                  <div class="col-sm-10">
                  <input type="text" name="payment"  class="form-control" id="inputEmail3" value="<?php echo $row['payment_type'] ?>"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->


                    

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">TotalAmount</label>
                  <div class="col-sm-10">
                  <input type="text" name="total"  class="form-control" id="inputEmail3" 
                 value="<?php echo $row['total_amt'] ?>" /> 
                  </div>
                </div>
                <!-- FORM ENDS -->
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">PayAmount</label>
                  <div class="col-sm-10">
                  <input type="text" name="payamount"  class="form-control" id="inputEmail3" 
                 /> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                   <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Qty</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" 
                 value="<?php echo $row['total_qty'] ?>" /> 
                  </div>
                </div>
                <!-- FORM ENDS -->
          
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="all_order.php" class="btn btn-default">Back</a>
                <input type="submit" name="receive" class="btn btn-warning pull-right" value="Receive Payment">
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



  <?php include('footer2.php') ?>

