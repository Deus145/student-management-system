<?php

if (isset($_POST["do"]) && ($_POST["do"] == "add_teacher")){

	include_once('controller/config.php');

		
		$first_name =$_POST["first_name"];
		$last_name =$_POST["last_name"];
		$email =$_POST["email"];
		$contact =$_POST["contact"];
		$faculty_id =$_POST["faculty_id"];

		$sqli = "SELECT * FROM teacher WHERE email = '$email'";
		$result1 = mysqli_query($db,$sqli);
		$row1 = mysqli_fetch_assoc($result1);
		$email1 = $row1["email"];

		if ($email == $email1) {
			
		}else{
			$sql = "INSERT INTO teacher (first_name, last_name, email, contact, faculty_id)
			        VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$contact."', '".$faculty_id."')";
			
		mysqli_query($db, $sql);
		}
	
		header("location: view/teacher.php?");
}

	
?>	