<?php 
include('../confs/config.php');

$id = $_POST['id'];

// Delete record
$query = "DELETE FROM sub_category WHERE sub_id=".$id;
mysqli_query($mysqli,$query);

echo 1;