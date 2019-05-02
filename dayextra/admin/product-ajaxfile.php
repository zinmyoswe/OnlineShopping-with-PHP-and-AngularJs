<?php 
include('../confs/config.php');

$id = $_POST['id'];

// Delete record
$query = "DELETE FROM product WHERE id=".$id;
mysqli_query($mysqli,$query);

echo 1;