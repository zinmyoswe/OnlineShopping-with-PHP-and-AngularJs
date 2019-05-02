<?php 
include('../confs/config.php');

$id = $_POST['id'];

// Delete record
$query = "DELETE FROM brand WHERE brand_id=".$id;
mysqli_query($mysqli,$query);

echo "successfully deleted";