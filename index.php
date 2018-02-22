<?php include('assets/php/login.php'); ?>

<!-- SIGN UP FORM -->
<form method="post">
	
	<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>" />

	<input type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>" />

	<input type="submit" name="submit" value="Sign Up">

</form>

<!-- LOG IN FORM -->
<form method="post">
	
	<input type="email" name="login-email" id="login-email" value="<?php echo addslashes($_POST['login-email']); ?>" />

	<input type="password" name="login-password" value="<?php echo addslashes($_POST['login-password']); ?>" />

	<input type="submit" name="submit" value="Log In">

</form>