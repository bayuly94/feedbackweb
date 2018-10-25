<?php

// include file conn.php
include "conn.php";

// default time zone
date_default_timezone_set("Asia/Jakarta");
 

// get data from POST method
$fullname 	= $_POST["fullname"];
$email 		= $_POST["email"];
$answer1 	= $_POST["answer1"];
$answer2	= $_POST["answer2"];
$answer3	= $_POST["answer3"];
$answer4	= $_POST["answer4"];
$answer5 	= $_POST["answer5"];
$created_at = date("Y-m-d H:i:s");

// query sql
$sql = "
	INSERT INTO `feedback`(`fullname`, `email`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `created_at`) 
	VALUES (
		'".$fullname."',
		'".$email."',
		'".$answer1."',
		'".$answer2."',
		'".$answer3."',
		'".$answer4."',
		'".$answer5."',
		'".$created_at."'
		)
";

$query = mysqli_query($conn, $sql) or die (mysqli_error());

if($query){
	$response = [
		'success'	=> true, // if insert to db is success then 'success' is true
		'message'	=> 'insert success'
	];
} else {
	$response = [
		'success'	=> false, // if insert to db is not success then 'success' is false
		'message'	=> mysqli_error($conn)
	];
}


// close connection mysql
mysqli_close($conn);

// print variable $response using json format
echo json_encode($response);
