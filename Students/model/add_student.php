<?php

if (isset($_POST["do"]) && ($_POST["do"] == "add_student")){

	include_once('controller/config.php');

		
		$first_name =$_POST["first_name"];
		$last_name =$_POST["last_name"];
		$email =$_POST["email"];
		$contact =$_POST["contact"];
		$course_name = $_POST["course_name"];
		$course_code =$_POST["course_code"];

		$sqli = "SELECT * FROM student WHERE email = '$email'";
		$result1 = mysqli_query($db,$sqli);
		$row1 = mysqli_fetch_assoc($result1);
		$email1 = $row1["email"];

		if ($email == $email1) {
			
		}else{
			$sql = "INSERT INTO student (first_name, last_name, email, contact, course_name, course_code)
			        VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$contact."', '".$course_name."', '".$course_code."' )";
			
		mysqli_query($db, $sql);
		}
		
		header("location: view/student.php?");

}

	
?>	