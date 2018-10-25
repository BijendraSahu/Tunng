<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
      $business_email=$_POST['busemail'];
      $member_email=$_POST['member_email'];
      $member_id=$_POST['member_id'];
      $memebernm=$_POST['memebernm'];
      $business_nm=$_POST['business_nm'];
      $message=$_POST['message'];
      $replymessage=$_POST['replymessage'];
      
       include 'connection.php';
	$comment=mysql_query("INSERT INTO comment_message(business_emailid,business_nm,member_nm,message,message_r_business,status_business,member_emailid)values('$business_email','$business_nm','$memebernm','$message','$replymessage','unread','$member_email')");
        mysql_error();
	mysql_close();
	header("location:../view-all-message-business.php?id=$member_id");
         
 }

