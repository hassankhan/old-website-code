<?php
/* 	phpinfo(); */

	$username = "me";
	$password = "Qechu7pu2r";

	$password = crypt(md5($password), md5($username));

	echo $password;
?>