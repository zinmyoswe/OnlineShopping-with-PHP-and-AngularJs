<?php 
include('../confs/config.php');
include('header.php');
?>
<?php
	if(isset($_POST['search'])){
		$fDate = $_POST['fDate'];
		$tDate = $_POST['tDate'];
		$fromdate = date('Y-m-d',strtotime($fDate));
		$todate = date('Y-m-d',strtotime($tDate));
		$sql = "SELECT * FROM orders 
		WHERE created_date Between '$fromdate' and '$todate'
		ORDER BY created_date ASC";
		
	}else{
		
	}

	$run = mysqli_query($mysqli,$sql);

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
<table class="table">
	<form method="post" action="saleview.php">
		<tr>
			<td align="right">From Date</td>
			<td><input type="text" name="fDate" value="<?php echo date("Y-m-j") ?>"></td>

			<td align="right">To Date</td>
			<td><input type="text" name="tDate" value="<?php echo date("Y-m-j") ?>"></td>
			<td><input type="submit" name="search" value="Filter" class="btn btn-warning"></td>
		</tr>
	</form>

	
	<tr>
	<div class="bin">
		<td><img src="cover/l.png" width="180" height="150"></td>
		<td>	
			<h5><b>CAPITAL-A FASHION SHOP</b></h5><br>
	From Date : <?php echo "$fromdate"; ?><br>
	To Date : <?php echo "$todate"; ?>
		</td>
		
	</tr>
	
	</table>
	<table class="table table-bordered">
	<tr>
		<th><b>OrderID</b></th>
		<th><b>Name</b></th>
		<th><b>Total_amt</b></th>
		<th><b>Total_qty</b></th>
		<th><b>Time</b></th>
	</tr>
	
	<?php while($row = mysqli_fetch_assoc($run)): ?>
		<tr>
		
			<td><?php echo $row['order_id'] ?></td>
			
			<td><?php echo $row['customer'] ?></td>
			<td>US$ <?php echo $row['total_amt'] ?></td>
			<td><?php echo $row['total_qty'] ?></td>
			<td><?php echo $row['created_date'] ?></td>
		
		</tr>
	<?php endwhile; ?>
	<td colspan="4">
		<form action="excelExporter.php" method="post">
			
		</form>
	</td>
</table>

</div>
	</div>
</div>
