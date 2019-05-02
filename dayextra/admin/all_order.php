<?php 
include('../confs/config.php');
include('header2.php'); 
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage All Orders
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
     

        <!-- Default box -->
        <div class="col-md-11">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">View All Orders</h3>


          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <?php 
        include('../confs/config.php');
          $sql = "SELECT * FROM orders ORDER BY order_id DESC";
          $run = mysqli_query($mysqli,$sql);
          $count = mysqli_num_rows($run);       
        ?>
        	<table class="table  table-bordered">
    		<tr>
    			<th>OrderID</th>
    			<th>Status</th>
    			<th>Amount</th>
    			<th>Quantity</th>
          <th>PaymentType</th>
    			<th>OrderDate</th>
    			<th></th>
    		</tr>
        <?php
        while ($row = mysqli_fetch_assoc($run)):
        	$status = $row['status'];
        ?>
    
    		<tr>
    			<td><?php echo $row['order_id'] ?></td>
    			<td>
    			<?php if($status == 2) { ?>
    				<span class='label bg-orange'>Waiting Payment</span>
    			 
          <?php } else if($status == 3){ ?>
            <span class='label bg-teal'>Received Payment</span>

              <?php } else if($status == 4){ ?>
            <span class='label bg-maroon'>Shipping</span>
         
          <?php }else{  ?>
            <span class='label bg-black'>Delivered</span>
          <?php  }?>


          
    			</td>
    			<td><h5>US$ <?php echo $row['total_amt'] ?></h5></td>
    			<td><span class='label bg-red'><?php echo $row['total_qty'] ?></span></td>
            <td>
            <!-- payemnt info -->
            <h5><?php echo $row['payment_type']; ?></h5>
          </td>
    			<td>
         <?php
         // include('function/function.php');
         // echo get_time_ago( strtotime($row['created_date']) );
      
         ?><br>
            <?php echo $row['created_date']; ?></td>
        

          <?php if($status == 3) { ?>
    			<td><a class="btn btn-block btn-warning btn-flat" href="shipping_confirm.php?id=<?php echo $row['order_id'] ?>" 
          >Confirm Shipping <span class="fa fa-angle-double-right"></span></a></td>

          <?php } else if($status == 2){ ?>
            <td><a class="btn btn-block btn-default btn-flat" href="order_pending_detail.php?id=<?php echo $row['order_id'] ?>">Confirm Receive Payment <span class="fa fa-angle-double-right"></span></a></td>

          <?php } else if($status == 4){ ?>
             <td><a class="btn btn-block btn-info btn-flat" href="deliver_confirm.php?id=<?php echo $row['order_id'] ?>">Confirm Delivered <span class="fa fa-angle-double-right"></span></a></td>
         
          <?php }else{  ?>
               <td><a class="btn btn-block btn-black btn-flat" href="all_order.php"><span class="fa fa-check"></span> Complete </a></td>
          <?php  }?>
    		</tr>
    	
    	<?php endwhile; ?>
    	</table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
dsafds
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
<?php include('footer2.php'); ?>