<?php 
    include('../confs/config.php');
    include "header2.php";
?>

<style type="text/css">
    .modal-dialog {
    width: 300px;
    margin: 30px auto;
}
</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Category
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
      <div class="col-md-11">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Category List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="box-body">

            <a href="cat-list.php" class="btn btn-large btn bg-teal margin"><i class="fa fa-plus-square"></i> &nbsp; Add New Category</a>
        <br><br>

            <table class='table' >
                <tr style='background: whitesmoke;'>
                    <th>No</th>
                    <th>Title</th>
                    <th>Operation</th>
                </tr>

                <?php 
                $query = "SELECT * FROM categories order by cat_id desc";
                $result = mysqli_query($mysqli,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['cat_id'];
                    $cat_name = $row['cat_name'];
                    $created_date = $row['created_date'];

                ?>
                
                    <tr>
                        <td align='center'><?= $count ?></td>
                        <td><a href='<?= $created_date ?>' target='_blank'><?= $cat_name ?></a></td>
                        <td align='center'>
                            <a href="cat-edit.php?id=<?php echo $row['cat_id']?>" class="btn btn-default">Edit</a>

                            <button class='delete btn btn-warning' id='del_<?= $id ?>'>Delete</button>

                        </td>
                        
                    </tr>
                <?php
                    $count++;
                }
                ?>
            </table>

        </div>
        <!-- /.box-body -->
       
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
       </div> <!--  col-md-5 end -->

        
    </div> <!-- row ends -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
<!doctype html>
<html>
    <head>
        <title>Confirmation alert Before Delete record with jQuery AJAX</title>
        <link href='cat.css' rel='stylesheet' type='text/css'>
        <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.3.1.js' type='text/javascript'></script>
        <script src='../bootstrap/js/bootstrap.min.js'></script> 
        <script src='bootbox.min.js'></script>
        <script src='cat-script.js' type='text/javascript'></script>
    </head>
    <body>
        
       
        
    </body>
</html>

<?php include('footer2.php'); ?>