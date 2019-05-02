<?php
  session_start();
  include('confs/config.php');
  include('function/function.php');
    include('001header.php');
  include('004navbar.php');
?>

<!-- <b>

<?php echo $_SESSION['color'];?></b> -->
<style type="text/css">
  .badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 60%;
    font-weight: 550;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}
</style>






      <div class="container">

        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-7">
          
          </div>
        </div>
      </div>
        


<?php
          if(isset($_SESSION['cart'])) {

            $total = 0;
            $itemqty = 0;
      
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = "SELECT  product_name, qty, price FROM product WHERE id = $product_id";
            $run = mysqli_query($mysqli,$result);

            if($run){

              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                $itemqty = $itemqty+$quantity;               
              }
            }
          }
          echo "US$ $total<br>";
          echo "<span class='badge progress-bar-danger'>
                $itemqty</span><br>";
        }

        
        ?>


<hr>
 <div class="container" >
   <div class="row">
     <div class="col-md-2">

        
       <ul class="cats">
        <li>
            <b><a href="index.php">All Categories</a></b>
          </li>
          <?php getcat(); ?>
        </ul><br><br>

        <ul class="cats">
        <li>
            <b><a href="index.php">All Brands</a></b>
          </li>
          
           <?php getbrand(); ?>
        </ul>
     
   



     </div> <!-- col-md-4 end-->
     <div class="col-md-10">
      <div class="row">

       <?php
          global $mysqli;
        $i=0;

      
        
          $product_id = array();
          $product_quantity = array();

          $result = mysqli_query($mysqli,"SELECT product.*,order_items.product_id, SUM(order_items.units) AS TotalQuantity
            FROM product 
            LEFT JOIN order_items 
            ON product.id = order_items.product_id
            GROUP BY order_items.product_id
            ORDER BY TotalQuantity DESC");
          // if($result === FALSE){
          //   die(mysql_error());
          // }

          if($result){

            while($obj = mysqli_fetch_object($result)) {

              echo '<div class="col-md-3">';
              echo '<div class="display">';
              
            
         echo '<a href="detail2.php?id='.$obj->id.'"><img src="admin/cover/'.$obj->cover.'" width="220" height="300"/></a><br>';
              // echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              // echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
               if($obj->qty < 5){
                echo "<span class='badge badge-warning pull-left' style='margin-top: 6px;'>Low In Stock</span>";
              }

                  echo '<img src="image/bestseller.png" width="90" height="20" style="margin-left: 65px;">';
  
              echo "<br><br>";

              echo '<div class="box"><p><strong><i><a href="detail2.php?id='.$obj->id.'">'.$obj->product_name.'</a></i></strong></p>';
               echo '<p><strong>US$ '.$obj->price.'</strong></p>';
              echo '</div>';
       
              echo '</div>';
              echo '</div>';

              $i++;
            }
            
          }

          $_SESSION['id'] = $product_id;
       ?>
       </div>
     </div> <!-- col-md-8 end-->
   </div>
 </div>

<?php include('003latest_product.php'); ?>
<?php include('002footer.php'); ?>
</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/.js"></script>


  
</html>

<?php
include('confs/config.php');
$sel = "SELECT product_id, SUM(units) AS TotalQuantity
FROM order_items
GROUP BY product_id
ORDER BY TotalQuantity DESC LIMIT 10";
$run = mysqli_query($mysqli,$sel);
while($row = mysqli_fetch_assoc($run)): ?>
  
 

<?php endwhile; ?>

        
