<?php
   error_reporting(0);
   
   include('../confs/config.php');

   $total = $_POST['total'];
		
	for($i=1; $i<=$total; $i++)
	{

		  
		  $id = $_POST["id$i"];
		  $color_id = $_POST["color$i"];
		  $size_id = $_POST["size$i"];
		  $size2_id = $_POST["size2$i"];
		  $qty = $_POST["qty$i"];

		

 $sql="INSERT INTO product_attribute(product_id,color,size,size2,qty) 
        VALUES('".$id."','".$color_id."','".$size_id."','".$size2_id."','".$qty."')";

		$sql = $mysqli->query($sql);		
	}
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='product_display2.php';
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

 ?>
