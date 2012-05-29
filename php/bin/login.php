<?php
// Start session and get the database connection details
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/php/bin/config.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/php/lib/sanitize.php");

// Create an array to store validation errors and a flag to identify errors
$errMsg_arr = array(); $errFlag = false;

// Connect to the database
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if(!$link){
	die('Failed to connect to server: ' . mysql_error());
}

// Select database
$db = mysql_select_db(DB_DATABASE);
if(!$db){
	die("Unable to select database");
}

// Assign POST variables to local variables
if(isset($_POST['username'])){
	$username = $_POST['username'];
}
if(isset($_POST['password'])){
	$password = $_POST['password'];
}

// Input validations (checks if input is empty)
if($username == ''){
	$errMsg_arr[] = 'Missing username';
	$errFlag = true;
}
if($password == ''){
	$errMsg_arr[] = 'Missing password';
	$errFlag = true;
}

// Sanitize inputs
$username = sanitize($username);
$password = sanitize($password);

// Generate password ciphertext
$password = crypt(md5($password), md5($username));

// If there are input validation errors, redirect to error page
if($errFlag){
	$_SESSION['ERRMSG_ARR'] = $errMsg_arr;
	session_write_close();
	header("location: " . $_SERVER['DOCUMENT_ROOT'] . "/error.php");
	exit();
}

// Create query
$qry = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
$result = mysql_query($qry);

// Check whether the query was successful or not
if($result) {
	if(mysql_num_rows($result) == 1) {
		// Login Successful
		session_regenerate_id();
		$row = mysql_fetch_assoc($result);
		$_SESSION['SESS_FIRSTNAME'] = $row['firstname'];
		$_SESSION['SESS_LASTNAME'] = $row['lastname'];
		$_SESSION['SESS_USERNAME'] = $row['username'];
		$_SESSION['SESS_PASSWORD'] = $row['password'];
		setcookie("firstname", $row['firstname'], time() + (86400 * 7)));
		setcookie("lastname", $row['lastname'], time() + (86400 * 7)));
		setcookie("username", $row['username'], time() + (86400 * 7)));
		setcookie("password", $row['password'], time() + (86400 * 7)));
		session_write_close();
		header("location: index.php");
		exit();
	}
	else {
		// Login failed
		header("location: " . $_SERVER['DOCUMENT_ROOT'] . "/error.php");
		exit();
	}
}
else{
	print(mysql_errno($link) . ": " . mysql_error($link). "\n");
	die("Query failed");
}
?>