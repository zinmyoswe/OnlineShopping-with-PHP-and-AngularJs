<?php
	
	include('../confs/config.php');

	$name = $_POST['name'];
	

	$query = $mysqli->query("INSERT INTO categories(cat_name,created_date)
			VALUES ('$name',NOW())");
	

	

	header("location: cat-list.php");

?>

