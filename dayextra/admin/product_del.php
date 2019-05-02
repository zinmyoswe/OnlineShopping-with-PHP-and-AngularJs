<?php
	include('../confs/config.php');

	$id = $_GET['id'];
	$sql = "DELETE FROM product WHERE id = $id";
	mysqli_query($mysqli,$sql);
	header("location: product_display.php");
?>