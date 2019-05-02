<?php
	session_start();
	include('confs/config.php');
  include('function/function.php');
?>

<!-- <b>

<?php echo $_SESSION['color'];?></b> -->



  <?php include('001header.php'); ?>
  <?php include('004navbar.php'); ?>
 <link rel="stylesheet" type="text/css" href="style.css">
 <script src="angular.min.js"></script>

        
        

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
}

.cart-style{
  height: 50px;
}
.price_dis{
  text-decoration: line-through; 
  
}
.ha {
    
    color: #FFC107;
    font-size: 10px;
}

 .input-hidden {
  position: absolute;
  left: -9999px;
}

input[type=radio]:checked + label>img {
  border: 1px solid #FFC107;
  box-shadow: 0 0 2px 0px #FFC107;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
 border: 1px solid #fff;
  width: 40px;
  height: 17px;
  opacity: 1;
padding: 0;
transform: none;
box-sizing: border-box;
/*  transition: 500ms all;*/
}


.display{
  width: 330px;
  height: 480px;
}
.box2{

   width: 230px;
    height: 100px;
}
.box {
    
    width: 230px;
    height: 85px;

}

</style>




<div class="container cart-style">
  <div class="row">
    <div class="col-md-9">

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
          echo "
                <a href='cart.php'>($itemqty) items in your cart</a>";
        }

        
        ?>

<br>
</div>
    <div class="col-md-3">
    <!--   <h3>MEN'S COLLECTION &raquo;</h3> -->
    </div>
  </div>
</div>

<hr>
 <div class="container">
   <div class="row">
     <div class="col-md-2">

        
       <ul class="cats">
        <li>
            <b><a href="index.php">SHOP BY CATEGORY</a></b>
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
        <?php getpro(); ?>
       <?php getcatpro(); ?>
       <?php getbrandpro(); ?>
       </div>
     </div> <!-- col-md-8 end-->
   </div>
 </div>

<!-- // <?php echo date("D M j G:i:s T Y", time()); ?><br>

<?php echo  date("F j, Y g:i A", time()); ?> -->




<?php include('003latest_product.php'); ?>
<?php include('002footer.php'); ?>
</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

   


  
</html>





        
