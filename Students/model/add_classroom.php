<?php

if (isset($_POST["do"]) && ($_POST["do"] == "add_classroom")){

	include_once('controller/config.php');

		
		$name =$_POST["name"];
		$student_count =$_POST["student_count"];
		$hall_charge =$_POST["hall_charge"];

		$sqli = "SELECT * FROM class_room WHERE name = '$name'";
		$result1 = mysqli_query($db,$sqli);
		$row1 = mysqli_fetch_assoc($result1);
		$name1 = $row1["name"];

		$msg=0;

		if ($name == $name1) {
			$msg+=1;
		}else{
			$sql = "INSERT INTO class_room (name, student_count, hall_charge)
			    VALUES ('".$name."', '".$student_count."', '".$hall_charge."')";

			    if(mysqli_query($db, $sql)){
			    	$msg+=2;
			    }else{
			    	$msg+=3;
			    }
		}
		
		header("location: view/class_room.php?do=alert_from_insert&msg=$msg");

}
	
?>	