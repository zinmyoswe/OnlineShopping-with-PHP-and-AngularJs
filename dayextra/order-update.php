<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
session_start();
  $user = $_SESSION['email'];  
  $shipping = $_SESSION['shipping'];
  include('confs/config.php');

if(isset($_SESSION['cart'])) {

  $total = 0;
  $itemqty = 0;

  $query = $mysqli->query("INSERT INTO orders(customer,shipping_id,status,total_amt,total_qty,payment_type,created_date,modified_date) 
                           VALUES('$user','$shipping',2,0,0,'Cash',NOW(),NOW())");

  $order_id = mysqli_insert_id($mysqli);

  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM product WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {


        
        $cost = $obj->price * $quantity; //work out the line cost
        $total = $total + $cost; //add to the total cost
        $itemqty = $itemqty+$quantity; 

        // $user = $_SESSION["username"];

        

        $query2 = $mysqli->query("INSERT INTO order_items (order_id,product_id, product_name, price, units, total, customer) 
                                 VALUES('$order_id','$obj->id', '$obj->product_name', $obj->price, $quantity, $cost, '$user')");



        if($query2){
          $newqty = $obj->qty - $quantity;
          if($mysqli->query("UPDATE product SET qty = ".$newqty." WHERE id = ".$product_id)){

          }
        }

        if($mysqli->query("UPDATE orders SET total_amt = ".$total.",total_qty =".$itemqty." WHERE order_id = ".$order_id)){

        }

        //send mail script
        /*$query = $mysqli->query("SELECT * from orders order by date desc");
        if($query){
          while ($obj = $query->fetch_object()){
            $subject = "Your Order ID ".$obj->id;
            $message = "<html><body>";
            $message .= '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
            $message .= '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
            $message .= '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
            $message .= '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
            $message .= '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
            $message .= '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
            $message .= '<p><strong>Total Cost</strong>: '.$obj->total.'</p>';
            $message .= "</body></html>";
            $headers = "From: support@techbarrack.com";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $sent = mail($user, $subject, $message, $headers) ;
            if($sent){
              $message = "";
            }
            else {
              echo 'Failure';
            }
          }
        }*/



      }
    }
  }
}
unset($_SESSION['shipping']);
unset($_SESSION['cart']);
header("location:success.php");

?>
