<?php
include('partials/header.php');
?>
<title>Register page</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="row box" id="login-box">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-login">
			<div class="alert alert-info">
			 <h2>Bootstrap Register Form with Captcha using PHP & Ajax</h2>
			</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
				  <div class="alert alert-danger" role="alert" id="error" style="display: none;">...</div>
				  	<div class="alert alert-success" role="alert" id="success" style="display: none;">...</div>
					<form id="register-form" method="post" role="form">
						<div class="messages"></div>
					<div class="controls">
					<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					<label for="form_name">Firstname *</label>
					<input id="form_name" type="text" name="f_name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
					<div class="help-block with-errors"></div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="form_lastname">Lastname *</label>
					<input id="form_lastname" type="text" name="l_name" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
					<div class="help-block with-errors"></div>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-12">
					<div class="form-group">
					<label for="form_email">Email *</label>
					<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
					<div class="help-block with-errors"></div>
					</div>
					</div>
					</div>
					<div class="row">

					<div class="col-md-6">
					<div class="form-group">
					<label for="form_pass">Password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Please enter your password">
					<div class="help-block with-errors"></div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="form_re_pass">Re-Enter Password</label>
					<input type="password" name="re_password" id="re_password"  class="form-control" placeholder="Please enter again password">
					<div class="help-block with-errors"></div>
					</div>
					</div>
					<div class="col-md-12">
					<div class="form-group">
					<div class="g-recaptcha" data-sitekey="your site key capcha"></div>
					</div>
					</div>
					<div class="col-md-12">
					<button type="submit" class="btn btn-success btn-send" id="register_button" name="register_button" value="Register">Register</button>
					</div>
					</div>
					</div>
					</form>

				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<?php
include('partials/footer.php')
?>