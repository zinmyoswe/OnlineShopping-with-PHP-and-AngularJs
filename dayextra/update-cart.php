<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
 session_start();

  include('confs/config.php');

$product_id = $_GET['id'];
$action = $_GET['action'];
  $color = $_SESSION['color'];
  $size = $_SESSION['size']; 
   $product_attribute = $_SESSION['product_attribute'];

    

 

// $query="SELECT * FROM product_attribute WHERE color='$color'and size='$size' ";
//   $ret = mysql_query($query);
//   $num_result=mysql_num_rows($ret);
//     $row=mysql_fetch_array($ret);

//     if($num_result>0)
//   {
   
//     $_SESSION['size']=$row['size'];
//     $_SESSION['color']=$row['color'];

//   }
//   else
//   {
//    echo "error";
//   }


print_r($_SESSION);

if($action === 'empty')
  unset($_SESSION['cart']);
 

$result = $mysqli->query("SELECT qty FROM product WHERE id = ".$product_id);
  
  

if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$product_id]+1 <= $obj->qty)
        $_SESSION['cart'][$product_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id] == 0)
        unset($_SESSION['cart'][$product_id]);
        break;



    }
  }
}



header("location: cart.php");

?>
