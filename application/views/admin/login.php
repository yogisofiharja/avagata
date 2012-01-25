<!doctype html>
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<!--[if IE 8 ]><meta http-equiv="X-UA-Compatible" content="IE=7"><![endif]-->
	<title>Avagata On The Move!!</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	<!-- CSS Styles -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/admin/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>asset/admin/css/jquery.tipsy.css">

	<script src="<?php echo base_url()?>asset/admin/js/libs/modernizr-1.7.min.js"></script>
</head>
<body class="login">
	<section role="main">
	
		<a href="<?php echo base_url()?>admin" title="Back to Homepage"></a>
	
		<!-- Login box -->
		<article id="login-box">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et dignissim metus. Maecenas id augue ac metus tempus aliquam. </p>
		
			<form action="<?php echo base_url('admin/post/ceklogin')?>" method="POST">
				<fieldset>
					<dl>
						<dt>
							<label>Login</label>
						</dt>
						<dd>
							<input type="text" class="large" name="username">
						</dd>
						<dt>
							<label>Password</label>
						</dt>
						<dd>
							<input type="password" class="large" name="password">
						</dd>
					</dl>
				</fieldset>
				<button type="submit" class="right">Log in</button>
			</form>
		
		</article>
		<!-- /Login box -->
	
		<!-- Notification -->

		<?php
		if ($stat == 'error'){
		?>
		<div id="notif_login" class="notification error">
			<a href="#" class="close-notification" title="Hide Notification" rel="tooltip">x</a>
			<p>Maaf Username atau Password yang anda masukkan tidak sesuai</p>

		</div>
		<?php } ?>
		<!-- /Notification -->
		
	</section>

	<!-- JS Libs at the end for faster loading -->
	<script src="<?php echo base_url()?>asset/admin/js/jquery/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo base_url()?>asset/admin/js/jquery/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<script src="<?php echo base_url()?>asset/admin/js/libs/selectivizr.js"></script>
	<script src="<?php echo base_url()?>asset/admin/js/jquery/jquery.tipsy.js"></script>
	<script src="<?php echo base_url()?>asset/admin/js/script.js"></script>

</body>

</html>