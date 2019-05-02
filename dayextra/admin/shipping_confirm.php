<?php
	
	include('../confs/config.php');
	include('header2.php'); 
	$id = $_GET['id'];
	$result = mysqli_query($mysqli,"SELECT * FROM orders WHERE order_id=$id ");
	$row = mysqli_fetch_assoc($result);
	$order_id = $row['order_id'];
	$shipping = $row['shipping_id'];
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Shipping
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
        <div class="col-md-5">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Shipping Address</h3>

          <?php
                if(isset($_POST['submit'])){
                 

                  $sql = "UPDATE orders SET status=4,modified_date=NOW() 
                  		   WHERE order_id=$order_id";

                  $run = mysqli_query($mysqli,$sql);

                  $sql2 = "UPDATE shipping SET status='Shipping',modified_date=NOW() 
                  		   WHERE shipping_id=$shipping";

                  $run2 = mysqli_query($mysqli,$sql2);
                  
                  if($run){

                    echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success</h4>
                Successfully Shipping- Orders is still shipping to customer
              </div>';
                  }

                 

                }
              ?>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
  		<?php 
  			$shipping = $row['shipping_id'];
  			$ship = "SELECT * FROM shipping 
  					 LEFT JOIN orders 
  					 ON orders.shipping_id = shipping.shipping_id
  					 WHERE orders.shipping_id = $shipping";
  			$run = mysqli_query($mysqli,$ship);
  			$rowship = mysqli_fetch_assoc($run);
  		?>
  		<form method="post" action="" enctype="multipart/form-data">
  		<table class="table table-bordered">
  			<tr>
  				<th>OrderID</th>
  				<td><?php echo $rowship['order_id'] ?></td>
  			</tr>
  			<tr>
  				<th>Name</th>
  				<td><?php echo $rowship['full_name'] ?></td>
  			</tr>
  			<tr>
  				<th>ShippingType</th>
  				<td><?php echo $rowship['shipping_type'] ?></td>
  			</tr>
  			<tr>
  				<th>StreetAddress</th>
  				<td><?php echo $rowship['street_address'] ?></td>
  			</tr>
  			<tr>
  				<th>Phone</th>
  				<td><?php echo $rowship['phone'] ?></td>
  			</tr>
  			<tr>
  				<th>Country</th>
  				<td><?php echo $rowship['state'] ?>,<?php echo $rowship['city'] ?>, IN <?php echo $rowship['country'] ?></td>
  			</tr>
  		</table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <input type="submit" name="submit" value="Shipping" class="btn btn-warning pull-right">
        <a href="all_order.php" class="btn btn-default">Back</a>
        </div>
        </form>
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