<?php
  session_start();
  include('confs/config.php');
  include('function/function.php');
  
  include('001header.php');
  include('004navbar.php');

  $customer = $_SESSION['email']; 
  $c = "SELECT * FROM customer WHERE email = '$customer'";
  $r = mysqli_query($mysqli,$c);
  $row_c =mysqli_fetch_assoc($r);
   $customer_id = $row_c['id'];
   $customer_name = $row_c['name'];




  $sql = "SELECT * FROM orders WHERE customer = '$customer' ORDER BY created_date DESC";
  $run = mysqli_query($mysqli,$sql);
  $count = mysqli_num_rows($run);

  $sql2 = "SELECT * FROM add_to_favourite WHERE customer_id='$customer_id'";
  $run2 =mysqli_query($mysqli,$sql2);
  $count_fav = mysqli_num_rows($run2);
  
?>
<style type="text/css">
	/*sidebar*/
.haha p strong i{
  font-size: 11px;
}
.haha p strong{
  font-size: 11px;
}
.haha a{
  font-size: 11px;
}
.dash{
  list-style: none;
  font-size: 13px;
}
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
<br><br>
 <div class="container">
   <div class="row">
  
     <div class="col-md-9">
      <h3>WHILIST</h3>
        <div class="row">
          <?php
    $customer = $_SESSION['email']; 
            $c = "SELECT * FROM customer WHERE email = '$customer'";
            $r = mysqli_query($mysqli,$c);
            $row_c =mysqli_fetch_assoc($r);
             $customer_id = $row_c['id'];

          $result = mysqli_query($mysqli,"SELECT distinct product.*,add_to_favourite.product_id,add_to_favourite.customer_id FROM product LEFT JOIN add_to_favourite
          ON product.id = add_to_favourite.product_id
          WHERE add_to_favourite.customer_id = '$customer_id'");
          // if($result === FALSE){
          //   die(mysql_error());
          // }

          if($result){

            while($obj = mysqli_fetch_object($result)) {
             $id = $obj->id;

            ?>
          
          
              <div class="col-md-6">
              <table class="table haha">
              <tr>
                <td><img src="admin/cover/<?php echo $obj->cover ?>" width="110" height="140"/></td>
                <td>
                <p><strong><i><a href="detail.php?id=<?php echo  $obj->id ?>"><?php echo $obj->product_name ?></a></i></strong></p>
                <p><strong>US$ <?php echo  $obj->price ?></strong></p>
                <a href="">Remove</a>
                <?php if($obj->qty < 7 && $obj->qty > 0 ){ ?>
                <span class='badge badge-warning' style='margin-top: 2px;'>Low In Stock</span>
                <?php }elseif($obj->qty == 0){ ?>
                   <span class='badge badge-warning' style='margin-top: 2px;'>SOLD OUT</span>
                 <?php }else{ ?>

                <?php } ?>

              <?php if($obj->qty < 5){ ?>
                  <img src="image/bestseller.png" width="85" height="18" style="margin-left: 2px;">
              <?php }  ?>
              <hr>
                <form method="post" action="detail_add.php" enctype="multipart/form-data">
              
                <input type="hidden" name="id" value="<?php echo $obj->id?>">
                <?php if($obj->qty > 0){ ?>
                <input type="submit" name="submit" value="Add To Cart" style="clear:both; background: #48c9b0; border: none; color: #fff; font-size: 11px; padding: 10px; cursor: pointer;" class="btn btn-primary pull-right" />
                </form>
                <?php }else{ ?>
                  
               <?php 
                 $result2 = mysqli_query($mysqli,"SELECT * FROM product WHERE id=$id");
                 $row2 = mysqli_fetch_assoc($result2);

                 ?>
                 <?php echo $row2['id']; ?>
                  <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row2['id']; ?>" id="getUser" style="clear:both; background: #48c9b0; border: none; color: #fff; font-size: 11px; padding: 10px;cursor: pointer;" class="btn btn-primary pull-right">Add To Cart</button>
     <?php } ?>

       <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
             <div class="modal-dialog"> 
                  <div class="modal-content"> 
                  
                       <div class="modal-header"> 
                        <h4 class="modal-title">
                              <i class="fa fa-envelope-o"></i> SOLD OUT Alert
                            </h4> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            
                       </div> 
                       <div class="modal-body"> 
                       
                           <div id="modal-loader" style="display: none; text-align: center;">
                            <img src="ajax-loader.gif">
                           </div>
                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content">
                           
                           </div>
                             
                        </div> 
                        
                        
                 </div> 
              </div>
       </div><!-- /.modal --> 
       <script>
$(document).ready(function(){
  
  $(document).on('click', '#getUser', function(e){
    
    e.preventDefault();
    
    var uid = $(this).data('id');   // it will get id of clicked row
    
    $('#dynamic-content').html(''); // leave it blank before ajax call
    $('#modal-loader').show();      // load ajax loader
    
    $.ajax({
      url: 'getemail.php',
      type: 'POST',
      data: 'id='+uid,
      dataType: 'html'
    })
    .done(function(data){
      console.log(data);  
      $('#dynamic-content').html('');    
      $('#dynamic-content').html(data); // load response 
      $('#modal-loader').hide();      // hide ajax loader 
    })
    .fail(function(){
      $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
      $('#modal-loader').hide();
    });
    
  });
  
});

</script>
<!--      ----------------------------------- SOLD OUT MODAL DIALOG End------------------------ -->

              </td>
                

                
                <!-- -----------color size & add to cart start---------- -->
    
        
                <!-- -----------color size & add to cart end---------- -->
              
              </tr>
              </table>
                      
              </div><!--  col-md-6 end -->
             
            <?php }} ?>
              
       </div>
    
     </div> <!-- col-md-8 end-->
        <div class="col-md-3">

        
       <ul class="dash">
        <li>
            <b><a href="index.php">DashBoard</a></b>
          </li>
          <li><a href='myorder.php'>My Order<span class='badge badge-warning' style='margin-left: 8px;'><?php echo $count ?></a></li>
          <li><a href='dashboard.php'>In Whilist<span class='label label-danger' style='margin-left: 8px;'><?php echo $count_fav ?></a></li>
        </ul><br><br>
        <hr>
         <ul class="dash">
        <li>
            <b><a href="index.php">Account Options</a></b>
          </li>
          <li><a href=''>View Profile</a></li>
          <li><a href=''>Edit Profile</a></li>
          <li><a href=''>Logout</a></li>
        </ul><br><br>

        <hr>
         <ul class="dash">
        <li>
            <b><a href="index.php">Account Info</a></b>
          </li>
          <table>
          	
          </table>
          <li><?php echo $customer_name ?></li>
          <li><?php echo $customer ?></li>
          <li>Member Since : </li>
          <li>Last Login : </li>
        </ul><br><br>
     
   



     </div> <!-- col-md-4 end-->
   </div>
 </div>


  <?php include('002footer.php'); ?>


  