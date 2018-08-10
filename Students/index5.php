<?php

$_arguments = array();

if (count($_POST)> 0) {
	$_arguments = $_POST;
}else if (count($_GET) > 0){
	$_arguments = $_GET;
}

if (isset($_arguments["do"]) && ($_arguments["do"] != "")){

	if (($_arguments["do"] == "add_user")) {
		$page = "model/add_user.php";
	}
}else{
	//run login page
}

require $page;

?>