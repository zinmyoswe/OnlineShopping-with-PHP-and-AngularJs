<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!--  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css"> -->
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

        
<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<link rel="stylesheet" type="text/css" href="css/nav.css">
<script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>



<script src="angular.min.js"></script>
</head>
<body ng-app='myapp'>
  <style type="text/css">
    .container{

    max-width: 1280px;
    padding: 0;


  }


  
    .label-warning {
    background-color: #FFC107;
    color : black;
}
/*search engine*/
.navbar-form .input-group > .form-control {
    width: 460px;
}

.btn-danger {
    color: #FFF;
    background-color: #DC3545;
    border-color: #DC3545;
}
.btn-info {
    color: #FFF;
    background-color: #17A2B8;
    border-color: #17A2B8;
}
 /*Prdouct Style */
#title{
    font-family: 'Times New Roman', Times, serif;
    
    color: #273746;
    font-size: 20px;
}

.display{
    width: 300px;
    height: 450px;
    cursor: pointer;
    background-color: #fff;
}


.box{
  width: 230px;
  height: 150px;

}



.display p strong{
    color: #2e405e;
    font-size: 12px;
}
.display p strong i a{
    color: #7f8c8d;
    font-size: 12px;

}
/*sidebar*/
.cats {
  list-style: none;
  padding: 0;
}

.cats li b a {
  display: block;
  font-size: 14px;
  padding: 8px 15px;
  color: black;
  
}

.cats li a {
  display: block;
  font-size: 14px;
  padding: 8px 15px;
  color: grey;
}

.cats li a:hover {
  
  color: #007BFF;
  


}



  </style>