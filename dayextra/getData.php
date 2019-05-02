<?php

include 'confs/config.php';

$data = json_decode(file_get_contents("php://input"));

$search = $data->searchText;

$sel = mysqli_query($mysqli,"select * from product where product_name like '%".$search."%' limit 6");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
    $data[] = array("name"=>$row['product_name'],"cover"=>$row['cover'],"id"=>$row['id']);
}

echo json_encode($data);
