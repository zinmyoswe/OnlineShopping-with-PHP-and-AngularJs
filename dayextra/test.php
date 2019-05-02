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

<form method="post" action="test.php">
Flights on: <br/>
<input type="checkbox" name="Days[]" value="Daily">Daily<br>
<input type="checkbox" name="Days[]" value="Sunday">Sunday<br>
<input type="checkbox" name="Days[]" value="Monday">Monday<br>
<input type="checkbox" name="Days[]" value="Tuesday">Tuesday <br>
<input type="checkbox" name="Days[]" value="Wednesday">Wednesday<br>
<input type="checkbox" name="Days[]" value="Thursday">Thursday <br>
<input type="checkbox" name="Days[]" value="Friday">Friday<br>
<input type="checkbox" name="Days[]" value="Saturday">Saturday <br>
<input type="submit" name="submit" value="submit" class="btn btn-warning">
</form>
<hr>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

<?php





if(isset($_POST['submit']))
{       
  $checkBox = implode(',', $_POST['Days']);
  // Loop through the array of checked box values ... 

    // $query="INSERT INTO example (orange) VALUES ('" . $checkBox . "')";     
 
   

    for ($i=0; $i<sizeof($checkBox);$i++) {
  $query = "INSERT INTO example (orange) VALUES ('$checkBox')";
   $run = mysqli_query($mysqli,$query);
   if($run){
    echo "Complete";
  }else{
    echo "error";
    }
  }
    

 

}

?>
