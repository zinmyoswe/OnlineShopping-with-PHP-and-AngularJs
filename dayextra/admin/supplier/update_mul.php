<?php
include_once 'config.php';
$id = $_POST['id'];
$n = $_POST['name'];
$e = $_POST['email'];
$a = $_POST['add'];
$ph = $_POST['phone'];
$c = $_POST['cover'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$mysqli->query("UPDATE supplier SET name='$n[$i]', email='$e[$i]',address='$a[$i]',phone='$ph[$i]',cover='$c[$i]' WHERE id=".$id[$i]);
}
header("Location: index.php");
?>