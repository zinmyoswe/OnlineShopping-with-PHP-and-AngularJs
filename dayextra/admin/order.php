<?php
    session_start();
   include('../confs/config.php');
   include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/order.css">
<h1>Order List</h1>
<?php
	$orders = mysqli_query($mysqli,"SELECT * FROM orders"); ?>
	<ul class="orders">
	<?php while($order = mysqli_fetch_assoc($orders)):
?>
 <?php if($order['status']): ?>
 	<li class="delivered">
 <?php else: ?>
 	<li>
 <?php endif; ?>

 <div class="order">
 	<b><?php echo $order['customer']; ?></b>
 	<p><?php echo $order['created_date']; ?></p>
 	<?php if($order['status'] == 0){ ?>
 	<a href="order_status.php?id=<?php echo $order['order_id']?>&status=0" >Undo</a>
 	<?php }else if($order['status'] == 2){ ?>
 	<a href="order_status.php?id=<?php echo $order['order_id']?>&status=2" >Waiting Payment</a>
 <?php }else{ ?>
 	<a href="order_status.php?id=<?php echo $order['order_id']?>&status=1"
 	>Delivered</a>
 <?php } ?> 
  
    <a href="" class="btn btn-primary">Confirm Payment</a>
 	
 </div>

 <div class="items">
 	<?php
 		$order_id = $order['order_id'];
 		$items = mysqli_query($mysqli,"SELECT order_items.*,product.product_name FROM order_items LEFT JOIN product ON order_items.product_id = product.id WHERE order_items.order_id = $order_id");
 		while($item = mysqli_fetch_assoc($items)):
 		?>

 		<b><a href=""><?php echo $item['product_name'] ?></a>
 		(<?php echo $item['units'] ?>) </b>
 		US$<?php echo $item['price'] ?>

 	<?php endwhile; ?>
 </div>
 	</li>
<?php endwhile; ?>
</ul>

