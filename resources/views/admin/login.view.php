<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ChessVicky | Dashboard</title>

  <!-- Site Icons -->
  <link rel="apple-touch-icon" href="<?= url('assets/img/apple-touch-icon.png'); ?>">
  <link rel="icon" href="<?= url('assets/img/icon.ico'); ?>">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Framework -->
  <link rel="stylesheet" href="<?= url('assets/css/bootstrap.min.css'); ?>">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="<?= url('assets/icons/entypo.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/flag-icon.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/material-icon.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/weather-icons.min.css'); ?>">

  <!-- Plugins -->
  <link rel="stylesheet" href="<?= url('assets/css/plugins.css'); ?>">

  <!-- Main Template CSS -->
  <link rel="stylesheet" href="<?= url('assets/css/bootstrap.custom.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/css/helper.css'); ?>">
</head>


<body>

  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

	<div id="rs-wrapper" class="bg-grad-03">

		<div class="login-wrap p-a-md m-x-auto">
			<p class="text-center"><img style="width: 180px;" src="<?= url('assets/img/logo.png'); ?>" alt="Logo"></p>
			<div class="bg-white b-r-a p-a-lg light-bs">
				<p class="f-l-15 text-uppercase text-center text-muted">Login Page</p>
				<form class="m-b-lg" id="rs-validation-login-page" method="post" action="<?= url('login'); ?>">
					<div class="form-group has-feedback feedback-left">
						<label class="control-label">Username</label>
						<input type="text" name="username" class="form-control">
						<span class="gcon gcon-user f-s-xs form-control-feedback" aria-hidden="true"></span>
					</div><!-- /.form-group -->
					<div class="form-group has-feedback feedback-left">
						<label class="control-label">Password</label>
						<input type="password" name="password" class="form-control">
						<span class="gcon gcon-lock f-s-xs form-control-feedback" aria-hidden="true"></span>
					</div><!-- /.form-group -->
					
					<button class="btn btn-success btn-block text-uppercase" type="submit">Log me in</button>
				</form>
			<!--	<p class="text-center text-muted small m-a-0">
					<a href="page-forgot-01.html">Forgot Password</a><br>
					Don't have an account? <a href="page-signup-01.html">Sign up here</a>
				</p> -->
			</div><!-- /.bg-white -->
		</div><!-- /.login-wrap -->


		<!-- BEGIN FOOTER -->
		<footer class="rs-footer login-footer text-center">
			<span class="text-white small">&copy; 2017 Powered By <a href="http://trumpetstechnologies.com" class="text-lighten">Trumpets.</a></span>
		</footer>
		<!-- END FOOTER -->

	</div><!-- /#rs-wrapper -->


	
	<!-- <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js></script>
	<script>
	window.jQuery || document.write('<script src="../dist/js/vendor/jquery.min.js"><\/script>')
	</script> -->
	<script src="<?= url('assets/js/vendor.js'); ?>"></script>
	<script src="<?= url('assets/js/plugins.js'); ?>"></script>
	

	<!-- Page Plugins -->
	<script src="<?= url('assets/plugins/jquery.validate.min.js'); ?>"></script>

	<!-- Template Js -->
	<script src="<?= url('assets/js/apps.js'); ?>"></script>

	<script type="text/javascript">
	
		jQuery(document).ready(function($){

			"use strict";

			// Footer Absolute
			$('.rs-footer').footerAbsolute({
			    absoluteClass		: 'login-footer',
			    mainContent			: 'login-wrap'
			});

			// Example login validation
			$('#rs-validation-login-page').validate({
				ignore: 'input[type=hidden]', // ignore hidden fields
				rules: {
					username: "required",
					password: "required"
				},
				messages: {
					username: "Please enter username",
					password: "Please provide a password",
				},
				errorElement: "p",
				errorPlacement: function ( error, element ) {
					error.addClass( "help-block" );
					// Has feedback
					if (element.parents('div').hasClass('has-feedback')) {
						error.appendTo( element.parent() );
					}
					else{
						error.insertAfter(element);
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).removeClass( "has-error" );
				}

			});

		});

	</script>

</body>
</html>