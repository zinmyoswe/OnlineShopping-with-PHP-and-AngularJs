<?php 
 include('confs/config.php');

$id = $_POST['id'];

// Delete record
$query = "DELETE FROM shipping WHERE shipping_id=".$id;
mysqli_query($mysqli,$query);

header("location: shipping_info.php");


