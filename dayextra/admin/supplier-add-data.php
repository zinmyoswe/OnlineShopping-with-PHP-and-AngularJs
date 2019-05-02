<?php
error_reporting(0);
include_once 'supplier/config.php';

if(isset($_POST['save_mul']))
{		
	$total = $_POST['total'];
		
	for($i=1; $i<=$total; $i++)
	{
		$n = $_POST["name$i"];
		$e = $_POST["email$i"];
        $a = $_POST["add$i"];
        $ph = $_POST["phone$i"];
        $c = $_POST["cover$i"];		
		$sql="INSERT INTO supplier(supplier_name,email,address,phone,supplier_cover) 
        VALUES('".$n."','".$e."','".$a."','".$ph."','".$c."')";

		$sql = $mysqli->query($sql);		
	}
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='supplier-list.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while inserting , TRY AGAIN');
		</script>
        <?php
	}
}
?>

<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>



<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <table>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
	<table class='table table-bordered'>
    
    <tr>
    <th>##</th>
   <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Logo</th>

    </tr>
	<?php
	for($i=1; $i<=$_POST["no_of_rec"]; $i++) 
	{
		?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="name<?php echo $i; ?>" placeholder="name" class='form-control' /></td>
        <td><input type="text" name="email<?php echo $i; ?>" placeholder="email" class='form-control' /></td>
         <td><textarea type="text" name="add<?php echo $i; ?>" placeholder="address" class='form-control' /></textarea></td>
          <td><input type="text" name="phone<?php echo $i; ?>" placeholder="phone" class='form-control' /></td>
           <td><input type="text" name="cover<?php echo $i; ?>" placeholder="cover" class='form-control' /></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="6">
    <button type="submit" name="save_mul" class="btn btn-warning pull-right">Insert all Records</button> 

    <a href="index.php" class="btn btn-large btn-default pull-right"> Back to index</a>
    </td>
    </tr>
    </form>
    </table>
	<?php
}
?>

