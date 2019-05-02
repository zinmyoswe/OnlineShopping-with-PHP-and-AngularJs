<?php
   include('../confs/config.php');
   $id = $_GET['id'];
   $status = $_GET['status'];

   mysqli_query($mysqli,"UPDATE orders SET status=$status,modified_date=now()
   	WHERE order_id=$id");

   header("location:order.php");

   ?>