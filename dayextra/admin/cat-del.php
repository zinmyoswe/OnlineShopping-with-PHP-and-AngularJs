<?php
	
	include('../confs/config.php');

	$id = $_GET['id'];
	$sql = $mysqli->query("DELETE FROM categories WHERE cat_id = $id");

	header("location: cat-list.php");



?>