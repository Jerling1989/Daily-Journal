<?php

	// START SESSION
	session_start();

	// IF USER JUST LOGGED OUT END SESSION AND CREATE LOG OUT MESSAGE
	if ($_GET['logout'] == 1 AND $_SESSION['id']) {
		session_destroy();
		$message = 'You have been logged out. Have a nice day!';
	}

	// INCLUDE CONNECTION.PHP SCRIPT
	include('connection.php');


	// IF USER SUBMITS SIGN UP FORM
	if ($_POST['submit']=='Sign Up') {

		// IF USER DID NOT ENTER EMAIL CREATE ERROR MESSAGE
		if (!$_POST['email']) {
			$error.= '<br />Please enter your email address';
			// IF USER ENTERED INVALID EMAIL CREATE ERROR MESSAGE
		} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$error.= '<br />Please enter a valid email address';
		}

		// IF USER DID NOT ENTER PASSWORD CREATE ERROR MESSAGE
		if (!$_POST['password']) {
			$error.= '<br />Please create your password';
		} else {
			// TELL USER TO MAKE PASSWORD AT LEAST 8 CHARACTERS (IF NOT DONE)
			if (strlen($_POST['password']) < 8) {
				$error.= '<br />Please enter a password with at least 8 characters';
			}
			// TELL USER TO MAKE PASSWORD WITH AT LEAST 1 UPPERCASE LETTER (IF NOT DONE)
			if (!preg_match('`[A-Z]`', $_POST['password'])) {
				$error.= '<br />Please include at least one capital letter in your password';
			}
		}

		// IF USER HAS SIGN UP ERRORS CREATE ERROR MESSAGE
		if($error) {
			$error = 'There were errors in your sign up details: '.$error;
			// IF NO ERRORS CHECK TO SEE IF USER EMAIL ADDRESS ALREADY REGISTERED
		} else {
			// QUERY TO CHECK USERS TABLE FOR ROW CONTAINING USER EMAIL
			$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";
			// GATHER RESULT FROM QUERY
			$result = mysqli_query($link, $query);
			// CREATE VARIABLE OF NUMBER OF ROWS CONTAINING USER EMAIL FROM QUERY (1 OR 0)
			$results = mysqli_num_rows($result);

			// IF $RESULTS EQUALS 1 CREATE ERROR MESSAGE
			if ($results) {
				$error = 'That email address is already registered. Would you like to log in?';
				// IF $RESULTS DOES NOT EQUAL 1 CREATE USER ACCOUNT
			} else {
				// QUERY TO CREATE NEW USER ACCOUNT (EMAIL, ENCRYPTED PASSWORD) IN USERS TABLE 
				$query = "INSERT INTO users (email, password) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
				// RUN QUERY IN DATABASE
				mysqli_query($link, $query);
				// CREATE UNIQUE SESSION ID ASSOCIATED WITH USER TABLE ID
				$_SESSION['id']=mysqli_insert_id($link);
				// REDIRECT FROM LOGIN PAGE TO JOURNAL ENTRY PAGE
				header('Location:assets/php/mainpage.php');
			}
		}
	}


	// IF USER SUBMITS LOGIN FORM
	if ($_POST['submit']=='Log In') {
		// QUERY TO CHECK USERS TABLE FOR USER EMAIL AND ENCRYPTED PASSWORD
		$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['login-email'])."' AND password='".md5(md5($_POST['login-email']).$_POST['login-password'])."' LIMIT 1";
			// GATHER RESULT FROM QUERY
			$result = mysqli_query($link, $query);
			// ENTER RESULT INTO ARRAY
			$row = mysqli_fetch_array($result);

			// IF RESULT EXISTS TO PUT INTO $ROW ARRAY
			if ($row) {
				// ASSOCIATED SESSION ID WITH USER TABLE ID
				$_SESSION['id'] = $row['id'];
				// REDIRECT FROM LOGIN PAGE TO JOURNAL ENTRY PAGE
				header('Location:assets/php/mainpage.php');
				// IF USER EMAIL OR PASSWORD IS NOT FOUND IN USERS TABLE
			} else {
				$error = 'We could not find a user with that email and password. Please try again.';
			}
	}

?>