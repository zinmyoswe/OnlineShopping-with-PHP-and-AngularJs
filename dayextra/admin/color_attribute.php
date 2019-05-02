<?php
 
   include('../confs/config.php');

   $id = $_SESSION['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product where id = $id");
   $row = mysqli_fetch_assoc($result);
?>
 


        <div class="row">
        
            <div class="col-md-5">
              
                    <!-- Product Description start-->
                     
                   <p><b><?php echo $row['product_name']?></b></p>

                    <i style="color: #17a589;"><b>US$<?php echo $row['price']?></b></i><br>

                    
                    <img src="cover/<?php echo $row['cover'] ?>" width="200" height="290">
                    
                    <?php
                      $sql2 = "SELECT * FROM image_attributes
                              WHERE product_id = $id";
                      $run = mysqli_query($mysqli,$sql2);
                    while($row2 = mysqli_fetch_assoc($run)){
                    ?>
                    <img src="uploads/<?php echo $row2['image'] ?>" width="200" height="290">
                    <?php } ?>

                    
            </div><!-- Product Description start-->
            
            <?php
            if(isset($_POST['btn-gen-form']))
            {
              ?>
            <form method="post" action="color_work.php" enctype="multipart/form-data">
            
          
            <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
            <table class='table table-bordered'>
            <?php
            for($i=1; $i<=$_POST["no_of_rec"]; $i++) 
            {
              ?>
               
                        
                      
                           <div class="col-md-3">
                           <input type="hidden" name="id<?php echo $i; ?>"  class="form-control" value="<?php echo $row['id']?>" />
                              <div class="form-group">
                              <label>COLOR:</label>
                                         <select class="form-control" name="color<?php echo $i; ?>">
                                                <option>Select a color</option>
                                               <?php

                                                $get_brand = "SELECT * FROM attribute 
                                                              WHERE name LIKE '%color%'";
                                                $run_brand = mysqli_query($mysqli,$get_brand);
                                                while($row_brand= mysqli_fetch_array($run_brand)){
                                                  $color_id = $row_brand['attr_id'];
                                                  $color_name = $row_brand['name'];
                                                  $color_value = $row_brand['value'];
                                                  $attr_img = $row_brand['attr_img'];
                                                  ?>
                                                  echo "
                           <option value='<?php echo $color_id ?>'>
                              
                           <?php echo $color_value ?></option>
                           <img src='images/<?php echo $attr_img; ?>' width='50' height='50'>
                                             
<?php   
   }

                                                ?>
                                          
                                          </select>
                            </div>
            </div>
            
  
            <div class="col-md-3">
                              <div class="form-group">
                              <label>SIZE:</label>
                                         <select class="form-control" name="size<?php echo $i; ?>">
                                                <option>Select a size</option>
                                               <?php

                                                $get_brand = "SELECT * FROM attribute 
                                                              WHERE name LIKE 'size'";
                                                $run_brand = mysqli_query($mysqli,$get_brand);
                                                while($row_brand= mysqli_fetch_array($run_brand)){
                                                  $size_id = $row_brand['attr_id'];
                                                  $size_name = $row_brand['name'];
                                                  $size_value = $row_brand['value'];

                                                  echo "
                                                    <option value='$size_id'>$size_value</option>
                                                  ";
                                                }
                                                ?>
                                          </select>
                            </div>
            </div>


          

            <div class="col-md-1">
            <div class="form-group">
                              <label>Quantity:</label>
                                         <select class="form-control" name="qty<?php echo $i; ?>">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                
                                          </select>
                                          </div>
                                          
                            </div>
                              
                             
                     
                             <?php
                                } ?>
                                    <hr>
                          <input type="submit" name="submit" class="btn btn-warning pull-right" value="Save">
                  </form>
                             <?php }
                                ?>
                            
                          
                                
                            
                          
                      
        </div>
  

 
