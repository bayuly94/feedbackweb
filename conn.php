<?php

	$server = "localhost";//nama server
	$user = "beceerco_feedback"; //username server
	$pass = "@Feedback123";  //password
	$dbase = "beceerco_feedback"; // database 
 
	//create connectoin
	$conn = mysqli_connect($server, $user, $pass, $dbase);
 
	//check connection 
	if(!$conn) {
	 die("Failed : ".mysqli_connect_error());
	}
 
