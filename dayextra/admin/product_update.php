<?php

 include('../confs/config.php');

      $id = $_POST['id'];
      $name = $_POST['name'];
      $cat = $_POST['cat'];
      $sub_cat = $_POST['sub_cat'];
      $brand = $_POST['brand'];
      $supplier = $_POST['supplier'];
      $price = $_POST['price'];
      $qty = $_POST['qty'];
      $description = $_POST['description'];
      $cover = $_FILES['cover']['name'];
      $tmp = $_FILES['cover']['tmp_name'];
     

      // $product_image2 = $_FILES['product_image2']['name'];
      // $tmp2 = $_FILES['product_image2']['tmp_name'];

      // $product_image3 = $_FILES['product_image3']['name'];
      // $tmp3 = $_FILES['product_image3']['tmp_name'];

      
      // move_uploaded_file($tmp,"cover/$product_image");
      // move_uploaded_file($tmp2,"cover/$product_image2");
      // move_uploaded_file($tmp3,"cover/$product_image3");
      
      if($cover){
        move_uploaded_file($tmp, "cover/$cover");

      }
      
    
      $sql = "UPDATE product SET product_name='$name',categories='$cat',sub_cat='$sub_cat',brand='$brand',supplier='$supplier',description='$description',price='$price',cover='$cover',qty='$qty',modified_date=now() 
          WHERE id = $id ";


          // echo "$sql";
          

      mysqli_query($mysqli,$sql);
      
      header("location:product_display2.php");

    
  
?>