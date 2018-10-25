<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_SESSION['username'];
    $message=$_POST['insert_message'];
    $uid=$_POST['txtmsg'];
    $memnm=$_POST['memnmcmt'];
    $memnm;
        include'../controller/connection.php';
	$comment=mysql_query("INSERT INTO comment(message,user_name,name,club_name)values('$message','$username','$memnm','$uid')");
	echo mysql_error();
	mysql_close();
       // echo 'kjftghbkdfjh;lfyhkjt;yljkfy;utjylukj:Y"Lkjy;g';
	header("location:../member-message.php?uid=$uid");
         
 }

?>