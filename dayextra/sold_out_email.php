 <?php
    session_start();
    include('confs/config.php');

      $email = $_POST['email'];
      $id = $_POST['id'];

     
      $sql = "INSERT INTO sold_out(email,product_id,created_date)
                   VALUES('$email','$id',NOW())";

      $run=mysqli_query($mysqli,$sql);
      
     
      header("location:success4.php");
    
    
?>