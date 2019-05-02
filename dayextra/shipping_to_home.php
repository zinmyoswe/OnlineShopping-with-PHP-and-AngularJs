<?php
        session_start();
        include('confs/config.php');
        $name = $_POST['name'];
        $street = $_POST['street'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $phone = $_POST['phone'];
        

        $email = $_SESSION['email'];

        $sql = "INSERT INTO shipping(full_name,email,store_id,phone,status,shipping_type,street_address,country,state,city,zipcode,created_date,modified_date,shipping_time)
                VALUES('$name','$email',0,'$phone','register','home','$street','$country','$state','$city','$zip',NOW(),NOW(),NOW())";

       mysqli_query($mysqli,$sql);

       

       $query = "SELECT * FROM shipping WHERE email = '$email' ORDER BY shipping_id DESC LIMIT 0,1";
                $result = mysqli_query($mysqli,$query);
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row['shipping_id'];
    echo "<script>window.location='payment_info.php?id=$id'</script>";
}
       ?>