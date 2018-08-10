<?php
	include_once('../controller/config.php');//connect to the database

	session_start();
	$username = "";
	$password = "";
	$error_auth = array();

	// log user in from login page
		if(isset($_POST['login'])){
			$username = mysqli_escape_string($db,$_POST['username']);
			$password = mysqli_real_escape_string($db,$_POST['password']);

			// ensure that form fields are filled properly
			if(empty($username)) {
				array_push($error_auth, "Username is required");
			}
			if(empty($password)) {
				array_push($error_auth, "Password is required");
			}
			if(count($error_auth) == 0){
				//$password = md5($password); // encrypt password before comparing with that from database
				$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) == 1){
					//log user in
					$_SESSION['username'] = $username;
					header('location: dashboard.php');//redirect to home page   
				}else {
					array_push($error_auth,"wrong username/password combination");
					//header('location: login.php');
				}

			}
		}
	//logout
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php'); 
	}
?>