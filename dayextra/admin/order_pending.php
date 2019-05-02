<?php 
include('../confs/config.php');
include('header2.php'); 
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Pending Orders
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
      <div class="col-md-4">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Pending Order</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="box-body">
        <?php 
        	$sql = "SELECT * FROM orders WHERE status = 2 ORDER BY order_id DESC";
        	$run = mysqli_query($mysqli,$sql);
        	$count = mysqli_num_rows($run);      	
        ?>
        <h4 style="color: red;">Important!<span class="label bg-yellow"><?php echo $count ?></span></h4>
        <p>Dear Admin, </p>
        you have <span class="label bg-yellow"><?php echo $count ?></span> Pending Orders that is waiting payments from customer.

        </div>
        <!-- /.box-body -->
       
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
       </div> <!--  col-md-5 end -->

        <!-- Default box -->
        <div class="col-md-8">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Waiting Payment List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        	<table class="table  table-bordered">
    		<tr>
    			<th>OrderID</th>
    			<th>Status</th>
    			<th>Amount</th>
    			<th>Quantity</th>
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
    			<?php if($status == 2) {
    				echo "<span class='label bg-yellow'>Waiting Payment</span>";
    			} ?>
    			</td>
    			<td><h5>US$ <?php echo $row['total_amt'] ?></h5></td>
    			<td><span class='label bg-red'><?php echo $row['total_qty'] ?></span></td>
    			<td><?php echo $row['created_date'] ?></td>
    			<td><a href="order_pending_detail.php?id=<?php echo $row['order_id'] ?>">Detail</a></td>
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