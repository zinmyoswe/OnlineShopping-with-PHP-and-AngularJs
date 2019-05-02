<?php
    session_start();
   include('../confs/config.php');
   include('header2.php');
?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Order
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
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Order List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
<?php
	$orders = mysqli_query($mysqli,"SELECT * FROM orders ORDER BY order_id DESC LIMIT 5"); ?>
	<ul class="orders">
	<?php while($order = mysqli_fetch_assoc($orders)):
?>
 <?php if($order['status']): ?>
 	<li class="delivered">
 <?php else: ?>
 	<li>
 <?php endif; ?>

 <div class="order">
 	<b><i class="fa fa-user"></i><?php echo $order['customer']; ?></b>
 	<p><i class="fa fa-clock-o"></i><?php echo $order['created_date']; ?></p>
 	<?php if($order['status'] == 0){ ?>
 	<a href="order_status.php?id=<?php echo $order['order_id']?>&status=0" >Undo</a>
 	<?php }else if($order['status'] == 2){ ?>
 	<a href="order_status.php?id=<?php echo $order['order_id']?>&status=2" >Waiting Payment</a>
 <?php }else{ ?>
 	<a href="order_status.php?id=<?php echo $order['order_id']?>&status=1"
 	>Delivered</a>
 <?php } ?> 
  
    <a href="" class="btn btn-default">Confirm Payment</a>
 	
 </div>

 <div class="items">
 <table class="table">
 		<tr>
 			<th>Product Name</th>
 			<th>Price</th>
 			<th>Units</th>
 			<th>Total</th>
 			<th>Time</th>
 			<th>Shipping Address</th>
 			<th>Country</th>
 		</tr>
 	<?php
 		$order_id = $order['order_id'];
 		$items = mysqli_query($mysqli,"SELECT order_items.*,product.product_name FROM order_items LEFT JOIN product ON order_items.product_id = product.id WHERE order_items.order_id = $order_id");
 		while($item = mysqli_fetch_assoc($items)):
 		?>
 		
 		<tr>
 			<td><a href=""><?php echo $item['product_name'] ?></a></td>
 			<td>US$<?php echo $item['price'] ?></td>
 			<td>(<?php echo $item['units'] ?>)</td>
 			<td><span class='badge progress-bar-warning'>
 			US$<?php echo $item['total'] ?></span></td>
 			<td><i class="fa fa-clock-o"></i><?php echo $order['created_date'] ?></td>
 			<?php 
 			include('../confs/config.php');
 			$customer = $order['customer'];
 			$sql = "SELECT * FROM shipping 
 			LEFT JOIN orders 
 			ON shipping.shipping_id = orders.shipping_id
 			WHERE orders.order_id = $order_id";
 			$run = mysqli_query($mysqli,$sql);
 			while($ship = mysqli_fetch_assoc($run)):
 			?>
 				<td><?php echo $ship['street_address'] ?></td>
 				<td><?php echo $ship['country'] ?>,<?php echo $ship['state'] ?>, In<?php echo $ship['city'] ?></td>
 			<?php endwhile; ?>
 		</tr>
 		
 		
 		
 	<?php endwhile; ?>
 	</table>
 </div>
 	</li>
<?php endwhile; ?>
</ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<link rel="stylesheet" type="text/css" href="css/order.css">


<?php include('footer2.php'); ?>

