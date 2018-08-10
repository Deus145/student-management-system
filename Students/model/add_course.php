<?php

if (isset($_POST["do"]) && ($_POST["do"] == "add_course")){

	include_once('controller/config.php');

		
		$course_name =$_POST["course_name"];
		$course_code =$_POST["course_code"];
		$faculty_name = $_POST["faculty_name"];
		
		$sqli = "SELECT * FROM course WHERE course_name = '$course_name'";
		$result1 = mysqli_query($db,$sqli);
		$row1 = mysqli_fetch_assoc($result1);
		$course_name1 = $row1["course_name"];

		if ($course_name == $course_name1) {
			
		}else{
			$sql = "INSERT INTO course (course_name, course_code, faculty_name)
			        VALUES ('".$course_name."', '".$course_code."', '".$faculty_name."')";
			
		mysqli_query($db, $sql);
		}
		
		header("location: view/course.php?");

}

	
?>	