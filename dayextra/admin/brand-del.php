<?php
	
	include('../confs/config.php');

	$id = $_GET['id'];
	$sql = $mysqli->query("DELETE FROM brand WHERE brand_id = $id");

	header("location: brand-list.php");



?>