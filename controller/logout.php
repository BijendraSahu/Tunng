<?php
session_start();
$session=$_SESSION['session_id'];
$_SESSION = array();
if (ini_get("session.use_cookies")) 
{
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 4200,
	$params["path"], $params["domain"],
	$params["secure"], $params["httponly"]);
}
session_destroy();
header("location:../index.php");
?>