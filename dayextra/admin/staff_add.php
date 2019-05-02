
<?php
   error_reporting( ~E_NOTICE ); // avoid notice
  
  include('../confs/config.php');

  if(isset($_POST['btnsave']))
  {
    $name = $_POST['name'];// user name
    $email = $_POST['email'];
    $role = $_POST['role'];// user email
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];
    
    
    if(empty($name)){
      $errMSG = "Please Enter Name.";
    }
    else if(empty($role)){
      $errMSG = "Please Choose Role.";
    }
    
    else if(empty($imgFile)){
      $errMSG = "Please Select Image File.";
    }
       else if(empty($password)){
      $errMSG = "Please Enter Password.";
    }
       else if(empty($cpassword)){
      $errMSG = "Please Enter Confirm Password.";
    }
        else if($password !== $cpassword){
      $errMSG = "Password and Confirm Password are not match!.";
    }
         else if($password.length<6){
      $errMSG = "Minimum 6 character required.";
    }
    else
    {
      $upload_dir = 'user_images/'; // upload directory
  
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
    
      // valid image extensions
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    
      // rename uploading image
      $userpic = rand(1000,1000000).".".$imgExt;
        
      // allow valid image file formats
      if(in_array($imgExt, $valid_extensions)){     
        // Check file size '5MB'
        if($imgSize < 5000000)        {
          move_uploaded_file($tmp_dir,$upload_dir.$userpic);
        }
        else{
          $errMSG = "Sorry, your file is too large.";
        }
      }
      else{
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";    
      }
    }
    
    
    // if no error occured, continue ....
    if(!isset($errMSG))
    {
      $sql = "INSERT INTO admin(admin_name,admin_email,admin_password,role,admin_img) VALUES('$name','$email','$password','$role','$userpic')";
      $run = mysqli_query($mysqli,$sql);


      if($run)
      {
        $successMSG = "new record succesfully inserted ...";
        header("location:manage_staff.php"); // redirects image view page after 5 seconds.
      }
      else
      {
        $errMSG = "error while inserting....";
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
              <h3 class="box-title">NEW STAFF ADD FORM</h3>
            </div>
            <!-- /.box-header -->
            <?php
              if(isset($errMSG)){
                  ?>
                        <div class="alert alert-danger">
                          <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                        </div>
                        <?php
              }
              else if(isset($successMSG)){
                ?>
                    <div class="alert alert-success">
                          <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
                    </div>
                    <?php
              }
              ?>   
            <!-- form start -->
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">AdminName</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="Admin Name"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email"  class="form-control" id="inputEmail3" placeholder="Admin@gmail.com"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->


                

                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">AdminRole</label>
                  <div class="col-sm-10">
                  <select id="role" class="form-control" name="role">
                                                <option>--Choose--</option>
                                                <option>Founder & CEO</option>
                                                <option>Manager</option>
                                                <option>Admin</option>
                                          </select>  
                                        
                  </div>
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                  <input type="password" name="password"  class="form-control" id="inputEmail3" placeholder="Password"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                     <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
                  <div class="col-sm-10">
                  <input type="password" name="cpassword"  class="form-control" id="inputEmail3" placeholder="Confirm Password"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                  

                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                            <input type="file" name="user_image" >
                            </div>
                            </div>
                            <!-- FORM ENDS -->

               
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="btnsave" class="btn btn-warning pull-right">Save</button>
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

