<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $memebernm=$_SESSION['username'];
    $business_email=$_POST['business_email'];
    $business_nm=$_POST['business_nm'];
    $member_email=$_POST['member_email'];
    $message=$_POST['message'];
   $user_id=$_POST['user_id'];
       include 'connection.php';
	$comment=mysql_query("INSERT INTO comment_message(business_emailid,business_nm,member_nm,message,m_c_notesion,status_member,member_emailid)values('$business_email','$business_nm','$memebernm','$message','1','unread','$member_email')");
	echo mysql_error();
	mysql_close();
        
	header("location:../view-product-search-business.php?id=$user_id");
         
 }
?>
