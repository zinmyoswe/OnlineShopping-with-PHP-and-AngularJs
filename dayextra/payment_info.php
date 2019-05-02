
<?php
  session_start();
  include('confs/config.php');
  
  

  $id = $_REQUEST['id'];
  
  $sql = "SELECT * FROM shipping where shipping_id=$id";
  $run =mysqli_query($mysqli,$sql);
  while($row = mysqli_fetch_assoc($run)){
  $_SESSION['shipping'] = $row['shipping_id'];

?>

<?php } ?>
<?php include('001header.php'); ?>
    <?php include('004navbar.php'); ?> 
   
    <br><br>


<style type="text/css">

  .ship{
            width: 245px;
            height: 255px;
           /*background-color: #ebf5fb;*/
           border-radius: 4px;
           border : 1px solid #aed6f1; 
         }
ul.list{
  list-style: none;
  margin: 20px;
  padding: 0;
  padding-top: 2px;

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

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2>PAYMENT METHOD</h2> 
    

<!-- 26 form start -->


<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1"><span class="fa fa-credit-card"></span>  CREDIT CARD</label>
  <div class="card-img">
<img src="https://www.adidas.com/static/on/demandware.static/-/Sites/en_US/dw0ea1ad9f/visa_card_icon_new.png">
<img src="https://www.adidas.com/static/on/demandware.static/-/Sites/en_US/dwe5aabfdc/amex_card_icon.png">
<img src="https://www.adidas.com/static/on/demandware.static/-/Sites/en_US/dw8dd2a717/master_card_icon_new.png">
<img src="https://www.adidas.com/static/on/demandware.static/-/Sites/en_US/dw37610a52/discover_card_icon.png">
</div>
</div>
<hr>


<div class="custom-control custom-radio">
  <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio4"><span class="fa fa-credit-card"></span>  DEBIT CARD</label>
  <div class="card-img2">
<img src="image/bank (1).png" width="100" height="40">
<img src="image/bank (2).png" width="100" height="40">
<img src="image/bank (4).png" width="100" height="40">
</div>
</div>

<style type="text/css">
  .card-img{
    margin-left: 450px;
   
  }
  .card-img2{
    margin-left: 366px;
    margin-top: 0;
   
  }
  .card-img2 img{
    border: 1px solid whitesmoke;
    margin-left: 10px;
    padding: 5px;
    border-radius: 2px;
  }
</style>
<hr>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">Cash in Hand</label>

  
</div>
<hr>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio3"><img src="https://www.adidas.com/static/on/demandware.static/-/Sites-adidas-US-Library/en_US/dw65738826/paypal-payment-image.png" class="pay-lo"></label>
  
      <div class="pay-container">
                  <!--   AJAX PAY HERE  -->    
            </div>
</div>
<hr>
<script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#customRadio2").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $(".pay-container").html("");
        
        $.ajax({
          type:'post',
          data:{country_id:getCountryID},
          url: 'ajax_request_cash.php',
          success:function(returnData){
            $("#loader").hide();  
            $(".pay-container").html(returnData);
          }
        }); 
      }
      
    })
  });

    $(document).ready(function(){
    $("#customRadio3").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $(".pay-container").html("");
        
        $.ajax({
          type:'post',
          data:{country_id:getCountryID},
          url: 'ajax_request_paypal.php',
          success:function(returnData){
            $("#loader").hide();  
            $(".pay-container").html(returnData);
          }
        }); 
      }
      
    })
  });

    $(document).ready(function(){
    $("#customRadio1").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $(".pay-container").html("");
        
        $.ajax({
          type:'post',
          data:{country_id:getCountryID},
          url: 'ajax_request_credit.php',
          success:function(returnData){
            $("#loader").hide();  
            $(".pay-container").html(returnData);
          }
        }); 
      }
      
    })
  });
     $(document).ready(function(){
    $("#customRadio4").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $(".pay-container").html("");
        
        $.ajax({
          type:'post',
          data:{country_id:getCountryID},
          url: 'ajax_request_debit.php',
          success:function(returnData){
            $("#loader").hide();  
            $(".pay-container").html(returnData);
          }
        }); 
      }
      
    })
  });
</script>


<style type="text/css">
  .pay-lo{
    height: 18px;
  }
</style>
 
    </div>

     
      <style type="text/css">
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
            <?php 
      include('confs/config.php'); 
      $shipping = $_SESSION['shipping'];
      $sql = "SELECT * FROM shipping WHERE shipping_id = $shipping";
      $run = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_assoc($run);
      ?>
      <div class="shipping_inner">
        <div class="shipping_inner_style">
      <b>SHIPPING ADDRESS</b>
        <?php echo $row['full_name'] ?><br>
          <span class="fa fa-phone"></span> <?php echo $row['phone'] ?><br>
          <?php echo $row['street_address'] ?><br>
         <?php echo $row['city'] ?> , 
          <?php echo $row['state'] ?><br>
          
           <?php echo $row['country'] ?><br>
          <a href="shipping_info.php">Edit</a><br><br>

          <?php $email = $_SESSION['email']; ?>
          <?php echo "$email"; ?><br>
          <a href="shipping_info.php">Edit</a>
          </div>
          </div> <!-- shipping inner end -->
          </div>

        </div>

      </div> <!-- ====== -->

        </div>
         <div class="securepayment"><span class="fa fa-lock"></span> All transactions are safe and secure</div>
         <br>
         <img src="https://www.adidas.com/static/on/demandware.static/-/Sites-adidas-US-Library/en_US/dw88ec105e/us_payment_methods.png" height="40px">
    </div>
  </div>
</div>








<!--
The MIT License (MIT)

Copyright (c) 2015 William Hilton

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
-->
<!-- Vendor libraries -->



<!-- If you're using Stripe for payments -->
<script type="text/javascript" src=""></script>
<style type="text/css">

h3{
	font-family: AdineuePRO,Helvetica,Verdana,sans-serif;
font-style: normal;
color: #000;
font-size: 18px;
margin: 15px 0px;
line-height: 100%;
font-weight: 600;
padding: 4px;

}
h1{
    color: #5d6d7e;
    text-align: center;
}

.box {
        border-radius: 6px;
        border: 2px solid #009689;
        margin : 8px;
        padding: 8px;
        width: 200px;
        height: 100px;
        text-align: center;
        font-size: 45px;
        background-color: #009688;
    }
    .box a{
        color: white;
    }
   

h2{
  font-size: 26px;
line-height: 24px;
letter-spacing: 1.5px;
font-family: AdineuePRO,Helvetica,Verdana,sans-serif;
font-style: normal;
font-weight: 800;
color: #000;
}

</style>



<br><br><br>
<?php include('002footer.php'); ?>







<script src='jquery-3.3.1.js' type='text/javascript'></script>
<script src='bootbox.min.js'></script>
<script src='shipping_del_script.js' type='text/javascript'></script>

</body>
</html>




