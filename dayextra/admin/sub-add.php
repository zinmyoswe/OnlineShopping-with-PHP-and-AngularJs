<?php
	
	include('../confs/config.php');

	$sub_name = $_POST['sub_name'];
	$category_id = $_POST['category_id'];
	

	$query = $mysqli->query("INSERT INTO sub_category(sub_name,category_id,created_date)
			VALUES ('$sub_name','$category_id',NOW())");
	

	

	header("location: sub-list.php");

?>