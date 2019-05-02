<?php include('001header.php'); ?>
<?php include('004navbar.php'); ?>
<?php

  session_start();
  include('confs/config.php');
  
  


?>

<style type="text/css">

	
b{
	color: #5d6d7e;
	
}

h3{
	text-align: center;
	color: #2e405e;
}
.ship{
            width: 245px;
            height: 273px;
           /*background-color: #ebf5fb;*/
           border-radius: 4px;
           border : 1px solid #aed6f1; 
         }
ul.list{
	list-style: none;
	margin: 20px;
	padding: 0;
}
ul.list li{
	overflow: hidden;
	border-bottom: 1px solid #ddd;
	padding-bottom: 10px;
	margin-bottom: 20px;
}
ul.list b{
	display: block;
	font-size: 12px;
	margin-bottom: 5px;
	color: #34495e;
}
ul.list i,ul.list small{
	display: block;
	
}
 

</style>


<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>DELIVERY METHOD</h1>
			<hr>
			<h3>Delivery Option</h3>


  
	  	
	  <div class="row">
	  <div class="col-xs-4">
      <label>
      <input type="radio" name="ship" value="home" id="rdoship_0" required/>
      FREE TO HOME</label><br>

	  <label>
	    <input type="radio" name="ship" value="store" id="rdoship_1" required/>
	    Free In STORE Pick Up</label>
	    <span class="fa fa-shipping-fast"></span>
	    </div>
	    
		<script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#rdoship_0").change(function(){
			var getCountryID = $(this).val();
			
			if(getCountryID !='')
			{
				$("#loader").show();
				$(".cities-container").html("");
				
				$.ajax({
					type:'post',
					data:{country_id:getCountryID},
					url: 'shipping_ajax_request.php',
					success:function(returnData){
						$("#loader").hide();	
						$(".cities-container").html(returnData);
					}
				});	
			}
			
		})
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#rdoship_1").change(function(){
			var getCountryID = $(this).val();
			
			if(getCountryID !='')
			{
				$("#loader").show();
				$(".cities-container").html("");
				
				$.ajax({
					type:'post',
					data:{country_id:getCountryID},
					url: 'store_ajax_request.php',
					success:function(returnData){
						$("#loader").hide();	
						$(".cities-container").html(returnData);
					}
				});	
			}
			
		})
	});
</script>

	   


                          </div><!--  row end -->
                          <hr>
                         
                              <div class="col-md-12">
                         <div class="cities-container">
                          
                        </div>
                        </div>
                        

                        
                   <div class="row">

                <?php
                $email = $_SESSION['email'];
                $query = "SELECT * FROM shipping WHERE shipping_type= 'home'
                         and email = '$email' ORDER BY shipping_id DESC";
                $result = mysqli_query($mysqli,$query);
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row['shipping_id'];
                ?>
     
                      
                <div class="col-md-4" style="margin-bottom: 8px">
                <div class="ship">
                <table class="table">
                <input type="hidden" value="<?php echo $row['shipping_id'] ?>">
                 <tr>
                 	<td>Name</td>
                 	<td><small><?php echo $row['full_name'] ?></small></td>
                 </tr>
                  <tr>
                 	<td>Address</td>
                 	<td><small><?php echo $row['street_address'] ?></small></td>
                 </tr>
                 <tr>
                 	<td>Phone</td>
                 	<td><small><?php echo $row['phone'] ?></small></td>
                 </tr>
                  <tr>
                 	<td>City&Country</td>
                 	<td><small><?php echo $row['city'] ?>,<?php echo $row['state'] ?><br>,In <?php echo $row['country'] ?></small></td>
                 </tr>
                </table>
              
                </div>
                
                <br>
                <a href="payment_info.php?id=<?php echo $row['shipping_id'] ?>" class="btn btn-warning" style="margin: 0px 0px">Deliver to this address</a><br>
               
                <tr>  
                       <td> <a href="shipping_edit.php?id=<?php echo $row['shipping_id'] ?>" class="btn btn-default" style="margin-top: 4px; margin-left: 35px">Edit</a></td>
                       <td><button class='delete btn btn-default' id='del_<?= $id ?>' style="margin-top: 4px; margin-right: 25px" >Delete</button></td>
                       
                    </tr>             
                </div>
                <?php } ?>
                
                </div><br><br>
                      
	 
		</div><!--  col-md-8 end -->
		     <style type="text/css">
         .table td, .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #fff;
}
        .securepayment{
          font-family: "adihausregular",Helvetica,Verdana,sans-serif;
          font-size: 14px;
          line-height: 20px;
          color: #000;
          font-weight: normal;
          padding-top: 0px;
          margin-top: 4px;
        }
        .order-sum{
          background-color: #f2f3f4;
          width: auto;
          height: auto;


        }
        .inner-order{
          background-color: #fff;
           margin-bottom: 20px;

        }
        .shipping_inner{
          font-size: 14px;
          text-align: left;
          padding-top: 0;
          background-color: #fff;
          margin-bottom: 20px;
        }
        .shipping_inner_style{
           padding-left: 8px;
          margin-left: 10px;
        }
        .shipping_inner b{
  display: block;
  font-size: 14px;
  margin-bottom: 5px;
  color: #34495e;
}

      </style>
    <div class="col-md-4">
      <div class="order-sum">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-8">
              <div class="inner-order">
  <?php
      if(isset($_SESSION['cart'])) {

            $total = 0;
            $itemqty = 0;
           
          
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = "SELECT  product_name, qty, price,cover FROM product WHERE id = $product_id";
            $run = mysqli_query($mysqli,$result);
               
            if($run){

                echo '<ul class="list">';
              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                $itemqty = $itemqty+$quantity;
                
                
               echo '<li>';
               echo '<img src="admin/cover/'.$obj->cover.'" width="100" height="140" align="right" align="right" alt="">';
                echo '<b>'.$obj->product_name.'</b>';
                echo '<h6 class="my-0">US$'.$obj->price.'</h6>';
                echo '<small>quantity: '.$quantity.'</small>';
                echo '<a href="cart.php" style="font-size: 12px;">Edit</a>';
                // echo 'amount: US$'.$cost.'<br>';
                echo '</li>';
              }
              echo '</ul>';
            }

          }

          echo '<table class="table">';
          echo '<tr>';
          echo '<td>TOTAL('.$itemqty.')</td>';
           echo '<td></td>';
           echo '<td></td>';
           echo '<td></td>';
          echo '<td><strong>US$'.$total.'</strong></td>';
          echo '</tr>';
          
          echo '</table>';
          echo '<br>';
          
        }
        ?>

    
        </div><!--  inner order end -->
        
          </div>

        </div>

      </div> <!-- ====== -->

        </div>
         <div class="securepayment"><span class="fa fa-lock"></span> All transactions are safe and secure</div>
         <br>
         <img src="https://www.adidas.com/static/on/demandware.static/-/Sites-adidas-US-Library/en_US/dw88ec105e/us_payment_methods.png" height="40px">
    </div><!--  col-md-4 end -->
	</div> <!-- row end -->
	<div class="row"></div><!-- row end -->
</div>

<br><br><br>
<?php include('002footer.php'); ?>

<script src='jquery-3.3.1.js' type='text/javascript'></script>
<script src='bootbox.min.js'></script>
<script src='shipping_del_script.js' type='text/javascript'></script>

</body>
</html>

