
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">FashionStore</a>
  </div>
  
  <div class="collapse navbar-collapse js-navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>        
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-3">
            <ul>

              <li class="dropdown-header">Men Collection</li>                            
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Features</li>
              <li><a href="#">Auto Carousel</a></li>
              <li><a href="#">Carousel Control</a></li>
              <li><a href="#">Left & Right Navigation</a></li>
              <li><a href="#">Four Columns Grid</a></li>

              <li class="divider"></li>
              <li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
              <li><a href="#">Google Fonts</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Plus</li>
              <li><a href="#">Navbar Inverse</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li><a href="#">Coloured Headers</a></li>                            
              <li><a href="#">Primary Buttons & Default</a></li>              
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
              <li><a href="#">Calls to action</a></li>
              <li><a href="#">Custom Fonts</a></li>
              <li><a href="#">Slide down on Hover</a></li>                         
            </ul>
          </li>
        </ul>       
      </li>
      <style type="text/css">
        h5{
          font-family: AdineuePRO,Helvetica,Arial,sans-serif;
          font-weight: 600;
          font-style: normal;
          text-transform: uppercase;
          letter-spacing: 1.5px;
        }
        h5 a {
            font-size: 18px;
        }
        a {
    cursor: pointer;
    text-decoration: none;
    display: block;
  line-height: 23px;
  color: #000;
  font-size: 13px;
}

      </style>
            <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <span class="caret"></span></a>        
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-3">
              <ul>
              <h5><a href="product.php">Features</a></h5>
              <?php
                include('confs/config.php');
                $result = mysqli_query($mysqli,"SELECT * FROM categories ORDER BY cat_id DESC");
                while($row = mysqli_fetch_assoc($result)):
              ?>
              <li><a href="product.php?cat=<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></a></li>

            <?php endwhile; ?>
              <li class="divider"></li>
              
              <li class="dropdown-header">Brands</li>
               <?php
                include('confs/config.php');
                $result = mysqli_query($mysqli,"SELECT * FROM brand 
                                    ORDER BY brand_id ASC "); 
                while($row = mysqli_fetch_assoc($result)):
              ?>
                            <li><a href="product.php?brand=<?php echo $row['brand_id'] ?>"><?php echo $row['brand_name'] ?></a></li>
                            <?php endwhile; ?>
             
            
            </ul>
          </li>
          <?php
                include('confs/config.php');
                $result = mysqli_query($mysqli,"SELECT * FROM categories 
                                    ORDER BY cat_id ASC LIMIT 4"); 
              ?>
              
          <li class="col-sm-3">
            <?php while($cat = mysqli_fetch_array($result)):

              ?>
            <ul>
               
              <h5><a href="product.php?cat=<?php echo $cat['cat_id'] ?>"><?php echo $cat['cat_name']?></a></h5>
                <?php
                          $cat_id = $cat['cat_id'];
                          $subs = mysqli_query($mysqli,"SELECT categories.*,sub_category.sub_name,sub_category.sub_id FROM categories LEFT JOIN sub_category ON categories.cat_id = sub_category.category_id WHERE sub_category.category_id = $cat_id");
                          while($sub = mysqli_fetch_assoc($subs)):
                            $id = $sub['sub_id'];
                            $sub_name = $sub['sub_name'];
                            $created_date = $sub['created_date'];
                          ?>
              <li><a href="#"><?php echo $sub_name ?></a></li>
             <?php endwhile; ?> 
            
                        
            </ul>
            <?php endwhile; ?>
          </li>
          <?php
                include('confs/config.php');
                $result = mysqli_query($mysqli,"SELECT * FROM categories 
                                    ORDER BY cat_id DESC LIMIT 5"); 
              ?>
              
          <li class="col-sm-3">
            <?php while($cat = mysqli_fetch_array($result)):?>
            <ul>
               
              <h5><a href="product.php?cat=<?php echo $cat['cat_id'] ?>"><?php echo $cat['cat_name']?></a></h5>
                <?php
                          $cat_id = $cat['cat_id'];
                          $subs = mysqli_query($mysqli,"SELECT categories.*,sub_category.sub_name,sub_category.sub_id FROM categories LEFT JOIN sub_category ON categories.cat_id = sub_category.category_id WHERE sub_category.category_id = $cat_id");
                          while($sub = mysqli_fetch_assoc($subs)):
                            $id = $sub['sub_id'];
                            $sub_name = $sub['sub_name'];
                            $created_date = $sub['created_date'];
                          ?>
              <li><a href="#"><?php echo $sub_name ?></a></li>
             <?php endwhile; ?> 
            
                        
            </ul>
            <?php endwhile; ?>
          </li>
                    <li class="col-sm-3">
              <ul>
              <li class="dropdown-header">Women Collection</li>                            
                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="product.php">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
        </ul>       
      </li>
            <li><a href="best-seller.php">Best Seller</a></li>
            <li><a href="product.php">New Arrivals</a></li>
            <li>   <form method="get" action="search.php" class="navbar-form navbar-left" enctype="multipart/form-data" >
        <div class="input-group">
          <input name="user_query" type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-info" type="submit" name="search">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
</li>

    </ul>
        <ul class="nav navbar-nav navbar-right">
          

   
        <?php if(!isset($_SESSION['email'])){ ?>

          <li><a href='checkout.php'>LOGIN</a></li>
       <?php } else{ ?>
        
          <li><a href='logout.php'>LOGOUT</a></li>
          <li><a href='dashboard.php'>Dashboard</a></li>
        <?php } ?>
         
        
      </ul>
  </div><!-- /.nav-collapse -->
  </nav>
