<?php include_once('../view/auth.php'); ?>
<?php include_once('../controller/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Management System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form method="post" class="login100-form validate-form" action="login.php" >
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username" id="divUsername">
						<input class="input100" type="text" name="username" placeholder="Username" id="username" value="<?php echo $username; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password" id="divPassword">
						<input class="input100" type="password" name="password" placeholder="Password" id="password" value="<?php echo $password; ?>">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="Remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="login" id="btnlogin" >
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script>
  
  $("form").submit(function (e){
      
      var username = $('#username').val();
      var password = $('#password').val();

      if(username == ""){
        $('#divUsername').addClass('has-error has-feedback');
        $('#divUsername').append('<span id = "spanUsername" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The username is required"></span>');

        $('#btnlogin').atrr("disabled", true);

        $('#username').keydown(function(){
            $('#divUsername').removeClass('has-error');
             $('#spanUsername').remove();
             $('#btnlogin').atrr("disabled", false);
        });

      }

       if(password == ""){
        $('#divPassword').addClass('has-error has-feedback');
        $('#divPassword').append('<span id = "spanPassword" class = "glyphicon glyphicon-remove form-control-feedback" data-toggle = "tooltip" title= "The password is required"></span>');

         $('#btnlogin').atrr("disabled", true);

        $('#password').keydown(function(){
            $('#divPassword').removeClass('has-error');
            $('#spanPassword').remove();
            $('#btnlogin').atrr("disabled", false);
             

        });

      }

      if (username == "" || passs == "") {
        
        e.preventDefault();
        return false;
      }else {
        
      }

  });

</script>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>