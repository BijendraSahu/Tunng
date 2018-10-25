<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
   $srno=$_POST['srno'];
    $business_email=$_POST['business_email'];
   $business_nm=$_POST['business_nm'];
    $comment=$_POST['comment'];

       include 'connection.php';
	$comment=mysql_query("INSERT INTO comment_message_business(business_emailid,business_nm,comment,m_c_notesion,status_member,srno_product)values('$business_email','$business_nm','$comment','0','unread','$srno')");
	 mysql_error();
	mysql_close();

	header("location:../viewproductdetails.php?srno=$srno");

 }
?>
