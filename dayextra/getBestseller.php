<?php

// configuration
include 'confs/config.php';

$data = json_decode(file_get_contents("php://input"));

$row = $data->row;
$rowperpage = $data->rowperpage;

// selecting posts
$query = 'SELECT product.*,order_items.product_id, SUM(order_items.units) AS TotalQuantity
            FROM product 
            LEFT JOIN order_items 
            ON product.id = order_items.product_id
            GROUP BY order_items.product_id
            ORDER BY TotalQuantity DESC limit '.$row.','.$rowperpage;
$result = mysqli_query($mysqli,$query);

$response_arr = array();

while($datarow = mysqli_fetch_assoc($result)){
 
    $id = $datarow['id'];
    $product_name = $datarow['product_name'];
    $price = $datarow['price'];
    $cover = $datarow['cover'];
    $qty = $datarow['qty'];

 
    $response_arr[] = array('id'=>$id,'product_name'=>$product_name,'price'=>$price,'cover'=>$cover,'qty'=>$qty);
 
}

if(count($response_arr) > 0)
echo json_encode($response_arr);
exit;