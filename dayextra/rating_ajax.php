<?php

include('confs/config.php');

$user_id = $_POST['user_id'];
$productid = $_POST['productid'];
$rating = $_POST['rating'];

// Check entry within table
$query = "SELECT COUNT(*) AS cntpost FROM rating WHERE product_id=".$productid." and user_id=".$user_id;

$result = mysqli_query($mysqli,$query);
$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['cntpost'];

if($count == 0){
    $insertquery = "INSERT INTO rating(user_id,product_id,rating) values(".$user_id.",".$productid.",".$rating.")";
    mysqli_query($mysqli,$insertquery);
}else {
    $updatequery = "UPDATE rating SET rating=" . $rating . " where user_id=" . $user_id . " and product_id=" . $productid;
    mysqli_query($mysqli,$updatequery);
}


// get average
$query = "SELECT ROUND(AVG(rating),1) as averageRating FROM rating WHERE product_id=".$productid;
$result = mysqli_query($mysqli,$query) or die(mysqli_error());
$fetchAverage = mysqli_fetch_array($result);
$averageRating = $fetchAverage['averageRating'];

$return_arr = array("averageRating"=>$averageRating);

echo json_encode($return_arr);