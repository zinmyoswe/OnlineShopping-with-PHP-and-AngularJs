<?php
    session_start();
   include('../confs/config.php');
   include('header2.php');
?>
<!-- =============================================== -->
<link rel="stylesheet" type="text/css" href="css/201.css">
<link rel="stylesheet" type="text/css" href="css/display.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product 2nd Registration
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
       <div class="row">
    <div class="col-md-6">
      <!-- Default box -->
      <div class="box box-warning">
       
        <div class="box-header with-border">
          <h3 class="box-title">Product Detail</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
      
      
      <table class="table">
      <?php
        $sql = "SELECT * FROM product 
                   LEFT JOIN categories
                                   ON categories.cat_id = product.categories
                                   LEFT JOIN sub_category
                                   ON categories.cat_id = sub_category.category_id
                                   LEFT   JOIN brand
                                   ON brand.brand_id = product.brand
                                   LEFT   JOIN supplier
                                   ON supplier.supplier_id = product.supplier
        ORDER BY id DESC LIMIT 1";
        $run = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_assoc($run);
      ?>
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        <tr>
          <td><img src="cover/<?php echo $row['cover']?>" width="200" height="200"></td>
          <td><b><?php echo $row['product_name'] ?></b><br>
            
          <i style="color: #17a589;"><b>US$<?php echo $row['price'] ?></b></i><br>
          <table class="table">
             <tr>
              <td>ProductID :</td>
              <td><span class="badge progress-bar-warning"><b><?php echo $row['id'] ?></b></span></td>
            </tr>
            <tr>
              <td>Category :</td>
              <td><b><?php echo $row['cat_name'] ?></b></td>
            </tr>
            <tr>
              <td>Brand :</td>
              <td><b><?php echo $row['brand_name'] ?></b></td>
            </tr>
            <tr>
              <td>Supplier :</td>
              <td><b><?php echo $row['supplier_name'] ?></b></td>
            </tr>
          </table>
           
          </td>
          <td></td>
        </tr>
        
      </table>
      <hr>
      <div class="notice notice-default">
        <strong><i class="fa fa-check-square-o"> </i> Product Successfully Added</strong>
        </div>
          <div class="notice notice-warning">
        <strong>Dear ADMIN,</strong><br>
        <p>The product specification needs to continue to register.</p>
        <p>It is require help,<a href="help.php"> CLICK HERE</a></p>
        </div>
  
          



 <div class="order">

  
 </div>


 
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->

  
      </div>
      <!-- /.box -->
        </div><!--  col-md-6 end -->




    <div class="col-md-6">
      <!-- Default box -->
      <div class="box box-danger">
       
        <div class="box-header with-border">
          <h3 class="box-title">Image Registration</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
      
      
     <?php
   include('../confs/config.php');
    $sql = "SELECT * FROM product
        ORDER BY id DESC LIMIT 1";
        $run = mysqli_query($mysqli,$sql);
        $row2 = mysqli_fetch_assoc($run);

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
   <h3 align="center" style="color: #566573">Multiple Image Upload</h3>
   <hr>
   <?php 
    if(isset($successMsg) && !empty($successMsg))
    {
      echo "<div class='alert alert-success'>";
      foreach($successMsg as $sMsg)
      {
        echo "<strong><i class='fa fa-check-square-o'> </i></strong>".$sMsg."<br>";
      }
      echo "</div>";
    }
  ?>
  <?php 
    if(isset($errorMsg) && !empty($errorMsg))
    {
   
      echo "<div class='alert alert-danger'>";
      foreach($errorMsg as $eMsg)
      {
        echo "<strong><i class='fa fa-exclamation-triangle'></i></strong>".$eMsg."<br>";
      }

      echo "</div>";
    }
  ?>
      
   <form name="uploadFile" action="" method="post" enctype="multipart/form-data" id="upload-form">
            <?php 
              $result = mysqli_query($mysqli,"SELECT * FROM product
        ORDER BY id DESC LIMIT 1");
              $row = mysqli_fetch_assoc($result);
            ?>
                    
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $row['id']?>" />

                   <div class="add-more-cont"><a id="moreImg"><img src="img/attach file.gif" width="125" height="125">PLUS</a></div>

    <div class="input-files">
    <label>Sub Images</label>
    <input type="file" name="image_upload-1">
    </div>
    <br>
    <input type="submit" name="submit" value="save" class="btn btn-warning">
  

  
    
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="generate.php?id=<?php echo $row['id'] ?>" class="btn btn-warning pull-right">Continue</a>
        </div>
        <!-- /.box-footer-->
        </form>
  
      </div>
      <!-- /.box -->
        </div><!--  col-md-6 end -->
    </div><!--  row end -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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
<?php include('footer2.php'); ?>

