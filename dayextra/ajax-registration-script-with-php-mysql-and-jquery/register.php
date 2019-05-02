<?php
include_once("db_connect.php");
if(isset($_POST['btn-save'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['password'];	
	$sql = "SELECT email FROM customer WHERE email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);		
	if(!$row['email']){	
		$sql = "INSERT INTO customer(`name`, `email`, `pass`, `customer_img`) VALUES ('$user_name', '$user_email', '$user_password', 'default.png')";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);			
		echo "registered";
	} else {				
		echo "1";	 
	}
}
?>