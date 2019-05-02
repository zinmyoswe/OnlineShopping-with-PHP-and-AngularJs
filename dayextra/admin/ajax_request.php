<?php 
	include('../confs/config.php');
	
	if(isset($_POST['category_id']) && $_POST['category_id'] !='')
	{
		$countryID = $_POST['category_id'];
		$sql = "select * from sub_category where category_id = '".$countryID."' order by sub_name ASC";
		$rs = mysqli_query($mysqli,$sql);
		$numRows = mysqli_num_rows($rs);
		
		if($numRows == 0)
		{
			echo 'No Sub Category found';
		}
		else
		{
			echo '<label for="inputEmail3" class="col-sm-2 control-label">Sub Category</label>';
			echo '<div class="col-sm-10">';
			echo '<select class="form-control" name="sub_cat">';
			while($cities = mysqli_fetch_assoc($rs))
			{
				echo '<option value="'.$cities['sub_id'].'">'.$cities['sub_name'].'</option>';
			}
			echo '</select>';
			echo '</div>';
		}
		
	}

?>