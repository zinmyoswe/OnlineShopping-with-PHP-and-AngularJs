<?php

	error_reporting( ~E_NOTICE );
	
	include('../confs/config.php');
	
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "SELECT * FROM admin WHERE admin_id = '$id'";
		$run = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_assoc($run);
	}
	else
	{
		header("Location: index.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
    	$name = $_POST['name'];// user name
    	$role = $_POST['role'];// user email
			
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
					
		if($imgFile)
		{
			$upload_dir = 'user_images/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$row['admin_img']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}	
		}
		else
		{
			// if no image selected the old image remain as it is.
			$userpic = $row['admin_img']; // old image from database
		}	
						
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$sql2 = "UPDATE admin SET admin_name='$name',role='$role',admin_img='$userpic' WHERE admin_id=$id";
			$run2 = mysqli_query($mysqli,$sql2);
		
				
			if($run2){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='manage_staff.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}
		
		}
		
						
	}
	
?>
<?php include('header2.php'); ?>
<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Staff
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

   <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">STAFF UPDATE FORM</h3>
            </div>
            <!-- /.box-header -->
   <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
 

 <div class="box-body">
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">AdminName</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" value="<?php echo $row['admin_name'] ?>" /> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                

                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">AdminRole</label>
                  <div class="col-sm-10">
                  <select id="role" class="form-control" name="role">

                                                <option><?php echo $row['role'] ?></option>
                                                <option>Founder & CEO</option>
                                                <option>Manager</option>
                                                <option>Admin</option>
                                          </select>  
                                        
                  </div>
                </div>
                <!-- FORM ENDS -->

                  

                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                    <p><img src="user_images/<?php echo $row['admin_img']; ?>" height="150" width="150" /></p>
                            <input type="file" name="user_image" >
                            </div>
                            </div>
                            <!-- FORM ENDS -->

               
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="manage_staff.php" class="btn btn-default">Back</a>
                <button type="submit" name="btn_save_updates" class="btn btn-warning pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </div> <!-- col-md-6 ends-->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


                

<script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


  <?php include('footer2.php') ?>


