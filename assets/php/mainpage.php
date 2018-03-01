<?php
	
	// START SESSION
	session_start();
	// INCLUDE CONNECTION.PHP SCRIPT
	include('connection.php');

	// QUERY FOR JOURNAL ROW FROM USERS DB WHERE ID EQUALS USERS SESSION ID
	$query = "SELECT journal FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";

	// GATHER RESULT FROM QUERY
	$result = mysqli_query($link, $query);
	// ENTER RESULT INTO ARRAY
	$row = mysqli_fetch_array($result);
	// DISPLAY RESULT FROM ARRAY
	$journal = $row['journal'];

?>

<!DOCTYPE html>
<html>
<head>

	<!-- PAGE TITLE -->
	<title>Daily Journal</title>

	<!-- FAVICON -->
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">

	<!-- META DATA -->
  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- FONT AWESOME -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Passion+One|Roboto:500" rel="stylesheet">

	<!-- RESET CSS LINK -->
  <link rel="stylesheet" type="text/css" href="../css/reset.css">

	<!-- CUSTOM CSS LINK -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<!-- BOOTSTRAP CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body id="main-page">

	<!-- TOP NAV & LOGIN BAR -->
	<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-dark">

		<!-- APP LOGO -->
	  <a class="navbar-brand" href="#"><span class="logo">Daily Journal</span> <i class="fas fa-pencil-alt"></i></a>

	  <!-- MOBILE NAV COLLAPSE BUTTON -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <!-- END MOBILE NAV COLLAPSE BUTTON -->

		<!-- LOGOUT DIV -->
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto"></ul>

			<!-- LOGOUT FORM -->
	    <form class="form-inline my-2 my-lg-0" method="post">
	    	<!-- LOGOUT BUTTON -->
				<a class="btn btn-outline-light" role="button" href="../../index.php?logout=1">
					Log Out
				</a>
	    </form>
	    <!-- END LOGOUT FORM -->

	  </div>
	  <!-- END LOGOUT DIV -->

	</nav>
	<!-- END TOP NAV & LOGIN BAR -->


	<!-- JOURNAL ENTRY -->
	<div class="container">
		<div class="row">

			<!-- SAVING DETAILS ALERT -->
			<div id="disclaimer" class="alert alert-primary alert-dismissible fade show" role="alert">
				<!-- SAVING INFORMATION -->
			  <strong>Don't Worry About Losing Your Work!</strong> All of your updates and changes are saved automatically.
			  <!-- ALERT CLOSE BUTTON -->
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<!-- END SAVING DETAILS ALERT -->

			<!-- JOURNAL TEXTAREA -->
			<textarea class="form-control"><?php echo $journal; ?></textarea>
		</div>
	</div>
	<!-- END JOURNAL ENTRY -->


<!-- JQUERY CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- POPPER JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- BOOTSTRAP JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- CUSTOM APP JS LINK -->
<script type="text/javascript" src="../js/app.js"></script>

</body>
</html>

