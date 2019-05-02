<?php 
    include('../confs/config.php');
    include "header2.php";
?>

<style type="text/css">
    .modal-dialog {
    width: 320px;
    margin: 30px auto;
}
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Product
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
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Product Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application!
          <table class="table">
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>

                <?php 
                $per_page = 6;

                if(isset($_GET['page'])){
                  $page = $_GET['page'];
                }

                else{
                  $page = 1;
                }

                $start_from = ($page-1) * $per_page;
                $query = "SELECT * FROM product
                                   LEFT JOIN categories
                                   ON categories.cat_id = product.categories
                                   LEFT   JOIN brand
                                   ON brand.brand_id = product.brand
                                   LEFT   JOIN supplier
                                   ON supplier.supplier_id = product.supplier
                                   ORDER BY 1 DESC LIMIT $start_from, $per_page";
                $result = mysqli_query($mysqli,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['id'];
                    $product_name = $row['product_name'];
                    $created_date = $row['created_date'];
                    $price = $row['price'];

                ?>

                    <tr>
                      <div class="display">
                      <input type="hidden" name="<?php echo $row['id']; ?>">
                      <td><b><?= $product_name ?></b><br>
                      <i style="color: #aeb6bf">by <?php echo $row['brand_name']; ?> 
                         <small> (in <?php echo $row['cat_name']; ?>)</small></i><br>
                       <p><i>from</i> <?php echo $row['supplier_name']; ?></p>
                       <b style="font-size: 16px;">ITEM LEFT : <?php echo $row['qty']; ?></span></b>

                        <?php
                          include('../confs/config.php');
                          $sql_dis = mysqli_query($mysqli,"SELECT * FROM discount 
                            LEFT JOIN product ON discount.product_id = product.id
                            WHERE product.id = '$id'");
                          $result_dis = mysqli_fetch_assoc($sql_dis);
                           $percentage = $result_dis['percentage'];
                           $discount_id = $result_dis['discount_id'];
                          ?>
                          <?php if( $discount_id == 0){

                          }else{?>
                          <?php
                            $selling_price = $price-($price*($percentage/100))
                          ?>
                          <span style="text-decoration: line-through; color: #DC3545; ">US$<?php echo $price ?></span>
                          US$<?php echo $selling_price; ?>
                          <?php } ?>
                          


                       <?php if($row['qty'] < 5 && $row['qty'] >3){ ?>
                          <span class='label bg-teal' >Low In Stock</span>
                      <?php }elseif($row['qty'] < 1){ ?>
                          <span class='label bg-red' >Out Of Stock</span>
                      <?php }elseif($row['qty'] <= 3 && $row['qty'] >=1){?>
                          <img src="../image/bestseller.png" width="100" height="25" style="margin-bottom: 4px;">
                      <?php }else{} ?>

                      <br><br>
                       <a href="product_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-default" >Edit</a>

              
                      <button class='delete btn btn-warning' id='del_<?= $id ?>'>Delete</button>
                      </td>

                       
                      <td><p><a href="image_attribute.php?id=<?php echo $row['id'] ?>" class="btn bg-orange margin">Image</a></p>

                      <a href="generate.php?id=<?php echo $row['id'] ?>" class="btn btn-default">Color&Size</a>

                         <a href="discount.php?id=<?php echo $row['id'] ?>" class="btn bg-maroon margin">Manage Discount</a>

                      </td>
                    <td><img src="cover/<?php echo $row['cover']; ?>" width="110" height="135"/></td> 
                      </div>
                    </tr>
                
              
                <?php
                    $count++;
                }
                ?>
            </table>
        </div>
        <style type="text/css">
          .pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span:focus, .pagination > li > span:hover {
    z-index: 2;
    color: white;
    background-color: #23527c;
    border-color: whitesmoke;
}
        </style>
        <!-- /.box-body -->
        <div class="box-footer">
          <?php include("pagination.php"); ?>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                     
            </div>
        </div>
        <?php
              $sql ="SELECT distinct a.*,p.color,p.product_id FROM product_attribute p
                     LEFT JOIN attribute a
                     ON p.color = a.attr_id
                     WHERE p.product_id = '13'";

             $result = mysqli_query($mysqli,$sql);

             while($row = mysqli_fetch_assoc($result)){

        ?>
          <?php echo $row['product_id'] ?>;
          <?php echo $row['color'] ?>;
         <?php echo $row['name']; ?>
         <?php echo $row['value']; ?><br>

         <?php } ?>

         <?php
              $sql ="SELECT distinct a.*,p.color,p.product_id FROM product_attribute p
                     LEFT JOIN attribute a
                     ON p.size = a.attr_id
                     WHERE p.product_id = '13'";

             $result = mysqli_query($mysqli,$sql);

             while($row = mysqli_fetch_assoc($result)){

        ?>
          <?php echo $row['product_id'] ?>;
          <?php echo $row['color'] ?>;
         <?php echo $row['name']; ?>
         <?php echo $row['value']; ?><br>

         <?php } ?>
    </div>

       
        <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.3.1.js' type='text/javascript'></script>
        <script src='../bootstrap/js/bootstrap.min.js'></script> 
        <script src='bootbox.min.js'></script>
        <script src='product-script.js' type='text/javascript'></script>
  
<?php include('footer2.php'); ?>


