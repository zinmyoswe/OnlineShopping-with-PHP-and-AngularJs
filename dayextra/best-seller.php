<?php
  session_start();
  include('confs/config.php');
  include('function/function.php');
    include('001header.php');
  include('004navbar.php');
?>

<!-- <b>

<?php echo $_SESSION['color'];?></b> -->
<style type="text/css">
  .badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 60%;
    font-weight: 550;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}
</style>






      <div class="container">

        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-7">
          
          </div>
        </div>
      </div>
        


<?php
          if(isset($_SESSION['cart'])) {

            $total = 0;
            $itemqty = 0;
      
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = "SELECT  product_name, qty, price FROM product WHERE id = $product_id";
            $run = mysqli_query($mysqli,$result);

            if($run){

              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                $itemqty = $itemqty+$quantity;               
              }
            }
          }
          echo "US$ $total<br>";
          echo "<span class='badge progress-bar-danger'>
                $itemqty</span><br>";
        }

        
        ?>


<hr>
 <div class="container" >
   <div class="row">
     <div class="col-md-2">

        
       <ul class="cats">
        <li>
            <b><a href="index.php">All Categories</a></b>
          </li>
          <?php getcat(); ?>
        </ul><br><br>

        <ul class="cats">
        <li>
            <b><a href="index.php">All Brands</a></b>
          </li>
          
           <?php getbrand(); ?>
        </ul>
     
   



     </div> <!-- col-md-4 end-->
     <div class="col-md-10">
      <div class="row">

       <div class="container" ng-controller='fetchCtrl'>
        <div class="row">

            <!-- Post -->
            <div class="col-md-3" ng-repeat='product in posts'>
              <div class="display" >
              
            
         <a href="detail2.php?id={{ product.id }}"><img ng-src='admin/cover/{{ product.cover }}' width='220' height='300'/></a>
                
             
               
                <!--   angular if else statement start -->
              <div ng-if="product.qty <'5'">
           
                <span class='badge badge-warning pull-left' style='margin-top: 6px;'>Low In Stock</span>
             </div>
                <!--   angular if else statement end -->
                <img src="image/bestseller.png" width="90" height="20" style="margin-left: 65px;">
  
              <br><br>

              <div class="box"><p><strong><i><a href="detail2.php?id={{ product.id }}">{{ product.product_name }}</a></i></strong></p>
               <p><strong>US$ {{ product.price }}</strong></p>
              </div>
       
              </div>
              </div>
              <hr><br>
            <!-- Post end-->
            <h3 ng-show="showLoadmore" ng-click='getPosts()' style="text-align: center;color:#000; font-size: 20px; cursor: pointer;">{{ buttonText }} &raquo;</h3>
            <input type="hidden" id="row" ng-model='row'>

        </div>
        </div>
        <!-- Script -->
        <script src="angular.min.js"></script>
        <script>
        var fetch = angular.module('myapp', []);

        fetch.controller('fetchCtrl', ['$scope', '$http', function ($scope, $http) {

            // Variables
            $scope.showLoadmore = true;
            $scope.row = 0;
            $scope.rowperpage = 12;
            $scope.buttonText = "Load More";
           
            // Fetch data
             $scope.getPosts = function(){
                
                $http({
                method: 'post',
                url: 'getBestseller.php',
                data: {row:$scope.row,rowperpage:$scope.rowperpage}
                }).then(function successCallback(response) {
               
                    if(response.data !='' ){
                      
                        $scope.row+=$scope.rowperpage;
                        if($scope.posts != undefined){
                            $scope.buttonText = "Loading ...";
                            setTimeout(function() {
                                $scope.$apply(function(){
                                angular.forEach(response.data,function(item) {
                                    $scope.posts.push(item);
                                });
                                $scope.buttonText = "Load More";
                                });
                            },500);
                            // $scope.posts.push(response.data);
                             
                        }else{
                            $scope.posts = response.data;
                        }
                    }else{
                        $scope.showLoadmore = false;
                    }

                });
             }

             // Call function
             $scope.getPosts();
      
        }]);

        </script>

       </div><!--  row end -->
     </div> <!-- col-md-8 end-->
   </div>
 </div>

<?php include('003latest_product.php'); ?>
<?php include('002footer.php'); ?>
</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/.js"></script>


  
</html>

<?php
include('confs/config.php');
$sel = "SELECT product_id, SUM(units) AS TotalQuantity
FROM order_items
GROUP BY product_id
ORDER BY TotalQuantity DESC LIMIT 10";
$run = mysqli_query($mysqli,$sel);
while($row = mysqli_fetch_assoc($run)): ?>
  
 

<?php endwhile; ?>

        
