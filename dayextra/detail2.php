<?php
   session_start();
   include('confs/config.php');
   include('function/function.php');
?>
<?php  include('001header.php'); ?>
<?php  include('004navbar.php'); ?>
<?php
   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product WHERE id=$id");
   $row = mysqli_fetch_assoc($result);
   $product_id = $row['id'];
   $categories = $row['categories'];
   $qty = $row['qty'];
   // print_r($_SESSION);

            //getting User
        $customer = $_SESSION['email'];

        $get_customer = "SELECT * FROM customer WHERE email ='$customer'";

        $run_customer = mysqli_query($mysqli,$get_customer);

        $row_customer = mysqli_fetch_assoc($run_customer);

        $customer_id = $row_customer['id'];
        $customer_name = $row_customer['name'];
        $customer_img = $row_customer['customer_img'];



        // echo "$customer_id";
        // echo "$customer_name";
        // echo "<img src='image/$customer_img'>";

                  //   // User rating
                  //   // $query = "SELECT * FROM rating WHERE product_id=".$id." and user_id=".$user_id;
                  //   // $userresult = mysqli_query($mysqli,$query) or die(mysqli_error());
                  //   // $fetchRating = mysqli_fetch_array($userresult);
                  //   // $rating = $fetchRating['rating'];

                  //   // // get average
                  //   // $query = "SELECT ROUND(AVG(rating),1) as averageRating FROM rating WHERE product_id=".$id;
                  //   // $avgresult = mysqli_query($mysqli,$query) or die(mysqli_error());
                  //   // $fetchAverage = mysqli_fetch_array($avgresult);
                  //   // $averageRating = $fetchAverage['averageRating'];

                  //   // if($averageRating <= 0){
                  //   //     $averageRating = "No rating yet.";
                  //   // }
                  // }

?>


    
     



<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel="stylesheet" type="text/css" href="css/detail.css">




<!-- <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nav.css"> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
  <style>
    .input-hidden {
  position: absolute;
  left: -9999px;
}

input[type=radio]:checked + label>img {
  border: 1px solid #FFC107;
  box-shadow: 0 0 2px 0px #FFC107;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
  border: 1px solid #000;
  width: 45px;
  height: 35px;
  border-radius: 2px;
/*  transition: 500ms all;*/
}

/*input[type=radio]:checked + label>img {
  transform: 
    rotateZ(-10deg) 
    rotateX(10deg);
}*/

/*
 | //lea.verou.me/css3patterns
 | Because white bgs are boring.
*/
/*html {
  background-color: #fff;
  background-size: 100% 1.2em;
  background-image: 
    linear-gradient(
      90deg, 
      transparent 79px, 
      #abced4 79px, 
      #abced4 81px, 
      transparent 81px
    ),
    linear-gradient(
      #eee .1em, 
      transparent .1em
    );
}*/

</style>

<script type="text/javascript">
      $("a").click(function() {
    $(this).next().prop("checked", "checked");
});

  $('a').click(function() {
        $('li:has(input:radio:checked)').addClass('active');
        $('li:has(input:radio:not(:checked))').removeClass('active');
    });
    </script>
<style class="cp-pen-styles">
</style>

<style type="text/css">
  .product-details .product-images img {

    display: block;
    width: 500px;

}
</style>

<?php
include('confs/config.php');

   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product LEFT JOIN categories 
                                   ON categories.cat_id = product.categories WHERE product.id=$id");
   $row2 = mysqli_fetch_assoc($result);
   $cat_id = $row2['cat_id'];
   $cat_name = $row2['cat_name'];
?>

<main>
    <div class="section section-gray">
        <div class="section-content">
            <div class="product-details">
                <ul class="product-images">
                    <li class="preview"><img src="admin/cover/<?php echo $row2['cover'] ?> " alt="" ></li>
                    <li class="javascript:void(0)"><img src="admin/cover/<?php echo $row2['cover'] ?> " alt="" ></li>
                    <!-- Don't show small pictures if there's only 1 -->
                    <?php
                      $sql2 = "SELECT * FROM image_attributes
                              WHERE product_id = $id";
                      $run = mysqli_query($mysqli,$sql2);
                    while($row2 = mysqli_fetch_assoc($run)):
                    ?>
                    
                    <li>
                        <a href="javascript:void(0)"><img src="admin/uploads/<?php echo $row2['image'] ?> " alt="" ></a>
                    </li>
                    <?php endwhile; ?> 
                    
                </ul>
                <?php
include('confs/config.php');

   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product WHERE id=$id");
   $row3 = mysqli_fetch_assoc($result);
?>              

                <ul class="product-info">
                   <!-- --------------------- star rating start -------------------------------- -->

                  <p style="font-size: 12px;">

                    <a href="">Read all 194 reviews</a></p>
                    <li><p id="title"><?php echo $row3['product_name']?><br>
                  $<?php echo $row3['price']?>
                  </p></li>

                  
                  <!-- available color start -->
                 
              <div class="row">  
                <div class="col-md-6 mb-3">
                  <p>Colors</p>
       <div class="form-group">

       <form method="post" action="detail_add.php" enctype="multipart/form-data">
       
       <input type="hidden" name="id" value="<?php echo $id?>">
         <?php

            $sql ="SELECT distinct a.*,p.color,p.product_id FROM product_attribute p
                   LEFT JOIN attribute a
                   ON p.color = a.attr_id
                   WHERE p.product_id = '$id'";
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
 ?>
           
                          </div>
                            </div>
                          </div>  
                          <!-- Image check box start -->

     <!-- size option start -->
      <div class="row">

          <?php 
            $result = "SELECT * FROM product_attribute where product_id = $id";
            $sql = mysqli_query($mysqli,$result);
            $row = mysqli_fetch_assoc($sql);             
          ?>

           <div class="col-md-6 mb-3">
            <p class="col_size">Sizes</p>
         
                <select name="size" class="custom-select d-block w-100" id="size" required>
                  <option value="">Choose...</option>
                           <?php

                                    $sql ="SELECT distinct a.*,p.size,p.product_id FROM product_attribute p
                                     LEFT JOIN attribute a
                                     ON p.size = a.attr_id
                                     WHERE p.product_id = '$id'";

                               $result = mysqli_query($mysqli,$sql);

                               while($row = mysqli_fetch_assoc($result)){
                                    $size = $row['size'];
                                                  ?>

                                    <?php if($size == 0){ ?>
                                      <option value='ONE SIZE'>ONE SIZE</option>
                                   <?php  }else{ ?>                                               
                                  <option value='<?php echo $row['value']; ?>'><?php echo $row['value']; ?></option>
                                        <?php } ?>          
                                              <?php  } ?>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>

               
                          <br><br>

                          <div class="col-md-8">

                     <style type="text/css">
                          
                          </style>
<!--      ----------------------------------- In stock & sold out ------------------------ -->
                          <?php if($qty == 0){
                            echo "<span class='badge badge-light'>SOLD OUT</span>";
                          }
                          else{
                            echo "<span class='badge badge-info'>In Stock</span>";
                          }

                          ?>
<!--      ----------------------------------- In stock & sold out end------------------------ -->
                     <br><br>
 
                            

              

                           

         <?php
              $sql ="SELECT distinct a.*,p.color,p.product_id FROM product_attribute p
                     LEFT JOIN attribute a
                     ON p.size = a.attr_id
                     WHERE p.product_id = '$id'";

             $result = mysqli_query($mysqli,$sql);

             while($row = mysqli_fetch_assoc($result)){

        ?>
   

         <?php } ?>

          
          <?php 
      $s = "SELECT * FROM product WHERE id = '$id'";
      $r = mysqli_query($mysqli,$s);
      $row_r = mysqli_fetch_assoc($r);
        $product_id = $row_r['id'];
        $customer = $_SESSION['email'];

    
      $sql5 = "SELECT * FROM customer WHERE email = '$customer'";
      $run5 = mysqli_query($mysqli,$sql5);
      $row5 =mysqli_fetch_assoc($run5);
      $customer_id = $row5['id'];
      $customer_name = $row5['name'];
      
      
      $sql_fav = "SELECT * FROM add_to_favourite WHERE customer_id ='$customer_id' AND product_id = '$product_id'";
      $run_fav = mysqli_query($mysqli,$sql_fav);
      $row_fav = mysqli_fetch_assoc($run_fav);
        $fav = $row_fav['fav_id'];
       
        ?>
       
       
      
 
<!--      ----------------------------------- Add To cart Button------------------------ -->
      <?php if($qty > 0){ ?>
              <input type="submit" name="submit" value="Add To Cart" style="clear:both; background: #48c9b0; border: none; color: #fff; font-size: 14px; padding: 10px; cursor: pointer;" /> <a href="product.php">Back</a>
      <?php }else{ ?>
     </form>
<!--      ----------------------------------- Add To cart Button end ------------------------ -->

<!--      ----------------------------------- SOLD OUT MODAL DIALOG ------------------------ -->
      <?php

   include('confs/config.php');
   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product WHERE id=$id");
   $row = mysqli_fetch_assoc($result);
   
   ?>
     <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['id']; ?>" id="getUser" style="clear:both; background: #48c9b0; border: none; color: #fff; font-size: 14px; padding: 10px;cursor: pointer;">Add To Cart</button>
     <?php } ?>

       <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
             <div class="modal-dialog"> 
                  <div class="modal-content"> 
                  
                       <div class="modal-header"> 
                        <h4 class="modal-title">
                             
                            </h4> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            
                       </div> 
                       <div class="modal-body"> 
                       
                           <div id="modal-loader" style="display: none; text-align: center;">
                            <img src="ajax-loader.gif">
                           </div>
                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content">
                           
                           </div>
                             
                        </div> 
                        
                        
                 </div> 
              </div>
       </div><!-- /.modal --> 
<!--      ----------------------------------- SOLD OUT MODAL DIALOG End------------------------ -->

       


<script>
$(document).ready(function(){
  
  $(document).on('click', '#getUser', function(e){
    
    e.preventDefault();
    
    var uid = $(this).data('id');   // it will get id of clicked row
    
    $('#dynamic-content').html(''); // leave it blank before ajax call
    $('#modal-loader').show();      // load ajax loader
    
    $.ajax({
      url: 'getemail.php',
      type: 'POST',
      data: 'id='+uid,
      dataType: 'html'
    })
    .done(function(data){
      console.log(data);  
      $('#dynamic-content').html('');    
      $('#dynamic-content').html(data); // load response 
      $('#modal-loader').hide();      // hide ajax loader 
    })
    .fail(function(){
      $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
      $('#modal-loader').hide();
    });
    
  });
  
});

</script>

<!--      -----------------------------------Add To Whilist ------------------------ -->
       <br><br>

          <?php  if($fav == 0){ ?>
         
            <a href="add_fav.php?id=<?php echo $row_r['id']; ?>"  style="margin-bottom: 3px;"> <span class="fa fa-heart" style="color: #fff; background-color: #000; width: 25px; height: 25px; padding: 5px; border-radius: 2px;"></span> add to whilist</a>

        <?php }else{ ?>
            <a href="#" style="margin-bottom: 3px;"><span class="fa fa-heart"></span> In whilist</a>
        
        <?php } ?>
    
       
         
     
      </div>

      <!--      -----------------------------------Add To Whilist  end------------------------ -->


          
    </div><!-- col8 -->
                    <li class="product-description">
                       
                    </li>
                </ul>
            </div>
        </div>
    </div>






   
</main>
<style type="text/css">
  .cat_cat{
    
  }
  .cat_cat img{
    width: auto;
    height: 350px;
    margin: 30px 100px;
  }
</style>
<?php if($cat_id == 17){ ?>
<div class="container cat_cat">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <img src="image/addias.PNG">
    </div><!--  col-md-6 end -->

  </div> <!-- row end -->
</div><!--  container end -->
<?php }else{?>

<?php } ?>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script >var Chef = {
    init: function() {
        this.productImagePreview();
        this.menuToggle();
        this.misc();
    },
    
    productImagePreview: function() {
        $(document).on('click', '.product-images li', function() {
            if (!$(this).hasClass('preview')) {
                var src = $(this).find('img').attr('src');
                $('.product-images .preview img').attr('src', src);
            }
        });
    },
    
    menuToggle: function() {
        $(document).on('click', '#menu .trigger', function() {
            // Toggle open and close icons
            $(this).find('img').each(function() {
                if ($(this).hasClass('hidden')) {
                    $(this).removeClass('hidden');
                } else {
                    $(this).addClass('hidden');
                }
            });
            
            // Toggle menu links
            $(this).siblings('.links').stop(true, true).slideToggle(200);
            
            // Toggle open class
            $('#menu').toggleClass('open');
       });
    },
    
    misc: function() {
        // Misc stuff
        
        for (var i = 1; i <= 3; i++) {if (window.CP.shouldStopExecution(1)){break;}
            $('.product').parent().eq(0).clone().appendTo('.product-list');
        }
window.CP.exitedLoop(1);

    }
};

$(function() {
    Chef.init();
});
//# sourceURL=pen.js
</script>

    <div class="comment-form-container">
      <?php if($customer == null){ ?>

      
      <?php }else{ ?>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
        <form id="frm-comment" class="">
            <div class="form-group">
                <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" class="form-control"/> 

                    <input class="input-field"
                    type="hidden" name="name" id="name" value="<?php echo $customer_name ?>" class="form-control"/>

                    <input class="input-field"
                    type="hidden" name="product_id" id="product_id" value="<?php echo $product_id ?>" class="form-control"/>
            </div>
            <div class="form-group mb-8">
                <input type="text" name="comment" placeholder="Write a message..." class="form-control">
            </div>

            
            <div class="form-group mb-8">
             

                <button class="btn btn-primary pull-right" type="submit" class="btn btn-primary pull-right" id="submitButton" style="margin-left: 2px; border-radius: 50%;"><span class="fa fa-paper-plane fa-1x"></span></button>
            </div>

        </form>
        </div>
            <div class="col-md-6"></div>
          </div>
        </div>
        <?php } ?>
    </div>
    <style type="text/css">
      .rat_box{
        background-color: lightgrey;
        padding: 20px;
        width: 150px;

      }
      .rat_box2{
        background-color: white;
        padding: 20px;
        width: 150px;
        margin-top: 12px;
      }
    </style>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h3 >RATINGS & REVIEWS</h3>
            <div class="row">
              <div class="col-sm-6">
            
            <div class="rat_box">
              <h2 style="font-size: 36px;">4.6</h2>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p>150 Reviews</p>
            </div>
            </div>
            <div class="col-sm-6">
          
           
            <div class="rat_box2">
              <h2 style="font-size: 36px;">94%</h2>
              <p>of customers recommend this product</p>
       
         </div>
         </div>
         </div>
          </div> <!-- col-sm-4 end -->
          <div class="col-sm-3">
                 
          <?php
          
             $list = "SELECT * FROM comment WHERE product_id = '$product_id' 
             ORDER BY comment_id desc";
             $run_l = mysqli_query($mysqli,$list);
             while($row_l = mysqli_fetch_assoc($run_l)):
              $date = $row_l['date'];
              $time = strtotime($date);
              $myFormatForView = date("F j, Y g:i A", $time);
          ?>
              <!-- Nested media object -->    
    <div class="media">
      <div class="media-left">
        <img src="image/default.png" class="rounded-circle" style="width:45px">
      </div>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $row_l['sender_name'] ?> <small><i>Posted on <span class="fa fa-clock-o"></span> <?php echo $myFormatForView ?></i></small></h4>
        <p><?php echo $row_l['comment'] ?></p>
      </div>
    </div>
    <a href="" style="margin-left: 43px; color: #007BFF;">Reply</a>
        <?php endwhile ?>
       

         <a href="" style="text-align: center; color: #007BFF;">Load More &raquo;</a>
          <hr>
          </div> <!-- col-sm-4 end -->
          <style type="text/css">
            .table td, .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #fff;
    margin-bottom: 0px;
}
.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #FFF;
    text-align: center;
    white-space: nowrap;
    background-color: #343A40;
    transition: width 0.6s ease 0s;
}
          </style>
          <div class="col-sm-5">
            <a href="" class="btn btn-light">Write a Review</a>
             <h3>RATING BREAKDOWN</h3>
             <table class="table">
              <tr>
                 <td>
                  5STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
          </div>
                </td> 
              </tr>
                  <tr>
                 <td>
                  4STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
                </td> 
              </tr>
                  <tr>
                 <td>
                  3STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
          </div>
                </td> 
              </tr>
                  <tr>
                 <td>
                  2STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100">4%</div>
          </div>
                </td> 
              </tr>
                  <tr>
                 <td>
                  1STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
          </div>
                </td> 
              </tr>
               
             </table>
          
          </div> <!-- col-sm-4 end -->
        </div>
   
      </div>
      
    <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
                 $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                          $("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                         listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
                 listComment();
            });

           

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>
     


<!-- -------------------- similar product ---------------------------------- -->
<style type="text/css">
    .blog .carousel-indicators {
    left: 0;
    top: auto;
    bottom: -40px;

}


/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 5px;
    width: 25px;
    height: 2px;
}

.blog .carousel-indicators .active {
background: teal;

}
.ftr2{
  background-color: #fff;
  height: 450px;

}
.ftr2 p{
    font-size: 12px;
    color: #7F8C8D;
}

.ftr2 p strong {
    color: #2E405E;
    font-size: 12px;
}
</style>
<script type="text/javascript">
    // optional
        $('#blogCarousel').carousel({
                interval: 5000
        });
</script>
<?php

    include('confs/config.php');
    $smilar = mysqli_query($mysqli,"SELECT * FROM product WHERE categories='$categories' ORDER BY id DESC LIMIT 0,4");
    
    
?>
<div class="ftr2">
  <h2 style="text-align: center; color: #5d6d7e; font-weight: bold; font-size: 17px;">Similar Product</h2>
  <br>
<div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                  <?php while($row_similar = mysqli_fetch_assoc($smilar)):?>
                                    <div class="col-md-3">
                                        <a href="detail2.php?id=<?php echo $row_similar['id'] ?>">
                                            <img src="admin/cover/<?php echo $row_similar['cover'] ?>" alt="Image" style="width: 250px; height:250px;">
                                            
                                        </a>
                                        <p><?php echo $row_similar['product_name']; ?></p>
                                        <p><strong>US$<?php echo $row_similar['price']; ?></strong></p>
                                    </div>
                                  <?php endwhile; ?>
                             
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                  <?php

                  include('confs/config.php');
                  $smilar2 = mysqli_query($mysqli,"SELECT * FROM product WHERE categories='$categories' ORDER BY id DESC LIMIT 4,4");
                  while($row_similar2 = mysqli_fetch_assoc($smilar2)):
    
                  ?>
          
                                    <div class="col-md-3">
                                        <a href="detail2.php?id=<?php echo $row_similar2['id'] ?>">
                                           <img src="admin/cover/<?php echo $row_similar2['cover'] ?>" alt="Image" style="width: 250px; height:250px;">
                                        </a>
                                        <p><?php echo $row_similar2['product_name']; ?></p>
                                        <p><strong>US$<?php echo $row_similar2['price']; ?></strong></p>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                            <a class="carousel-control-prev" href="#blogCarousel" role="button" data-slide="prev" style="margin-bottom: 100px; font-size: 10px;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#blogCarousel" role="button" data-slide="next" style="margin-bottom: 100px; font-size: 10px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
</div>
</div> <!-- ftr2 end -->
<?php include('002footer.php'); ?>

</body>
</html>



    
     





   









    


