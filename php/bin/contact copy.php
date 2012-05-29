<?php
	session_start();	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/php/bin/config.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/php/lib/sanitize.php");
	require_once($_SERVER['DOCUMENT_ROOT']. '/phpmailer_5.2.0/class.phpmailer.php');
	
	$errMsg_arr = array(); $errFlag = false;
	
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link){
		die('Failed to connect to server: ' . mysql_error());
	}
	$db = mysql_select_db(DB_DATABASE);
	if(!$db){
		die("Unable to select database");
	}

	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$location = $_POST['location'];
	$details = $_POST['details'];
	
	$fullname = sanitize($fullname);
	$email = sanitize($email);
	$company = sanitize($company);
	$location = sanitize($location);
	$details = sanitize($details);
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = "smtp.hassankhan.me"; 
	$mail->Port = 25025;
	$mail->Username = "contactme@hassankhan.me"; 
	$mail->Password = "yoH4wesT";
	
	$mail->SetFrom($email, $fullname);
	$mail->AddReplyTo($email, $fullname);
	$mail->Subject = $company . " (" . $location . ")";
	$mail->MsgHTML($details);
	$address = "me@hassankhan.me";
	$mail->AddAddress($address, "Hassan Khan");
	
	if(!$mail->Send()) {
		$errMsg_arr[] = "Mailer Error: " . $mail->ErrorInfo;
		$errFlag = true;
		$_SESSION['ERRMSG_ARR'] = $errMsg_arr;
		session_write_close();
		header("location: " . $_SERVER['DOCUMENT_ROOT'] . "/error.php");
		exit();
	}
?>