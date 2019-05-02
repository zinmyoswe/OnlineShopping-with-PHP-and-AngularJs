<?php
include_once 'dbcon.php';
$id = $_POST['id'];
$supplier_name = $_POST['supplier_name'];
$email = $_POST['email'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE supplier SET supplier_name='$supplier_name[$i]', email='$email[$i]' WHERE supplier_id=".$id[$i]);
}
header("Location: index.php");
?>