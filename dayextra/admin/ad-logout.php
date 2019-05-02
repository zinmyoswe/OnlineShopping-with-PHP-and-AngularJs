<?php

	session_start();
	unset($_SESSION['admin_id']);
	unset($_SESSION['email']);
	

	header("location: index.php");

?>