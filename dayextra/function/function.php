<?php

include('config.php');

 function getcat(){

    global $mysqli;

    $get_cat = "SELECT * FROM categories 
              ";
    $run_cat = mysqli_query($mysqli,$get_cat);
    while($row= mysqli_fetch_array($run_cat)){
      $cat_id = $row['cat_id'];
      $cat_name = $row['cat_name'];
      

      echo "
        <li><a href='product.php?cat=$cat_id'>$cat_name</a></li>
      ";
    }
    }

     function getbrand(){

    global $mysqli;

    $get_cat = "SELECT * FROM brand";
    $run_cat = mysqli_query($mysqli,$get_cat);
    while($row= mysqli_fetch_array($run_cat)){
      $brand_id = $row['brand_id'];
      $brand_name = $row['brand_name'];
      

      echo "
        <li><a href='product.php?brand=$brand_id'>$brand_name</a></li>
      ";
    }
    }


  function getpro(){
  	if(!isset($_GET['cat'])){
  		if(!isset($_GET['brand'])){
  		global $mysqli;
  		  $i=0;

        $per_page = 12;

      if(isset($_GET['page'])){
        $page = $_GET['page'];
      }

      else{
        $page = 1;
      }

      $start_from = ($page-1) * $per_page;
        
          $product_id = array();
          $product_quantity = array();

          $result = mysqli_query($mysqli,"SELECT * FROM product ORDER BY 1 DESC LIMIT $start_from, $per_page");
          // if($result === FALSE){
          //   die(mysql_error());
          // }


          if($result){

            while($obj = mysqli_fetch_object($result)) {


                          $sql_dis = mysqli_query($mysqli,"SELECT * FROM discount 
                            LEFT JOIN product ON discount.product_id = product.id
                            WHERE product.id = '$obj->id'");
                          $result_dis = mysqli_fetch_assoc($sql_dis);
                           $percentage = $result_dis['percentage'];
                           $discount_id = $result_dis['discount_id'];
                          
                       
              

              echo '<div class="col-md-3 col-sm-6 col-xs-12">';
              echo '<div class="display">';
             
            
              echo '<a href="detail2.php?id='.$obj->id.'"><img src="admin/cover/'.$obj->cover.'" width="250" height="300"/></a><br>';
              // echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              // echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
               if($obj->qty < 7){
                echo "<span class='badge badge-warning pull-left' style='margin-top: 6px;'>Low In Stock</span>";
              }




              if($obj->qty < 3){
                  echo '<img src="image/bestseller.png" width="90" height="20" style="margin-left: 65px; margin-bottom:5px;">';
              }
              echo "<br>";

              ?>
           <?php
   
              echo '<div class="box"><p><strong><i><a href="detail2.php?id='.$obj->id.'">'.$obj->product_name.'</a></i></strong></p>';


            

                 if( $discount_id == 0){
               
               echo '<p><strong>US$ '.$obj->price.'</strong>
               
              ';
                 // echo '<a href="" style="font-size: 9px;"><span class="ha fa fa-star" style="margin-left: 48px; color: #000; font-size: 9px;"></span>
                 //            <span class="ha fa fa-star" style="color: #000; font-size: 9px;"></span>
                 //            <span class="ha fa fa-star" style="color: #000; font-size: 9px;"></span>
                 //            <span class="ha fa fa-star" style="color: #000; font-size: 9px;"></span>
                 //            <span class="ha fa fa-star" style="color: #000; font-size: 9px;"></span>
                 //            192 reviews</a> 

                 //        ';
                     }else{
                        
                            $selling_price = $obj->price-($obj->price*($percentage/100));
                          
                          echo '<p><strong style="color: #DC3545" >US$ '.$selling_price.'</strong> <strong class="price_dis"> US$'.$obj->price.'</strong>';
                        //       echo '<a href="" style="font-size: 9px;"><span class="ha fa fa-star" style="margin-left: 30px; color: #000; font-size: 9px;"></span>
                        //     <span class="ha fa fa-star" style="color: #000; font-size: 9px;"></span>
                        //     <span class="ha fa fa-star" style="color: #000; font-size: 9px;"></span>
                        //     <span class="ha fa fa-star" style="color: grey; font-size: 9px;"></span>
                        //     <span class="ha fa fa-star" style="color: grey; font-size: 9px;"></span>
                        //     321</a> 
                        // ';
                          } 
                       
                               echo '</p></div>';
                               echo'<div class="box2"><hr>';
     
              
              $sql ="SELECT distinct a.*,p.color,p.product_id FROM product_attribute p
                   LEFT JOIN attribute a
                   ON p.color = a.attr_id
                   WHERE p.product_id = '$obj->id'";
                   $ret = mysqli_query($mysqli,$sql);
                  $num_results=mysqli_num_rows($ret);
                  for($i=0;$i<$num_results;$i++)

  {

    $row=mysqli_fetch_array($ret);


    echo"<input type=\"radio\" name=\"rdocolor\" value=\"".$row['value']."\"
  id=\"happy_".$row['attr_id']."\" class=\"custom-control-input\"/>";
    echo "<label for=\"happy_".$row['attr_id']."\">";
    ?>
  

 <img 
    src="admin/images/<?php echo $row['attr_img'] ?>" 
    alt="<?php echo $row['value'] ?>" />
    <?php

    echo "<label>";
  
  } 

              echo '</div>';
              echo '</div>';
              echo '</div>';

              $i++;
            }
          

            include("pagination.php");
          
          }

          $_SESSION['id'] = $product_id;
  }
}
}

  function getcatpro(){

  	if(isset($_GET['cat'])){

  	$cat_id = $_GET['cat'];

  	global $mysqli;
  		  $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = mysqli_query($mysqli,"SELECT * FROM product WHERE categories = '$cat_id'order by id DESC");
          // if($result === FALSE){
          //   die(mysql_error());
          // }

          if($result){

            while($obj = mysqli_fetch_object($result)) {

       echo '<div class="col-md-3 col-sm-6 col-xs-12">';
              echo '<div class="display">';
              
            
              echo '<a href="detail2.php?id='.$obj->id.'"><img src="admin/cover/'.$obj->cover.'" width="220" height="300"/></a><br>';
              // echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              // echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
                if($obj->qty < 7){
                echo "<span class='badge badge-warning pull-left' style='margin-top: 6px;'>Low In Stock</span>";
              }



              if($obj->qty < 3){
                  echo '<img src="image/bestseller.png" width="90" height="20" style="margin-left: 65px;">';
              }
              echo "<br><br>";

              echo '<div class="box"><p><strong><i><a href="detail2.php?id='.$obj->id.'">'.$obj->product_name.'</a></i></strong></p>';
               echo '<p><strong>US$ '.$obj->price.'</strong></p>';
              echo '</div>';
              

           

              

              echo '</div>';
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['id'] = $product_id;
  }

}

function getbrandpro(){

  	if(isset($_GET['brand'])){

  	$brand_id = $_GET['brand'];

  	global $mysqli;
  		  $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = mysqli_query($mysqli,"SELECT * FROM product WHERE brand = '$brand_id'order by id DESC");
            

          if($result){
                if($brand_id == 2){
                  echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                echo '<img src="admin/cover/a (7).png" width="250" height="190" style="margin-top: 80px;">';
                echo '</div>';

                }elseif($brand_id == 1){
                   echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                echo '<img src="admin/cover/a (4).png" width="180" height="90" style="margin-top: 110px;">';
                echo '</div>';
              }elseif($brand_id == 3){
                   echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                echo '<img src="admin/cover/a (2).png" width="200" height="110" style="margin-top: 110px;">';
                echo '</div>';
                 }elseif($brand_id == 4){
                   echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                echo '<img src="admin/cover/a (8).png" width="200" height="100" style="margin-top: 110px;">';
                echo '</div>';
                  }elseif($brand_id == 5){
                   echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                echo '<img src="admin/cover/a (1).png" width="200" height="100" style="margin-top: 110px;">';
                echo '</div>';
                 }elseif($brand_id == 10){
                   echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                echo '<img src="admin/cover/gap.jpg" width="200" height="100" style="margin-top: 110px;">';
                echo '</div>';
                 }elseif($brand_id == 11){
                   echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                echo '<img src="admin/cover/cropped-19632487f1e7c995b9c6f504964d07b8-top-beans.jpg" width="200" height="100" style="margin-top: 110px;">';
                echo '</div>';
                }else{

                }
              
            while($obj = mysqli_fetch_object($result)) {


                  echo '<div class="col-md-3 col-sm-6 col-xs-12">';
              echo '<div class="display">';
              
            
              echo '<a href="detail2.php?id='.$obj->id.'"><img src="admin/cover/'.$obj->cover.'" width="220" height="300"/></a><br>';
              // echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              // echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
                if($obj->qty < 7){
                echo "<span class='badge badge-warning pull-left' style='margin-top: 6px;'>Low In Stock</span>";
              }



              if($obj->qty < 3){
                  echo '<img src="image/bestseller.png" width="90" height="20" style="margin-left: 65px;">';
              }
              echo "<br><br>";

              echo '<div class="box"><p><strong><i><a href="detail.php?id='.$obj->id.'">'.$obj->product_name.'</a></i></strong></p>';
               echo '<p><strong>US$ '.$obj->price.'</strong></p>';
              echo '</div>';
              

           

              

              echo '</div>';
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['id'] = $product_id;
  }

}

function getcom(){

  global $mysqli;

  $get_id = $_GET['id'];

  $get_com = "SELECT * FROM feedback WHERE product_id = '$get_id' ORDER BY 1 DESC";

  $run_com = mysqli_query($mysqli,$get_com);

  while($row = mysqli_fetch_assoc($run_com)){

    $com = $row['comment'];

    $com_name = $row['comment_author'];

    $date = $row['comment_date'];

    $com_img = $row['comment_img'];

    echo"
    
    <div class='media'>
      <div class='media-left'>
        <img src='image/$com_img' class='media-object' style='width:45px'>
      </div>
      <div class='media-body'>
        <h4 class='media-heading'>$com_name <small><i>Posted on <span class='fa fa-clock-o'></span> $date</i></small></h4>
        <p>$com</p>
      </div>
    </div>
 
    
    
    ";
  }
 }

 function getfav(){
    
      global $mysqli;
        $i=0;

      
        
          $product_id = array();
          $product_quantity = array();

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

            
          
          
              echo '<div class="col-md-6">';
              echo '<table class="table haha">
              <tr>
                <td><img src="admin/cover/'.$obj->cover.'" width="110" height="140"/></td>
                <td>
                <p><strong><i><a href="detail.php?id='.$obj->id.'">'.$obj->product_name.'</a></i></strong></p>
                <p><strong>US$ '.$obj->price.'</strong></p>
                <a href="">Remove</a>';
                 if($obj->qty < 7 && $obj->qty > 0 ){
                echo "<span class='badge badge-warning' style='margin-top: 2px;'>Low In Stock</span>";
              }elseif($obj->qty == 0){
                   echo "<span class='badge badge-warning' style='margin-top: 2px;'>SOLD OUT</span>";
                 }else{

                 }

              if($obj->qty < 5){
                  echo '<img src="image/bestseller.png" width="85" height="18" style="margin-left: 2px;">';
              }
              echo'</td>
              </tr>
              </table>';
                      
              echo '</div>';
              echo '<div class="col-md-6">';
              echo '</div>';

              $i++;
            }
           
          }

          $_SESSION['id'] = $product_id;
  }

  function getbestseller(){
    if(!isset($_GET['cat'])){
      if(!isset($_GET['brand'])){
      global $mysqli;
        $i=0;

      
        
          $product_id = array();
          $product_quantity = array();

          $result = mysqli_query($mysqli,"SELECT product.*,order_items.product_id, SUM(order_items.units) AS TotalQuantity
            FROM product 
            LEFT JOIN order_items 
            ON product.id = order_items.product_id
            GROUP BY order_items.product_id
            ORDER BY TotalQuantity DESC");
          // if($result === FALSE){
          //   die(mysql_error());
          // }

          if($result){

            while($obj = mysqli_fetch_object($result)) {

              echo '<div class="col-md-3">';
              echo '<div class="display">';
              
            
         echo '<a href="detail2.php?id='.$obj->id.'"><img src="admin/cover/'.$obj->cover.'" width="220" height="300"/></a><br>';
              // echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              // echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
               if($obj->qty < 5){
                echo "<span class='badge badge-warning pull-left' style='margin-top: 6px;'>Low In Stock</span>";
              }



         
                  echo '<img src="image/bestseller.png" width="90" height="20" style="margin-left: 65px;">';
          

              

              
                  
              
              echo "<br><br>";

              echo '<div class="box"><p><strong><i><a href="detail2.php?id='.$obj->id.'">'.$obj->product_name.'</a></i></strong></p>';
               echo '<p><strong>US$ '.$obj->price.'</strong></p>';
              echo '</div>';
              

           

              

              echo '</div>';
              echo '</div>';

              $i++;
            }
            
          }

          $_SESSION['id'] = $product_id;
  }
}
}
