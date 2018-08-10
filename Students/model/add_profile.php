<?php

if (isset($_POST["do"]) && ($_POST["do"] == "add_profile")){

	include_once('controller/config.php');

		
		$name =$_POST["name"];
		$email =$_POST["email"];
		$contact =$_POST["contact"];
		$experience =$_POST["experience"];
		$skills =$_POST["skills"];

		$sqli = "SELECT * FROM userprofile WHERE email = '$email'";
		$result1 = mysqli_query($db,$sqli);
		$row1 = mysqli_fetch_assoc($result1);
		$email1 = $row1["email"];

		if ($email == $email1) {
			
		}else{
			$sql = "INSERT INTO userprofile (name, email, contact, experience, skills)
			        VALUES ('".$name."', '".$email."', '".$contact."', '".$experience."', '".$skills."')";
			
		mysqli_query($db, $sql);
		}
	
		header("location: view/profile.php?");
}

	
?>	