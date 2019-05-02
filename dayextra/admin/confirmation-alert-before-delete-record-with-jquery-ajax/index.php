<?php 
    include "config.php";
    include "../header2.php";
?>


<!doctype html>
<html>
    <head>
        <title>Confirmation alert Before Delete record with jQuery AJAX</title>
        <link href='style.css' rel='stylesheet' type='text/css'>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src='jquery-3.3.1.js' type='text/javascript'></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src='bootbox.min.js'></script>
        <script src='script.js' type='text/javascript'></script>
      
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    </head>
    <body>
        
        <div class='container'>
            <table border='1' class='table' >
                <tr style='background: whitesmoke;'>
                    <th>S.no</th>
                    <th>Title</th>
                    <th>Operation</th>
                </tr>

                <?php 
                $query = "SELECT * FROM categories order by cat_id desc";
                $result = mysqli_query($con,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['cat_id'];
                    $cat_name = $row['cat_name'];
                    $created_date = $row['created_date'];

                ?>
                
                    <tr>
                        <td align='center'><?= $count ?></td>
                        <td><a href='<?= $created_date ?>' target='_blank'><?= $cat_name ?></a></td>
                        <td align='center'><button class='delete btn btn-danger' id='del_<?= $id ?>'>Delete</button></td>
                        
                    </tr>
                <?php
                    $count++;
                }
                ?>
            </table>
        </div>
    </body>
</html>