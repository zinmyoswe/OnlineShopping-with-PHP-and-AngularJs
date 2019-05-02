<?php
    include('../confs/config.php');

	$id = $_GET['id'];
	$result = mysqli_query($mysqli,"SELECT * FROM categories WHERE cat_id=$id ");
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	form label{
		display: block;
		margin-top: 8px;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1>Edit Category</h1>



	<form action="cat-update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['cat_id']?>">

		<label for="name">Category Name</label>
		<input type="text" name="name" id="name" value="<?php echo $row['cat_name']?>">



		<br><br>

		<input type="submit" value="Update Category">
	</form>



</body>
</html>