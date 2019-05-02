<?php
  session_start();
  include('confs/config.php');
  include('function/function.php');
  include('001header.php');
  include('004navbar.php');
?>



<!-- carousel start -->
<script type="text/javascript">
    $(function(){
        $('#carouselExampleIndicators').carousel({
            interval: 3000
        });
    });
</script>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://static.zara.net/photos///mkt/spots/aw18-sneakers-man/subhome//desktop-sneakers-img01.st.jpg?1536253290297" alt="First slide" style="width: 625px; height: 800px; ">
      <img src="https://static.zara.net/photos///mkt/spots/aw18-sneakers-man/subhome//desktop-sneakers-slide01.st.jpg?1536253290297" alt="First slide" style="width: 630px; height: 800px; ">
      
      <div class="carousel-caption d-none d-md-block">
    <h1 style="font-weight: 600; margin-bottom: 350px; margin-left: 400px; font-size: 50px;">20% OFF EVERY MONDAY THROUGH
    	<p style="font-size: 12px;">SATISFIED FOR VARIOUS APPAREAL</p>
    </h1>
    
  </div>
    </div>

     <div class="carousel-item">
      <img src="https://static.zara.net/photos///mkt/spots/aw18-sneakers-man/home//desktop-imgsneakers.st.jpg?1536253589984" alt="First slide" style="width: 600px; height: 800px;">
      <img src="https://static.zara.net/photos///mkt/spots/aw18-sneakers-man/home//desktop-sneakers-slide01.st.jpg?1536253589984" alt="First slide" style="width: 650px; height: 800px;">
      
      <div class="carousel-caption d-none d-md-block">
    <h1 style="font-size: 80px; font-weight: 900; margin-bottom: 350px; margin-left: 400px;">JACKET & SNEAKERS
    	<p style="font-size: 12px;">CHUNKY SOLE SNEAKER IN CONSTRATION COLORS</p>
    </h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/yeezy-hp-mh-desktop_tcm221-280747.png" alt="Second slide" style=" height: 500px;">
      <div class="carousel-caption d-none d-md-block">
    <h1 style="font-size: 50px; font-weight: 900; margin-bottom: 140px; margin-right: 290px; color: #000;">YEEZY BOOST 350 V2 <br>TRIPLE WHITE
<p style="font-size: 14px; color: #000;">September 21st.</p>
 <a href=""  style="clear:both; background: #000; border: none; color: #fff; font-size: 1em; padding: 10px; cursor: pointer; font-size: 17px;" />GET DISCOUNT <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
    </h1>
    
  </div>
    </div>
       <div class="carousel-item">
       	<img src="https://static.zara.net/photos///mkt/spots/aw18-statement-easycolors-man/home//desktop-statementimg3.st.jpg?1536254405481" alt="First slide" style="width: 650px; height: 800px;">
      <img src="https://static.zara.net/photos///mkt/spots/aw18-statement-easycolors-man/home//desktop-statementimg2.st.jpg?1536254405481" alt="First slide" style="width: 600px; height: 800px;">
      

      
      <div class="carousel-caption d-none d-md-block">
    <h1 style="font-size: 68px; font-weight: 900; margin-bottom: 400px; margin-left: 640px;">STATEMENT
    	<p style="font-size: 16px;">FLASH OF COLORS</p>
    </h1>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- -----------------------------------product_dis START -------------------- -->
<style type="text/css">
  .product_dis{
  padding: 10px 15px;
  }
  .product_dis h1{
    text-align: center;
    font-size: 18px;
    font-weight: 600;
  }
  .product_dis img{
    width: 250px;
    height: 300px;
   
  }
  .product_dis p{
    font-size: 14px;
  }
/*  min-width: 768px start*/
  @media(min-width: 768px){
/*.carousel-inner > .carousel-item{
  height: 610px;
  width: 100%
}
.map{
  height: 500px;

}*/


}
/*  min-width: 768px end*/
</style>
<div class="container product_dis">
    
    	<h1>Men'S Collections</h1>
    	<div class="row">
    		<div class="col-sm-6 col-md-3">
    			<a href="product.php?cat=20"><img src="//uniqlo.scene7.com/is/image/UNIQLO/us_pc_m_080818_ezyjeans_L2?$jpgMQ$" class="img-responsive"></a>
    	<p>EZY ANKLE PANTS
Stylish pants with a breezy, ankle-length crop.</p>
    		</div><!--  col-md-4 col-sm-6 col-xs-12 end -->
    		<div class="col-sm-6 col-md-3">
    			<a href="product.php?cat=10"><img src="//uniqlo.scene7.com/is/image/UNIQLO/us_pc_L2_070618_m_bnr_08?$jpgMQ$" class="img-responsive"></a>
	<p>DRESS SHIRTS</p>
	<p>Stay pressed and polished.</p>
    		</div><!--  col-md-4 col-sm-6 col-xs-12 end -->
    		<div class="col-sm-6 col-md-3">
    			<a href="product.php?cat=21"><img src="https://uniqlo.scene7.com/is/image/UNIQLO/us_sp_090718_toc05_01_m?$jpgMQ$&wid=640" class="img-responsive"></a>
	<p>FLEECE JACKETS</p>Fuzzy. Warm. Soft. Stylish. That's the new fleece.
    		</div><!--  col-md-4 col-sm-6 col-xs-12 end -->
    		<div class="col-sm-6 col-md-3">
    			<a href="product.php?cat=18"><img src="//uniqlo.scene7.com/is/image/UNIQLO/us_sp_082718_toc06_01_m?$jpgMQ$&wid=640" class="img-responsive"></a>
	<p>HEATTECH Innerwear</p>Keep warm in pieces that generate heat.
    		</div><!--  col-md-4 col-sm-6 col-xs-12 end -->
    		<div class="col-sm-6 col-md-3">
    				<a href="product.php?cat=13"><img src="//uniqlo.scene7.com/is/image/UNIQLO/us_pc_L2_070618_m_bnr_07?$jpgMQ$" class="img-responsive"></a>
	<p>SWEATSHIRTS</p>Great for working out and hanging out.
    		</div><!--  col-md-4 col-sm-6 col-xs-12 end -->

    		<div class="col-sm-6 col-md-3">
    		
	<a href="product.php?cat=9"><img src="//uniqlo.scene7.com/is/image/UNIQLO/us_sp_082718_toc04_01_m?$jpgMQ$&wid=640" class="img-responsive"></a>
	<p>CASHMERE T-SHIRTS</p>Experience the luxurious feel of premium cashmere.
    		</div><!--  col-md-4 col-sm-6 col-xs-12 end -->

        <div class="col-sm-6 col-md-3">
        
  <a href="product.php?cat=9"><img src="https://uniqlo.scene7.com/is/image/UNIQLO/eu%2Dpc%2D210818%2Dm%2Dcategories%2Djeans?$jpg$" class="img-responsive"></a>
  <p>JEANS</p>Pack up and lace up for back to school..
        </div><!--  col-md-4 col-sm-6 col-xs-12 end -->


        <div class="col-sm-6 col-md-3">
        
  <a href="product.php?cat=9"><img src="https://media1.popsugar-assets.com/files/thumbor/d_T0ary592m00kXIc_elDsRIHiA/fit-in/2048xorig/filters:format_auto-!!-:strip_icc-!!-/2017/03/29/740/n/1922564/b744860458dbe4d09c15c7.39236374_edit_img_image_43368049_1490804909/i/Celebrities-Wearing-Adidas-Stan-Smiths.jpg" class="img-responsive"></a>
  <p>SHOES</p>PUREBOOTS GO.
        </div><!--  col-md-4 col-sm-6 col-xs-12 end -->
     
        
    	</div>
    	
<br><br>

	
  </div><!--  container end -->

  <!-- -----------------------------------product_dis END -------------------- -->

    <!-- -----------------------------------uni start -------------------- -->
  <style type="text/css">
    .uni img{
  
     
      width: 350px;
      height: 380px;
    
    }
    .uni{
      padding: 5px 15px;

    }

  </style>
<div class="container uni">
    <div class="row">
       <div class="col-sm-4 col-md-4"">
        <a href="product.php">
              <img src="image/ck.PNG"  class="img-responsive">
              </a>
     <h3>
Calvin Klein UNDERWEAR
: THE FIRST DESIGNER UNDERWEAR. MODERN SENSUALITY.</h3>

     <p>Explore experimental designs by artistic director Christophe Lemaire, combining elegant, flowing silhouettes and gorgeous autumnal colours.</p>
       </div> <!-- col-sm-4 end -->
       <div class="col-sm-4 col-md-4"">
        <a href="product.php">
         <img src="https://uniqlo.scene7.com/is/image/UNIQLO/eu%2Dpc%2D20180903%2Dhomepage%2Dspecial%2Dinnes%2D01?$jpg$" class="img-responsive">
       </a>
         <h3>UNIQLO X INES DE LA FRESSANGE 2018. AVAILABLE NOW</h3>
         <p>This year’s UNIQLO x Ines de la Fressange Fall/Winter collection boasts a vintage 1920s-inspired look. Includes kids' collection for the first time.</p>
       </div> <!-- col-sm-4 end -->
       <div class="col-sm-4 col-md-4"">
        <a href="product.php">
         <img src="image/puma_bts.jpg" class="img-responsive">
       </a>
         <h3>PUMA INES DE LA FRESSANGE 2018. AVAILABLE NOW</h3>
         <p>This year’s PUMA SHOES Ines de la Fressange Fall/Winter collection boasts a vintage 1920s-inspired look. Includes kids' collection for the first time.</p>
       </div> <!-- col-sm-4 end -->
    </div><!--  row end -->


     
  </div><!--  container uni -->


      <!-- -----------------------------------uni end -------------------- -->
<!-- ------------------------carousel start--------------------------------- -->
<script type="text/javascript">
    $(function(){
        $('#carouselExampleIndicators2').carousel({
            interval: 3000
        });
    });
</script>

<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
  

  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="https://images.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/Refresh_September_BrasTights_Women_GLP_Desk_1920x800_tcm221-286825.jpg" alt="Second slide" style=" height: 500px;">
      
      <div class="carousel-caption d-none d-md-block">
    <h1 style="font-weight: 600; margin-bottom: 120px; margin-right: 515px; font-size: 38px;">RACE-READY MINDSET
      <p style="font-size: 14px;">Stay motivated to run outside with the latest looks from adidas Training.</p>
      <a href="product.php"  style="clear:both; background: #fff; border: none; color: #000; font-size: 1em; padding: 10px; cursor: pointer; font-size: 17px;" />SHOP NOW <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
    </h1>
    
  </div>
    </div>


  
    
  </div>

</div>

<!-- ------------------------carousel end--------------------------------- -->
<!-- ------------------------nik start--------------------------------- -->
<style type="text/css">
  .nik{
    padding: 80px 0;
    text-align: center;

  }
  .nik img{
   
height: 400px;
width: 580px;



  }
  .nik a{
    font-size: 13px;
  }
</style>


    <div class="container nik">
    <div class="row">
      <div class="col-sm-6">
        <a href="product.php"><img src="image/nike.PNG" class="img-responsive"></a>
        <h3 >TARTAN PACK</h3>
        <p>Five styles, one timeless pattern.</p>
        <a href="product.php">SHOP FOOTWEAR</a>
      </div>
      <div class="col-sm-6">
        <a href="product.php"><img src="image/nike2.PNG" class="img-responsive"></a>
        <h3>NIKE TECH PACK</h3>
        <p>Explore the apparel made to turn ambition into action.</p>
        <a href="product.php">SHOP THE COLLECTION</a>
      </div>
    </div>
    </div><!--  container nik end -->
    <!-- ------------------------nik end--------------------------------- -->


<?php include('003latest_product.php'); ?>
<style type="text/css">
  .forever21{
     padding: 15px 0px;
  }
  .forever21 img{
     width: 300px;
     height: 500px;
  }
</style>
<div class="container forever21">
  <div class="row">
    <!-- <div class="col-sm-3">
      <a href="">
      <img src="https://www.forever21.com/us/shop/_common/images/en/20180905/mens-main_k1.jpg" class="img-responsive">
    </a>
    </div>
    <div class="col-sm-3">
      <a href="">
      <img src="https://www.forever21.com//us/shop/_common/images/en/20180905/mens-main_k2.jpg" class="img-responsive"></a>
    </div>
    <div class="col-sm-3">
      <a href="">
      <img src="https://www.forever21.com/us/shop/_common/images/en/20180905/mens-main_k3.jpg" class="img-responsive"></a>
    </div>
    <div class="col-sm-3">
      <a href="">
      <img src="https://www.forever21.com/us/shop/_common/images/en/20180905/mens-main_k4.jpg" class="img-responsive"></a>
    </div> -->
  </div>
  
</div>

<?php include('005bestseller.php'); ?>

   <!------------------ Hover Effect Style : Demo - 21 --------------->
   <style type="text/css">
     /*********************** Demo - 21 *******************/
.box21{text-align:center;position:relative}
.box21:after,.box21:before{content:"";width:2px;height:2px;border-radius:50%;background:rgba(0,0,0,.35);position:absolute;top:50%;left:50%;-webkit-transform:scale(0);-moz-transform:scale(0);-ms-transform:scale(0);-o-transform:scale(0);transform:scale(0)}
.box21:hover:after,.box21:hover:before{-webkit-transform:scale(400);-moz-transform:scale(400);-ms-transform:scale(400);-o-transform:scale(400);transform:scale(400)}
.box21:before{-o-transition:all .5s linear .3s;-moz-transition:all .5s linear .3s;-ms-transition:all .5s linear .3s;-webkit-transition:all .5s linear .3s;transition:all .5s linear .3s}
.box21:hover:before{-moz-transition-delay:0s;-webkit-transition-delay:0s;-o-transition-delay:0s;-ms-transition-delay:0s;transition-delay:0s}
.box21:after{-o-transition:all .5s linear .6s;-moz-transition:all .5s linear .6s;-ms-transition:all .5s linear .6s;-webkit-transition:all .5s linear .6s;transition:all .5s linear .6s}
.box21:hover:after{-moz-transition-delay:.2s;-webkit-transition-delay:.2s;-o-transition-delay:.2s;-ms-transition-delay:.2s;transition-delay:.2s}
.box21 img{width:100%;height:auto}
.box21 .box-content{width:100%;height:100%;position:absolute;top:0;left:0;background:0 0;color:#fff;padding-top:25px;-webkit-transform:scale(0);-moz-transform:scale(0);-ms-transform:scale(0);-o-transform:scale(0);transform:scale(0);-ms-transition:all .3s linear 0s;-o-transition:all .3s linear 0s;-webkit-transition:all .3s linear 0s;-moz-transition:all .3s linear 0s;transition:all .3s linear 0s;z-index:1}
.box21:hover .box-content{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);-moz-transition-delay:.4s;-webkit-transition-delay:.4s;-o-transition-delay:.4s;-ms-transition-delay:.4s;transition-delay:.4s}
.box21 .title{font-size:21px;font-weight:700;text-transform:uppercase;border-bottom:1px solid #fff;padding-bottom:20px;margin-top:20px}
.box21 .description{font-size:14px;font-style:italic;padding:0 10px;margin:15px 0}
.box21 .read-more{display:block;width:120px;background:#fff;border-radius:5px;font-size:12px;color:#000;text-transform:capitalize;padding:10px 0;margin:0 auto}
@media only screen and (max-width:990px){.box21{margin-bottom:30px}
}
@media only screen and (max-width:479px){.box21 .box-content{padding-top:0}
}
@media only screen and (max-width:359px){.box21 .title{padding-bottom:10px}
}
/*********************** haha*******************/
box1 img,.box1:after,.box1:before{width:100%;transition:all .3s ease 0s}
.box1 .icon,.box2,.box3,.box4,.box5 .icon li a{text-align:center}
.box10:after,.box10:before,.box1:after,.box1:before,.box2 .inner-content:after,.box3:after,.box3:before,.box4:before,.box5:after,.box5:before,.box6:after,.box7:after,.box7:before{content:""}
.box1,.box11,.box12,.box13,.box14,.box16,.box17,.box18,.box2,.box20,.box21,.box3,.box4,.box5,.box5 .icon li a,.box6,.box7,.box8{overflow:hidden}
.box1 .title,.box10 .title,.box4 .title,.box7 .title{letter-spacing:1px}
.box3 .post,.box4 .post,.box5 .post,.box7 .post{font-style:italic}

.mt-30{margin-top:30px}
.mt-40{margin-top:40px}
.mb-30{margin-bottom:30px}

   </style>

        <div class="container mt-40 mb-30">
            <h3 class="text-center">SHARE HOW TO WEAR IT</h3>
            <p class="text-center">share a photo of your activefashion favourite and appear in our showcase below. Make sure to tag your image with <a href="">@activefashion</a></p>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="image/a1.jpg" alt="">
                        <div class="box-content">
                            <br><br><br><br><br>
                            <span class="fab fa-instagram fa-4x"></span>
                            <br><br>
                             <a class="read-more" href="product.php">SHOP NOW <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="image/a2.jpg" alt="">
                        <div class="box-content">
                            <br><br><br><br><br>
                            <span class="fab fa-instagram fa-4x"></span>
                            <br><br>
                             <a class="read-more" href="product.php">SHOP NOW <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="image/a5.jpg" alt="">
                        <div class="box-content">
                            <br><br><br><br><br>
                            <span class="fab fa-instagram fa-4x"></span>
                            <br><br>
                             <a class="read-more" href="product.php">SHOP NOW <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
                        </div>
                    </div>
                </div>

            </div>
               <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                  
                    <div class="box21">
                        <img src="image/a8.jpg" alt="">
                        <div class="box-content">
                            <br><br><br><br>
                            <span class="fab fa-instagram fa-4x"></span>
                            <br><br>
                             <a class="read-more" href="product.php">SHOP NOW <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
                        </div>
                    </div>
                      <div class="box21">
                        <img src="image/a3.jpg" alt="">
                        <div class="box-content">
                            
                            <span class="fab fa-instagram fa-4x"></span>
                            <br><br>
                             <a class="read-more" href="product.php">SHOP NOW <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="image/a4.jpg" alt="">
                        <div class="box-content">
                            
                            <span class="fab fa-instagram fa-4x"></span>
                            <br><br>
                             <a class="read-more" href="product.php">SHOP NOW <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
                        </div>
                    </div>
                      <div class="box21">
                        <img src="image/a7.jpg" alt="">
                        <div class="box-content">
                            <br><br><br><br><br>
                            <span class="fab fa-instagram fa-4x"></span>
                            <br><br>
                             <a class="read-more" href="product.php">SHOP NOW <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box21">
                        <img src="image/a6.jpg" alt="">
                        <div class="box-content">
                            <br><br><br><br><br>
                            <span class="fab fa-instagram fa-4x"></span>
                            <br><br>
                             <a class="read-more" href="product.php">SHOP NOW <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
       
<?php include('002footer.php'); ?>

</body>
</html>

 

 
        
