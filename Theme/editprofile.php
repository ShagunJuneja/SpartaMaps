<?php

	session_start();


	include 'dbconnect.php';

        $fullname= $_POST['fullname'];
        $email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
echo $fullname;
	$abc= mysql_query("INSERT INTO editprofile (fullname,email,username,password) VALUES ('$fullname','$email','$username','$password') ");


	echo "success";

?>