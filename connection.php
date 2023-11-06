<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "streamsb";

$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($con->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
