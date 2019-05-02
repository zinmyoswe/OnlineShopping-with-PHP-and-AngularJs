<?php

	session_start();
	unset($_SESSION['cart']);
	unset($_SESSION['email']);
	unset($_SESSION['shipping']);
	unset($_SESSION['customer_email']);
	unset($_SESSION['customer_id']);
	unset($_SESSION['admin_id']);
	// unset($_SESSION['Email']);
	// unset($_SESSION['SalonID']);
	// unset($_SESSION['SalonName']);
	// unset($_SESSION['TreatmentID']);
	// unset($_SESSION['TreatmentType']);
	// unset($_SESSION['HairStyleID']);
	// unset($_SESSION['HairStyleType']);
	// unset($_SESSION['shipping']);

	header("location: index.php");

?>