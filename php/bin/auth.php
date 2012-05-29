<?php
	//Start session
	session_start();

	//Check whether the session variable SESS_USER_ID is present or not
	if(!isset($_SESSION['SESS_USER_ID']) || (trim($_SESSION['SESS_USER_ID']) == '') || (trim($_SESSION['SESS_USER_ID']) == '0'))
	{
		$errMsg_arr[] = 'Access Denied - Please login';
		$_SESSION['ERRMSG_ARR'] = $errMsg_arr;
		header("location: error.php");
		exit();
	}
?>