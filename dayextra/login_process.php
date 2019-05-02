<?php
	session_start();
	require_once 'confs/config.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		
		$email = $_POST['email'];
        $password = $_POST['password'];
   

        $sql = "SELECT * FROM customer WHERE pass='$password' AND email='$email'";

        $run = mysqli_query($mysqli,$sql);

        $check_customer = mysqli_num_rows($run);



        if($check_customer == 0){

          echo "
          
                
                Incorrect email and password!!
           
        ";
          exit();
        }

         $sel_customer = "SELECT * FROM customer WHERE email='$email'";

      $run = mysqli_query($mysqli,$sel_customer);

      $row = mysqli_fetch_array($run);

        if($check_customer>0 && $_SESSION['cart'] == 0){

          $_SESSION['email']=$email;
          $_SESSION['id']=$row['id'];
        // echo "<script>alert('Login successfully!!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
        }
        else{
           $_SESSION['email']=$email;
           $_SESSION['id']=$row['id'];
        // echo "<script>alert('Login successfully!!')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";

        }

	}

?>