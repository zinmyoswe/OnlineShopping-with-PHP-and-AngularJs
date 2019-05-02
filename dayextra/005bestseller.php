<style type="text/css">
    .blog2 .carousel-indicators {
    left: 0;
    top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog2 .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 2px;
    width: 25px;
    height: 2px;
}

.blog2 .carousel-indicators .active {
background: #000 ;
}
.ftr2{
  padding: 5px 0;

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
        $('#blogCarousel2').carousel({
                interval: 100
        });
</script>
<?php

    include('confs/config.php');
    $result = mysqli_query($mysqli,"SELECT product.*,order_items.product_id, SUM(order_items.units) AS TotalQuantity
            FROM product 
            LEFT JOIN order_items 
            ON product.id = order_items.product_id
            GROUP BY order_items.product_id
            ORDER BY TotalQuantity ASC LIMIT 0,4");
    
?>
<div class="ftr2">
  <h2 style="text-align: center; color: #5d6d7e; font-weight: bold; font-size: 19px;">Best Seller</h2>
  <br>
<div class="container">
            <div class="blog2">
       
                    <div id="blogCarousel2" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel2" data-slide-to="1"></li>
                            <li data-target="#blogCarousel2" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                  <?php while($row2 = mysqli_fetch_assoc($result)):?>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="detail2.php?id=<?php echo $row2['id']; ?>">
                                            <img src="admin/cover/<?php echo $row2['cover'] ?>" alt="Image" style="width: 250px; height:250px;">
                                            
                                        </a>
                                        <p><?php echo $row2['product_name']; ?></p>
                                        <p><strong>US$<?php echo $row2['price']; ?></strong></p>
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
                  $result = mysqli_query($mysqli,"SELECT product.*,order_items.product_id, SUM(order_items.units) AS TotalQuantity
            FROM product 
            LEFT JOIN order_items 
            ON product.id = order_items.product_id
            GROUP BY order_items.product_id
            ORDER BY TotalQuantity ASC LIMIT 4,4");
                  while($row3 = mysqli_fetch_assoc($result)):
                  ?>
          
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="detail2.php?id=<?php echo $row3['id']; ?>">
                                           <img src="admin/cover/<?php echo $row3['cover'] ?>" alt="Image" style="width: 250px; height:250px;">
                                        </a>
                                         <p><?php echo $row3['product_name']; ?></p>
                                        <p><strong>US$<?php echo $row3['price']; ?></strong></p>
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
                  $result = mysqli_query($mysqli,"SELECT product.*,order_items.product_id, SUM(order_items.units) AS TotalQuantity
            FROM product 
            LEFT JOIN order_items 
            ON product.id = order_items.product_id
            GROUP BY order_items.product_id
            ORDER BY TotalQuantity ASC LIMIT 8,4");
                  while($row4 = mysqli_fetch_assoc($result)):
                  ?>
          
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="detail2.php?id=<?php echo $row4['id']; ?>">
                                           <img src="admin/cover/<?php echo $row4['cover'] ?>" alt="Image" style="width: 250px; height:250px;">
                                        </a>
                                         <p><?php echo $row4['product_name']; ?></p>
                                        <p><strong>US$<?php echo $row4['price']; ?></strong></p>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
    <a class="carousel-control-prev" href="#blogCarousel2" role="button" data-slide="prev" style="margin-bottom: 100px; font-size: 10px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#blogCarousel2" role="button" data-slide="next" style="margin-bottom: 100px; font-size: 10px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                    </div>
                    <!--.Carousel-->

           
            </div>
</div>
</div> <!-- ftr2 end -->