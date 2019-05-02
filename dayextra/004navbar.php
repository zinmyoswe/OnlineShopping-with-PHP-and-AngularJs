<style type="text/css">
  .form-inline .form-control {
    display: inline-block;
    width: 400px;
    vertical-align: middle;
}


#searchResult{
 list-style: none;
 padding: 0px;
 width: 407px;
 position: absolute;
 margin: 0;
  opacity: 10.95;
  z-index: 10;
  font-size: 12px;
}

#searchResult li{
 background: #fff;
 color: #000;
 padding: 4px;
 margin-bottom: 1px solid white;
 border-radius: 2px;

}

#searchResult li:nth-child(even){
 background: #fff;
 color: #000;
}

#searchResult li a{
 cursor: pointer;
 color: #666;
}

#searchResult li a:hover{
 cursor: pointer;
 color: teal;
}

/*input[type=text]{
 padding: 5px;
 width: 400px;
 letter-spacing: 1px;
 margin-left: 4px;


}*/
.bg-light {
    background-color: #FFF !important;
}
.navbar-light .navbar-nav .nav-link {
    color: #000;
}
.bg-dark {
    background-color: #000 !important;
}

</style>

<!--  2nd nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="image/ACTIVE.png" width="30" height="35"><strong style="color: #FFC107; font-size: 13px;">ACTIVE FASHION</strong> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sale.php">Sale</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">New Arrivals</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="best-seller.php">Best Seller</a>
      </li>
      
      
   <form method="get" action="search.php" class="form-inline my-2 my-lg-0">
   <div class='soso' ng-controller="fetchCtrl" ng-click='containerClicked();' >
        
           <input type='text' name="user_query" class="form-control mr-sm-2" ng-keyup='fetchUsers()' ng-click='searchboxClicked($event);' ng-model='searchText' placeholder='Search...'><br>
            <ul id='searchResult' >
                <li ng-click='setValue($index,$event)' ng-repeat="result in searchResult" >
                  <a href="detail2.php?id={{result.id}}">
                  <img ng-src="admin/cover/{{ result.cover }}" width="30px" height="40px"> {{ result.name }}</a>
                </li>
            </ul>  
        </div>
          <button name="search" class="btn btn-outline-primary my-2 my-sm-0" type="submit"><span class="fa fa-search"></span></button>
    </form>
    </ul>
    
            
        <!-- Script -->
        <script>
        var fetch = angular.module('myapp', []);

        fetch.controller('fetchCtrl', ['$scope', '$http', function ($scope, $http) {
            
            // Fetch data
            $scope.fetchUsers = function(){
                
                var searchText_len = $scope.searchText.trim().length;

                // Check search text length
                if(searchText_len > 0){
                    $http({
                    method: 'post',
                    url: 'getData.php',
                    data: {searchText:$scope.searchText}
                    }).then(function successCallback(response) {
                        $scope.searchResult = response.data;
                    });
                }else{
                    $scope.searchResult = {};
                }
                
            }

            // Set value to search box
            $scope.setValue = function(index,$event){
                $scope.searchText = $scope.searchResult[index].name;
                $scope.searchResult = {};
                $event.stopPropagation();
            }

            $scope.searchboxClicked = function($event){
                $event.stopPropagation();
            }

            $scope.containerClicked = function(){
                $scope.searchResult = {};
            }
            
        }]);

        </script>
      <!-- ----  search engin angular & php end --- -->

  
      
      <ul class="navbar-nav">

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
          ?>
          
     

        
        
           <li class="nav-item">
        <a class="nav-link" href="cart.php"><img src="image/shopping-bag.png" width="20px" height="20px"></a>
      </li>
       <?php  } ?>
       <?php if(!isset($_SESSION['email'])){ ?>
        
         
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN/REGISTER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="checkout.php">LOGIN</a>
          <a class="dropdown-item" href="ajax-registration-script-with-php-mysql-and-jquery/index.php">REGISTER</a>
          
        </div>
      </li>
       <?php } else{ ?>

        <?php
      //get user
    $email = $_SESSION['email'];
    $sql_customer = mysqli_query($mysqli,"SELECT * FROM customer WHERE email = '$email'");
    $row_customer = mysqli_fetch_assoc($sql_customer);

?>
          <li class="nav-item">
        <a class="nav-link" href="" style="font-size: 11px;"><?php echo $row_customer['name'] ?></a>
      </li>
   
             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGOUT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">LOGOUT</a>
          <a class="dropdown-item" href="dashboard.php">Dashboard</a>
          
        </div>
      </li>
        <?php } ?>
      </ul>
  </div>
</nav>