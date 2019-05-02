<?php 
include('../confs/config.php');
include('header2.php');
?>



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Sub_Category
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

      <!-- Default box -->
      <div class="row">
      <div class="col-md-5">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sub_Category List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="box-body">

<?php
  
  $result = mysqli_query($mysqli,"SELECT * FROM categories 
                                    ORDER BY cat_id DESC");
?>
<style type="text/css">
  ul{
    list-style: none;
  }
 hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #001f3f ;
}
h4{
  color: #85929e;
}


    .modal-dialog {
    width: 300px;
    margin: 30px auto;
}

</style>
                    <ul>
            
                    <?php while($cat = mysqli_fetch_array($result)):?>
                    <li>
                      <h4><b><?php echo $cat['cat_name']?></b></h4>

                        <table class="table">
                        <?php
                          $cat_id = $cat['cat_id'];
                          $subs = mysqli_query($mysqli,"SELECT categories.*,sub_category.sub_name,sub_category.sub_id FROM categories LEFT JOIN sub_category ON categories.cat_id = sub_category.category_id WHERE sub_category.category_id = $cat_id");
                          while($sub = mysqli_fetch_assoc($subs)):
                            $id = $sub['sub_id'];
                            $sub_name = $sub['sub_name'];
                            $created_date = $sub['created_date'];
                          ?>
                          <tr>
                        
                        <td><span class="fa fa-angle-double-right "></span>
                          <?= $sub_name ?></td>
                        <td align='center'>
                            <a href="cat-edit.php?id=<?php echo $row['sub_id']?>" class="btn btn-default">Edit</a>

                            <button class='delete btn btn-warning' id='del_<?= $id ?>'>Delete</button>

                        </td>
                        
                    </tr>
                        <?php endwhile; ?>
                        </table>
                    </li>
                    <hr>
                    <?php endwhile; ?>
                    
                    </ul>                  
        </div>
        <!-- /.box-body -->
       
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
       </div> <!--  col-md-5 end -->

        <!-- Default box -->
        <div class="col-md-7">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">New Sub_Category Registration</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form method="post" action="sub-add.php" enctype="multipart/form-data">
<!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SubCategory</label>
                  <div class="col-sm-10">
                  <input type="text" name="sub_name"  class="form-control" id="inputEmail3" placeholder="SubCategoryname"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->
               <br><br>
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">CategoryName</label>
                  <div class="col-sm-10">
                  <select name="category_id" class="form-control" id="inputEmail3" >
                    <option value="0">Choose Category</option>
                    <?php 
                      
                      $result = $mysqli->query("SELECT * FROM categories ");

                      while($row = mysqli_fetch_array($result)):
                    ?>
                    <option value="<?php echo $row['cat_id']?>">
                      <?php echo $row['cat_name'] ?>
                    </option>
                    <?php endwhile ?>
                  </select>
                  </div>
                </div>
                <!-- FORM ENDS -->
                
  <br><br>
  
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" value="Add SubCategory" class="btn btn-warning pull-right">
</form>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </div> <!-- col-md-4 end -->
    </div> <!-- row ends -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

<!doctype html>
<html>
    <head>
        <title>Confirmation alert Before Delete record with jQuery AJAX</title>
        <link href='.css' rel='stylesheet' type='text/css'>
        <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.3.1.js' type='text/javascript'></script>
        <script src='../bootstrap/js/bootstrap.min.js'></script> 
        <script src='bootbox.min.js'></script>
        <script src='sub-script.js' type='text/javascript'></script>
    </head>
    <body>
        
       
        
    </body>
</html>
    <?php include('footer2.php'); ?>

