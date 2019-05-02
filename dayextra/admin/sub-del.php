<?php
	
	include('../confs/config.php');

	$id = $_GET['id'];
	$sql = $mysqli->query("DELETE FROM sub_category WHERE sub_id = $id");

	header("location: sub-list.php");



?>