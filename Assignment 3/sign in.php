<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>sign In</title>
</head>



<body>
<h1> enter username and password</h1>
<p> username: <input type="text" name="username" /> </p>
<p> password: <input type="text" name="password" /> </p>
<input type="submit" value="log in" name="login" />
<a href = "database.php" </a>
<?php

$msg = '';

if (asset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

	if ($_POST['username'] == 'fnamandlname' &&
	$_POST['password'] == 'password') {
	$_SESSION['valid'] = true;
	
echo 'username and password valid';
	}else{
			$msg = 'invalid username or password'
		}
	}
<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	
header ('refresh: 3; url = assignment3.html');




</body>

</html>
