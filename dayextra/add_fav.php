<?php
session_start();
include('confs/config.php');
$customer = $_SESSION['email'];
if($customer == null){
  echo "<script>window.open('checkout.php','_self')</script>";
}
else{

$id = $_GET['id'];
print_r($_SESSION);

  $customer = $_SESSION['email']; 
  $sql = "SELECT * FROM customer WHERE email = '$customer'";
  $run = mysqli_query($mysqli,$sql);
  $row =mysqli_fetch_assoc($run);

  $customer_id = $row['id'];

  echo "$customer_id<br>";
  echo "$id";

  $sql2 = "INSERT INTO add_to_favourite(product_id,customer_id,fav_date)
  			VALUES('$id','$customer_id',NOW())";

  mysqli_query($mysqli,$sql2);

  echo "<script>window.open('detail.php?id=$id','_self')</script>";

}