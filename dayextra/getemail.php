<?php 
	
	session_start();
    include('confs/dbconfig.php');


	
			
		$id = intval($_REQUEST['id']);
		$query = "SELECT * FROM product WHERE id=:id";
		$stmt = $db_con->prepare( $query );
		$stmt->execute(array(':id'=>$id));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
		 
		?>
			
		
			
	
<style type="text/css">
  .sold{
    padding: 10px 10px;
    text-align: center;
  }
  .sold img{
    margin: 10px 170px;
  }
  .sold h2{
    font-size:22px; 
    padding: 2px 20px;
  }
</style>

<div class="container sold">
  <div class="row">
  

  
    <div class="col-md-12 col-sm-12 col-xs-12">

              <img src="image/ACTIVE.png" width="35" height="40">
              <br>
              <strong style="color: #FFC107; font-size: 14px;">ACTIVE FASHION</strong><br>
              <h2>SOLD OUT, Email will sent when product is in stock.</h2>

      

                       <form method="post" action="sold_out_email.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <div class="form-group">
    <label for="">Email Address*</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
    
  	<button type="submit" name="submit" class="btn btn-dark pull-right" style="background-color: #000;">Send</button>
    <a href="" class="btn btn-outline-dark pull-right" style="margin-right: 5px;">NO THANKS</a>
</form>
  <style type="text/css">
    .btn-outline-dark {
    color: #000;
    background-color: transparent;
    background-image: none;
    border-color: #000;
}
  </style>
    </div><!--  col-md-6 end -->
   
  </div> <!-- row end -->
</div><!--  container end -->
<br><div class="modal-footer"> 

                             
                        </div> 




