<?php
   include('../confs/config.php');
   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product where id = $id");
   $row = mysqli_fetch_assoc($result);

   if(isset($_POST['submit']))
  {

    $id = $_POST['id'];
    $targetFolder = "uploads";
    $errorMsg = array();
    $successMsg = array();



    foreach($_FILES as $file => $fileArray)
    {
      
      if(!empty($fileArray['name']) && $fileArray['error'] == 0)
      {
        $getFileExtension = pathinfo($fileArray['name'], PATHINFO_EXTENSION);;

        if(($getFileExtension =='jpg') || ($getFileExtension =='jpeg') || ($getFileExtension =='png') || ($getFileExtension =='gif') || ($getFileExtension =='PNG'))
        {
          if ($fileArray["size"] <= 5000000) 
          {
            $breakImgName = explode(".",$fileArray['name']);
            $imageOldNameWithOutExt = $breakImgName[0];
            $imageOldExt = $breakImgName[1];

            $newFileName = strtotime("now")."-".str_replace(" ","-",strtolower($imageOldNameWithOutExt)).".".$imageOldExt;

            
            $targetPath = $targetFolder."/".$newFileName;

            
            if (move_uploaded_file($fileArray["tmp_name"], $targetPath)) 
            {
              
              $qry ="insert into image_attributes (product_id,image) values ('".$id."','".$newFileName."')";


              $rs  = mysqli_query($mysqli, $qry);

              if($rs)
              {
                $successMsg[$file] = "Image is uploaded successfully";
              }
              else
              {
                $errorMsg[$file] = "Unable to save ".$file." file ";
              }
            }
            else
            {
              $errorMsg[$file] = "Unable to save ".$file." file ";    
            }
          } 
          else
          {
            $errorMsg[$file] = "Image size is too large in ".$file;
          }

        }
        else
        {
          $errorMsg[$file] = 'Wrong image format!'.$file.'Try png,jpg , jpeg, and gif!';
        } 
      }
      
    }
  }
?>
<link rel="stylesheet" type="text/css" href="css/201.css">
<?php include('header.php'); ?>
<div class="form-container">

  <?php 
    if(isset($successMsg) && !empty($successMsg))
    {
      echo "<div class='success-msg'>";
      foreach($successMsg as $sMsg)
      {
        echo $sMsg."<br>";
      }
      echo "</div>";
    }
  ?>


  <?php 
    if(isset($errorMsg) && !empty($errorMsg))
    {
   
      echo "<div class='notice notice-success'>";
      foreach($errorMsg as $eMsg)
      {
        echo "<strong>".$eMsg."</strong><br>";
      }

      echo "</div>";
    }
  ?>

  
  <form name="uploadFile" action="" method="post" enctype="multipart/form-data" id="upload-form">

  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
            <?php 

              $id = $_GET['id'];
              $result = mysqli_query($mysqli,"SELECT * FROM product where id = $id");
              $row = mysqli_fetch_assoc($result);
            ?>
                    
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $row['id']?>" />

                     <label>name : </label>
                    <b><input type="text" name="product_name"  class="form-control" value="<?php echo $row['product_name']?>" disabled/></b>


    <div class="add-more-cont"><a id="moreImg"><img src="img/attach file.gif" width="100" height="100">Add Image</a></div>

    <div class="input-files">
    <label>Sub Images</label>
    <input type="file" name="image_upload-1">
    </div>
    <input type="submit" name="submit" value="submit" class="btn btn-info">
    <a href="product_display2.php" class="btn btn-info">Back</a>

    </div>
    </div>
  </div><!-- end of row -->
  </form>

  <div>
    
  </div>

  <img src="cover/<?php echo $row['cover'] ?>" width="250" height="290">
                    
                    <?php
                      $sql2 = "SELECT * FROM image_attributes
                              WHERE product_id = $id";
                      $run = mysqli_query($mysqli,$sql2);
                    while($row2 = mysqli_fetch_assoc($run)){
                    ?>
                    <img src="uploads/<?php echo $row2['image'] ?>" width="250" height="290">
                    <?php } ?>


  </div>
  
  <script src="jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      var id = 1;
      $("#moreImg").click(function(){
        var showId = ++id;
        if(showId <=10)
        {
          $(".input-files").append('<input type="file" name="image_upload-'+showId+'">');
          
        }
      });
    });
  </script>
  </body>

   <?php include('footer.php'); ?>