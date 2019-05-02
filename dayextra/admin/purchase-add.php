<?php
include('../confs/config.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Purchase</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family-Lato:300,400' type='text/css' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Abel' type='text/css' rel='stylesheet'>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
      <script src="tinymce.min.js"></script>
                  <script>tinymce.init({ selector:'textarea' });</script>
                  <script src="jquery.tinymce.min.js"></script>
  <style>

body{
  margin-top: 20px;
 
}
h5{
  text-align: center;
}
  </style>
  <script>
  
  </script>
  </head>
  <body>

  <div class="col-md-5">
                   
              <div class="Compose-Message">               
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>Purchase Form</h5> 
                  </div>
                    <div class="panel-body">
                        <form method="post" action="supplier-add.php" enctype="multipart/form-data">

                        <label>Product Name : </label>
                        <input type="text" name="product_name"  class="form-control" />

                        <label>Supplier Name : </label>
                        <select name="supplier_id" class="form-control" />
                        <option value="0">--Choose Supplier--</option>
                          <?php
                            $result = $mysqli->query("SELECT id,name FROM supplier");
                            while($row = mysqli_fetch_array($result)):
                          ?>
                        <option value="<?php echo $row['id']?>">
                          <?php echo $row['name'] ?>
                        </option>
                      <?php endwhile; ?>
                        </select>

                        <label>Price : </label>
                        <input type="text" name="price"  class="form-control" />

                        <div class="row">
                        <div class="col-lg-6">
                        <label>Quantity : </label>
                        <input type="text" name="qty"  class="form-control" />
                        </div>

                        <div class="col-lg-6">
                        <label>Total : </label>
                        <input type="text" name="total"  class="form-control" />
                        </div>

                        </div><br>
                       
                      
              
                    <input type="submit" name="supplier_add" value="Save" class="btn btn-info pull-right">
          </form>
          
                    </div>
                    <div class="panel-footer text-muted">
                        <strong>Note : </strong>Please note that we track all messages so don't send any spams.
                    </div>
                </div>
                     </div>
                </div><!-- end form-->

  </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="js/.js"></script>


  
</html>