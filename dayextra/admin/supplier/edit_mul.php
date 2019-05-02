<?php
	
	error_reporting(0);

	include_once 'config.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='index.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Multiple Insert, Update, Delete(CRUD) using PHP & MySQLi</title>
<!--<link rel="stylesheet" href="style.css" type="text/css" />-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" href="http://cleartuts.blogspot.com" title='Programming Blog'>CLEARTUTS</a>
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/CRUD">CRUD</a>
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/PDO">PDO</a>
            <a class="navbar-brand" href="http://cleartuts.blogspot.com/search/label/jQuery">jQuery</a>
        </div>
 
    </div>
</div>
<div class="clearfix"></div>

<div class="container">
<a href="generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="update_mul.php">
<table class='table table-bordered'>
<tr>
<th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Logo</th>
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$mysqli->query("SELECT * FROM supplier WHERE supplier_id=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="id[]" value="<?php echo $row['supplier_id'];?>" />
		<input type="text" name="name[]" value="<?php echo $row['supplier_name'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="email[]" value="<?php echo $row['email'];?>" 
		class="form-control" />
		<input type="text" name="add[]" value="<?php echo $row['address'];?>" 
		class="form-control" />
		<input type="text" name="phone[]" value="<?php echo $row['phone'];?>" 
		class="form-control" />
		<input type="text" name="cover[]" value="<?php echo $row['cover'];?>" 
		class="form-control" />
		</td>
		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="2">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>