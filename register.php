<?php

	session_start();


	include 'dbconnect.php';

	$name = $_POST['email'];
	$pass = $_POST['pass'];

	mysql_query("INSERT INTO user (email,password) VALUES ('$name','$pass') ");

	$_SESSION["userid"] = $name;
	$_SESSION["login"] = "yes";

	setcookie("userid", $name);

	echo "success";

?>