<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_SESSION['username'];
    $comment=$_POST['insert_comment'];
    $uid=$_POST['txtcmt'];
    echo $memnm=$_POST['memnmcmt'];
        include'../controller/connection.php';
	$comment=mysql_query("INSERT INTO comment(comment,user_name,name,club_name)values('$comment','$username','$memnm','$uid')");
	echo mysql_error();
	mysql_close();
        
	header("location:../comment.php?uid=$uid");
         
 }

?>