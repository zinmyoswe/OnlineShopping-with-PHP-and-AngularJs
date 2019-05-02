<?php
	session_start();
	require_once '../confs/config.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		
		$email = $_POST['email'];
        $password = $_POST['password'];
   

        $sql = "SELECT * FROM admin WHERE admin_password='$password' AND admin_email='$email'";

        $run = mysqli_query($mysqli,$sql);

        $check_customer = mysqli_num_rows($run);



        if($check_customer == 0){

          echo "
          
                
                Incorrect email and password!!
           
        ";
          exit();
        }

         $sel_customer = "SELECT * FROM admin WHERE admin_email='$email'";

      $run = mysqli_query($mysqli,$sel_customer);

      $row = mysqli_fetch_array($run);

        if($check_customer>0){

          $_SESSION['email']=$email;
          $_SESSION['admin_id']=$row['admin_id'];
        // echo "<script>alert('Login successfully!!')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        }
        else{
          
          $_SESSION['email']=$email;
          $_SESSION['admin_id']=$row['admin_id'];
        // echo "<script>alert('Login successfully!!')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        }

	}

?>