<?php include_once("confs/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpzag.com : Demo Create Bootstrap Multiple Image Slider with jQuery & MySQL</title>
 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<style type="text/css">
	.multi-image-slider{
  .carousel-inner{
    > .item{
      transition: 500ms ease-in-out left;
    }
    .active{
      &.left{
        left:-33%;
      }
      &.right{
        left:33%;
      }
    }
    .next{
      left: 33%;
    }
    .prev{
      left: -33%;
    }
    @media all and (transform-3d), (-webkit-transform-3d) {
      > .item{
        // use your favourite prefixer here
        transition: 500ms ease-in-out left;
        transition: 500ms ease-in-out all;
        backface-visibility: visible;
        transform: none!important;
      }
    }
  }
  .carouse-control{
    &.left, &.right{
      background-image: none;
    }
  }
}
.container {
    width: 88%;
}

.carousel-inner > .item > a > img, .carousel-inner > .item > img, .img-responsive, .thumbnail a > img, .thumbnail > img {
    display: block;
    max-width: 100%;
    height: 300px;
}

</style>

<!-- container start-->
</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="http://www.phpzag.com" class="navbar-brand">PHPZAG.COM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.phpzag.com">Home</a></li>
           
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container" style="min-height:500px;">
	<div class=''>
	</div>
<!-- container end-->
<div class="container">	
	<h2>Create Bootstrap Multiple Image Slider with jQuery & MySQL</h2>		
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide multi-image-slider" id="theCarousel">
				<div class="carousel-inner">			
				 <?php
					$sqlQuery = "SELECT id, cover FROM product ORDER BY id DESC LIMIT 8";
					$resultSet = mysqli_query($mysqli, $sqlQuery);
					$setActive = 0;				
					$sliderHtml = '';				
					while( $sliderImage = mysqli_fetch_assoc($resultSet)){	
						$activeClass = "";			
						if(!$setActive) {
							$setActive = 1;
							$activeClass = 'active';						
						}						
						$sliderHtml.= "<div class='item ".$activeClass."'>";
						$sliderHtml.= "<div class='col-xs-4'><a href='".$sliderImage['id']."'>";
						$sliderHtml.= "<img src='admin/cover/".$sliderImage['cover']."' class='img-responsive' height='100'";
						$sliderHtml.= "</a></div></div>";					
					}
					echo $sliderHtml;
				 ?>	  
				</div>
				<a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
				<a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			 </div>
		</div>
	</div>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/create-bootstrap-multiple-image-slider-with-jquery/">Back to Tutorial</a>		
	</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src="js/multiple-image-slider.js"></script>
<!-- footer -->

<div class="insert-post-ads1" style="margin-top:20px;">

</div>
</div>
</body></html>

