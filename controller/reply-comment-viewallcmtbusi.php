<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  
   echo $business_email=$_POST['busemail'];
   echo $member_email=$_POST['member_email'];
   echo $club_id=$_POST['club_id'];
   echo $memebernm=$_POST['memebernm'];
   echo $business_nm=$_POST['business_nm'];
   echo $comment=$_POST['comment'];
       echo $replycomment=$_POST['replycomment'];
       include 'connection.php';
	$comment=mysql_query("INSERT INTO comment_message(business_emailid,business_nm,member_nm,comment,comment_r_business,status_business,member_emailid)values('$business_email','$business_nm','$memebernm','$comment','$replycomment','unread','$member_email')");
	echo mysql_error();
	mysql_close();
	header("location:../view-all-comment-business.php?id=$club_id");
         
 }

