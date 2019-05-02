<?php
	
	include('../confs/config.php');
	include('header2.php'); 
	$id = $_GET['id'];
	$result = mysqli_query($mysqli,"SELECT * FROM orders WHERE order_id=$id ");
	$row = mysqli_fetch_assoc($result);

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Orders
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
      <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pending Order Detail</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="box-body">
        <p>OrderID : <span class='label bg-yellow'><?php echo $row['order_id']; ?></span></p>
        <p>CustomerName : <?php echo $row['customer']; ?></p>
        <p>PaymentType : <b><?php echo $row['payment_type']; ?></b></p>


  		<?php
  			$order_id = $row['order_id'];
  			 $sql = "SELECT distinct * FROM orders 
  			 		 LEFT JOIN order_items
  			 		 ON orders.order_id = order_items.order_id
  			 		 WHERE orders.order_id = '$order_id'";
  			 $run = mysqli_query($mysqli,$sql);
  		?>
  		<table class="table table-bordered">
  			<tr>
  				<th></th>
  				<th>ProductName</th>
  				<th>Price</th>
  				<th>Quantity</th>
  				<th>Total</th>
  			</tr>
  			<?php
  			 $count = 1;
  			 while($row2 = mysqli_fetch_assoc($run)):
  			?>
  			<tr>
  				
  				<td><?php echo $count ?></td>
  				<td><b><?php echo $row2['product_name'] ?></b></td>
  				<td>US$<?php echo $row2['price'] ?></td>
  				<td><span class='label bg-yellow'><?php echo $row2['units'] ?></span></td>
  				<td>US$<?php echo $row2['total'] ?></td>
  			</tr>
  			
  		<?php 
  		$count++;
  		endwhile; ?>
  		 			<tr >
                      <td colspan="2"></td>
                      <td><h5><b>TOTAL : </b></h5></td>
                      <td><h5><b><span class='label bg-green'><?php echo $row['total_qty'] ?></span></b></h5></td>
                       <td><h5><b>US$<?php echo $row['total_amt'] ?></b></h5></td>
                    </tr>
  		</table>

        </div>
        <!-- /.box-body -->
       
        <div class="box-footer">
        	<a class="btn btn-default" href="all_order.php">Back</a>
         	<a href="payment_receive.php?id=<?php echo $order_id ?>" class="btn btn-warning pull-right">Receive Payment</a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
       </div> <!--  col-md-5 end -->

        <!-- Default box -->
        <div class="col-md-5">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Shipping Address</h3>

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
  		<table class="table table-bordered">
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
  				<th>Country</th>
  				<td><?php echo $rowship['state'] ?>,<?php echo $rowship['city'] ?>, IN <?php echo $rowship['country'] ?></td>
  			</tr>
  		</table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

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