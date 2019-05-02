<?php 
include('header.php');
include_once("db_connect.php");
?>

<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/register.js"></script>
<!-- font -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!--  ==================login form ======================== -->

<!--  ==================login form ======================== -->
<style type="text/css">
  /*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */
.error{
		color: #DC3545;
    padding: 0px;
    margin-top: 5px;
    font-size: 12px;
	}
h1,h2,h3,h4{
  font-family: 'Abel',sans-serif;
}
body, html{
     height: 100%;
  background-repeat: no-repeat;
  font-family: 'Lato',sans-serif;
}

.main{
  margin-top: 70px;
  
}

h1.title { 
  font-size: 25px;
  font-weight: 300; 
}

hr{
  width: 10%;
  color: #fff;
}

.form-group{
  margin-bottom: 15px;
}

label{
  margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
  background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
  margin-top: 30px;
  margin: 0 auto;
  max-width: 380px;
    padding: 40px 40px;

}

.login-button{
  margin-top: 5px;
}

.login-register{
  font-size: 11px;
  text-align: center;
}
.input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: #343A40;
    text-align: center;
    background-color: #fff;
    border: 1px solid #CCC;
    border-radius: 4px;
}
 .btn-warning {
    background-image: linear-gradient(to bottom, #FFC107 0px, #FFC107 100%);
    background-repeat: repeat-x;
    border-color: #FFC107;
}

  .btn-warning {
    color: #212529;
    background-color: #FFC107 ;
    border-color: #FFC107 ;
}

.btn-warning:hover {
  color: #fff;
  background-color: #FFC107;
  border-color: #FFC107;
}

.btn-warning:focus {
   color: #fff;
  background-color: #00796b;
  border-color: #00796b;
}
</style>

<div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <a href="index.php"><img src="../image/ACTIVE.png" width="30" height="35"><strong style="color: #FFC107; font-size: 14px;">ACTIVE FASHION</strong> </a>
                    
                  </div>
              </div> 

        <div class="main-login main-center">


	<form class="form-signin" method="post" id="register-form">
	
	    <div id="error">
        <!-- error will be shown here ! -->
        </div>
    <div class="form-group">
              <label for="text" class="cols-sm-2 control-label"> Username</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
        <span id="check-e"></span>
                </div>
              </div>
            </div>

  <div class="form-group">
              <label for="email" class="cols-sm-2 control-label"> Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
        <span id="check-e"></span>
                </div>
              </div>
            </div>

       <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                </div>
              </div>
            </div>

          <div class="form-group">
              <label for="cpassword" class="cols-sm-2 control-label">Confirm Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" id="cpassword" />
                </div>
              </div>
            </div>




	<div class="form-group">
	<button type="submit" class="btn btn-warning btn-lg btn-block login-button" name="btn-save" id="btn-submit">
	Create Account
	</button> 
	</div>  
	</form>

  </div>
      </div>
    </div>

