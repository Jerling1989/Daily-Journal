<?php

	session_start();
	include('connection.php');

	$query = "SELECT journal FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link, $query);

	$row = mysqli_fetch_array($result);

	$journal = $row['journal'];

?>

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

	<!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">

	<!-- RESET CSS LINK -->
  <link rel="stylesheet" type="text/css" href="../css/reset.css">

	<!-- CUSTOM CSS LINK -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<!-- BOOTSTRAP CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body id="main-page">
	<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-dark">

	  <a class="navbar-brand" href="#">Daily Journal</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto"></ul>

	    <form class="form-inline my-2 my-lg-0" method="post">
				<a class="btn btn-outline-light" role="button" href="../../index.php?logout=1">
					Log Out
				</a>
	    </form>

	  </div>
	</nav>

	<!-- JOURNAL ENTRY -->
	<div class="container">
		<div class="row">
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

