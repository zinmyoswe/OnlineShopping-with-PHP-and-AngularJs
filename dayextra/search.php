<?php
	session_start();
	include('confs/config.php');
  include('001header.php');
  include('004navbar.php');
  include('function/function.php');
?>

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
   <div class="container">
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
   $i=0;
    if(isset($_GET['search'])){
      $search = $_GET['user_query'];
    

    $get_pro = "SELECT * FROM product WHERE product_name LIKE '%$search%'";
    $result = mysqli_query($mysqli,$get_pro);

    while($obj = mysqli_fetch_object($result)) {

              echo '<div class="col-md-3">';
              echo '<div class="display">';
              
            
              echo '<img src="admin/cover/'.$obj->cover.'" width="210" height="290"/>';
              // echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              // echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong><i><a href="detail.php?id='.$obj->id.'">'.$obj->product_name.'</a></i></strong></p>';
               echo '<p><strong>US$ '.$obj->price.'</strong></p>';
              echo '<p><strong>Item Left</strong>: '.$obj->qty.'</p>';
              

              if($obj->qty < 3){
                echo '<img src="image/bestseller.png" width="100" height="25"> <br>';
              }

              if($obj->qty > 0){
                // echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }

              else {
                echo 'Out of stock!<br>';
              }

              

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
   
   
  <?php include('002footer.php');
?>


