<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
  session_start();
  include('confs/config.php');


?>

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

<script src="js/vendor/modernizr.js"></script>
</head>
<body>
    

<style>
  form{
    margin: 12px;
    padding: 12px;
  }
</style>
    
<h1>test</h1>

</body>
<?php
  $result = mysqli_query($mysqli,"SELECT orange FROM example");
  while($row = mysqli_fetch_assoc($result)){
    
   
?>
  <input type="checkbox" name="Days[]" value="Daily"><?php echo $row['orange']?><br>

  <?php 
    
  } ?>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>



?>
