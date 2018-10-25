<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  
   echo $business_email=$_POST['busemail'];
   
   echo $memebernm=$_POST['memebernm'];
   echo $business_nm=$_POST['business_nm'];
   echo $comment=$_POST['comment'];
       echo $replycomment=$_POST['replycomment'];
       include 'connection.php';
	$comment=mysql_query("INSERT INTO comment_message(business_emailid,business_nm,member_nm,comment,comment_r_business,status_business)values('$business_email','$business_nm','$memebernm','$comment','$replycomment','unread')");
	echo mysql_error();
	mysql_close();
	header("location:../notification.php");
         
 }

