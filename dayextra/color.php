<?php
	session_start();
	include('confs/config.php');
  include('function/function.php');
?>

<!-- <b>

<?php echo $_SESSION['color'];?></b> -->

<!DOCTYPE HTML>
<html>
<head>
<title>Online Book Store</title>
<link href="bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">
<script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>



</head>
<body>
 <?php include('navbar.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <style type="text/css">
  .haha{
    width: 120px;
    height: 120px;
    border-radius: 5px;
    background-color: #C53622;

  }
</style>
 <div class="haha">
   
 </div>
    </div>
  </div>
</div>





     

</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/.js"></script>


  
</html>

// <?php echo date("D M j G:i:s T Y", time()); ?><br>

<?php echo  date("F j, Y g:i A", time()); ?>



        
