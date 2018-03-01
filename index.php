<!-- INCLUDE LOGIN.PHP SCRIPT -->
<?php include('assets/php/login.php'); ?>

<!DOCTYPE html>
<html>
<head>

	<!-- PAGE TITLE -->
	<title>Daily Journal</title>

	<!-- FAVICON -->
	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

	<!-- META DATA -->
  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- FONT AWESOME -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Passion+One|Roboto:500" rel="stylesheet">

	<!-- RESET CSS LINK -->
  <link rel="stylesheet" type="text/css" href="assets/css/reset.css">

	<!-- CUSTOM CSS LINK -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<!-- BOOTSTRAP CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

	<!-- TOP NAV & LOGIN BAR -->
	<nav id="login-nav" class="navbar navbar-expand-lg navbar-dark bg-dark">

		<!-- APP LOGO -->
	  <a class="navbar-brand" href="#"><span class="logo">Daily Journal</span> <i class="fas fa-pencil-alt"></i></a>

	  <!-- MOBILE NAV COLLAPSE BUTTON -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <!-- END MOBILE NAV COLLAPSE BUTTON -->

		<!-- LOGIN DIV -->
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto"></ul>

			<!-- LOGIN FORM -->
	    <form class="form-inline my-2 my-lg-0" method="post">
				<!-- EMAIL INPUT -->
	      <input class="form-control mr-sm-2" type="email" name="login-email" id="login-email" placeholder="Email" value="<?php echo addslashes($_POST['login-email']); ?>" />
				<!-- PASSWORD EMAIL -->
	      <input class="form-control mr-sm-2" type="password" name="login-password" placeholder="Password" value="<?php echo addslashes($_POST['login-password']); ?>" />
				<!-- SUBMIT BUTTON -->
	      <input class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submit" value="Log In" />
	    </form>
	    <!-- END LOGIN FORM -->
	    
	  </div>
	  <!-- END LOGIN DIV -->

	</nav>
	<!-- END TOP NAV & LOGIN BAR -->


	<!-- LOGIN PANEL -->
	<div class="container">
		<div class="row text-center">
			<div id="border-panel" class="col-12 col-sm-10 col-md-8">
				<div id="login-panel">

					<!-- APP NAME/TITLE -->
					<h1>DAILY JOURNAL</h1>
					<!-- APP INSTRUCTIONS/INFO -->
					<p>Your Own Private Journal, With You Wherever You Go!
					<br />Interested? Sign Up Below!</p>

					<?php
						// IF ERROR DISPLAY ERROR IN BOOTSTRAP ALERT
						if($error) {
							echo '<div class="alert alert-danger" role="alert">'.addslashes($error).'</div>';
						}
						// IF LOGGED OUT DISPLAY LOG OUT MESSAGE IN BOOTSTRAP ALERT
						if($message) {
							echo '<div class="alert alert-success" role="alert">'.addslashes($message).'</div>';
						}
					?>
					

					<!-- SIGN UP FORM -->
					<form id="signup-form" method="post">

						<!-- EMAIL INPUT -->
					  <div class="form-group">
					    <label for="email">Email</label>
				    	<input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="<?php echo addslashes($_POST['email']); ?>" />
					  </div>
					  <!-- END EMAIL INPUT -->

						<!-- PASSWORD INPUT -->
					  <div class="form-group">
					    <label for="password">Password</label>
				    	<input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>" />
					  </div>
					  <!-- END PASSWORD INPUT -->

						<!-- SUBMIT BUTTON -->
					  <input id="signup-btn" class="btn btn-dark" type="submit" name="submit" value="Sign Up" />

					</form>
					<!-- END SIGN UP FORM -->

				</div>
			</div>
		</div>
	</div>
	<!-- END LOGIN PANEL -->


<!-- JQUERY CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- POPPER JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- BOOTSTRAP JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- CUSTOM APP JS LINK -->
<script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>

