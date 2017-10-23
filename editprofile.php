<?php

	session_start();


	include '../dbconnect.php';

        $fullname= $_POST['fullname'];
        $email = $_POST['pass'];
	$username = $_POST['email'];
	$password = $_POST['pass'];


$sql = "INSERT INTO editprofile (fullname, email, username, password)
VALUES ('John', 'Doe', 'john@example.com', 'asncd')";


	mysql_query($sql);


	echo "success";

?>