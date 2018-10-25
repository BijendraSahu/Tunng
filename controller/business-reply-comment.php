<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
   echo $business_email=$_POST['busemail'];
   echo $memebernm=$_POST['memebernm'];
   echo $business_nm=$_POST['business_nm'];
   echo $member_email=$_POST['member_email'];
   echo $comment=$_POST['comment'];
   echo $srno=$_POST['srno'];
       echo $replycomment=$_POST['replycomment'];
       include 'connection.php';
	$comment=mysql_query("INSERT INTO comment_message_business(business_emailid,business_nm,member_nm,comment,comment_r_member,status_business,srno_product,member_emailid)values('$business_email','$business_nm','$memebernm','$comment','$replycomment','unread','$srno','$member_email')");
	echo mysql_error();
	mysql_close();
	header("location:../viewproductdetails-member.php?srno=$srno");
         
 }

