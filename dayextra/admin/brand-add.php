<?php
	
	include('../confs/config.php');

	$name = $_POST['name'];
	$cover = $_FILES['cover']['name'];
    $tmp = $_FILES['cover']['tmp_name'];

     if($cover){
        move_uploaded_file($tmp,"cover/$cover");

      }

	$query = $mysqli->query("INSERT INTO brand(brand_name,brand_cover,created_date)
			VALUES ('$name','$cover',NOW())");
	
	header("location: brand-list.php");

?>

