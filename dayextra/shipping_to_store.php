<?php
        session_start();
        include('confs/config.php');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $store_id = $_POST['store_id'];

        $sql = "INSERT INTO shipping(full_name,email,store_id,phone,status,shipping_type,street_address,country,state,city,zipcode,created_date,modified_date,shipping_time)
                VALUES('$name','$email','$store_id','$phone','register','store','','','','','',NOW(),NOW(),NOW())";

       mysqli_query($mysqli,$sql);

       header("location: payment_info.php");

       ?>