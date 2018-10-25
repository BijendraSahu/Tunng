<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  
   echo $business_email=$_POST['busemail'];
   echo $memebernm=$_POST['memebernm'];
   echo $member_email=$_POST['member_email'];
   echo $business_nm=$_POST['business_nm'];
   echo $message=$_POST['message'];
   echo $srno=$_POST['srno'];
       echo $replymessage=$_POST['replymessage'];
       include 'connection.php';
	$comment=mysql_query("INSERT INTO  comment_message_business(business_emailid,business_nm,member_nm,message,message_r_member,status_business,srno_product,member_emailid)values('$business_email','$business_nm','$memebernm','$message','$replymessage','unread','$srno','$member_email')");
	echo mysql_error();
	mysql_close();
	header("location:../viewproductdetails-member.php?srno=$srno");
         
 }

