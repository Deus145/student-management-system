<?php

if (isset($_POST["do"]) && ($_POST["do"] == "add_user")){

	include_once('controller/config.php');

		
		$username =$_POST["username"];
		$email=$_POST["email"];
		$first_name =$_POST["first_name"];
		$last_name =$_POST["last_name"];
		$password =$_POST["password"];


		$sqli = "SELECT * FROM users WHERE username = '$username'";
		$result1 = mysqli_query($db,$sqli);
		$row1 = mysqli_fetch_assoc($result1);
		$username1 = $row1["username"];

		$msg=0;

		if ($username == $username1) {
			$msg+=1;
		}else{
			$sql = "INSERT INTO users (username, email, first_name, last_name)
			    VALUES ('".$username."', '".$email."', '".$first_name."', '".$last_name."' )";

			    if(mysqli_query($db, $sql)){
			    	$msg+=2;
			    }else{
			    	$msg+=3;
			    }
		}
		
		header("location: view/users/create.php?do=alert_from_insert&msg=$msg");

}

	
?>	