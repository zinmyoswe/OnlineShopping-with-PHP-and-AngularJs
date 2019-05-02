<?php
	
	include('../confs/config.php');
	$id = $_GET['id'];
	$result = mysqli_query($mysqli,"SELECT * FROM orders WHERE order_id=$id ");
	$row = mysqli_fetch_assoc($result);
	$order_id = $row['order_id'];
	$shipping = $row['shipping_id'];

	 $sql = "UPDATE orders SET status=5,modified_date=NOW() WHERE order_id=$order_id";

     $run = mysqli_query($mysqli,$sql);

     $sql2 = "UPDATE shipping SET status='Deliver',modified_date=NOW() WHERE shipping_id=$shipping";

     $run2 = mysqli_query($mysqli,$sql2);

     header("location: all_order.php");

?>