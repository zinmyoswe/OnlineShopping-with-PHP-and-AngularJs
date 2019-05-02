<?php
	include('confs/config.php');
	$query = "select * from product";
	$result = mysqli_query($mysqli, $query);

	//count the total records

	$total_posts = mysqli_num_rows($result);

	//Using ceil function to divide the total records on per page

	$total_pages = ceil($total_posts / $per_page);

	//Going to first page

	echo"
	
	<center><ul class='pagination'>
	<li class='page-item'><a  class='page-link' href ='product.php?page=1'>&laquo;</a></li>

	";

	echo "<li class='page-item active'>";
	for ($i= 1; $i<=$total_pages; $i++){
		echo "<a href='product.php?page=$i' class='page-link'>$i</a></li>";
	}

	//Going to last page

	echo "<li class='page-item'><a href='product.php?page=$total_pages'  class='page-link'>&raquo;</a></li></ul></center>
		

	";


?>

