
<?php
   include('../confs/config.php');
?>

<?php include('header2.php'); ?>
<!-- =============================================== -->
<script src="tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
  selector: 'textarea',
  height: 400,
  theme: 'modern',
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
    </script>
  <script src="jquery.tinymce.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Color & Size
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

   <div class="col-md-11">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">NEW COLOR & SIZE ADD FORM</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="color_size.php" enctype="multipart/form-data">
              <div class="box-body">
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                  <input type="text" name="value"  class="form-control" id="inputEmail3" placeholder="Color Or Size Name"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Color & Size</label>
                  <div class="col-sm-10">
                  <select id="name" class="form-control" name="name">
                                                <option>Choose...</option>
                                                <option>color</option>
                                                <option>size</option>
                                                <option>size2</option>
                                                <option>size3</option>
                                          </select>  
                                          
                  </div>
                </div>

                 
                <!-- FORM ENDS -->


                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                            <input type="file" name="cover" >
                            </div>
                            </div>
                            <!-- FORM ENDS -->

               
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" name="submit" class="btn btn-warning pull-right" style="margin: 0 4px">Save</button>
                <a href="home.php" class="btn btn-default pull-right" >Back</a>
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


  </div>
  <?php include('footer2.php') ?>

<?php

    if(isset($_POST['submit'])){

      $name = $_POST['name'];
      $value = $_POST['value'];
      $cover = $_FILES['cover']['name'];
      $tmp = $_FILES['cover']['tmp_name'];
     

      // $product_image2 = $_FILES['product_image2']['name'];
      // $tmp2 = $_FILES['product_image2']['tmp_name'];

      // $product_image3 = $_FILES['product_image3']['name'];
      // $tmp3 = $_FILES['product_image3']['tmp_name'];

      
      // move_uploaded_file($tmp,"cover/$product_image");
      // move_uploaded_file($tmp2,"cover/$product_image2");
      // move_uploaded_file($tmp3,"cover/$product_image3");
      
      if($cover){
        move_uploaded_file($tmp, "images/$cover");

      }
      
    
      $sql = "INSERT INTO attribute(name,value,attr_img)
                   VALUES('$name','$value','$cover')";

      $run=mysqli_query($mysqli,$sql);
      
      if($run){

        echo "<script>alert('Color Size have been inserted')</script>";
        echo "<script>window.open('home.php','_self')</script>";
      }
      else{
        echo "error";
      }

    
    }
?>