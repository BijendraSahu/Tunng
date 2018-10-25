<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $srno=$_POST['srno'];
    $business_email=$_POST['business_email'];
  $business_nm=$_POST['business_nm'];
    $message=$_POST['message'];

       include 'connection.php';
	$comment=mysql_query("INSERT INTO comment_message_business(business_emailid,business_nm,message,m_c_notesion,status_business,srno_product)values('$business_email','$business_nm','$message','1','unread','$srno')");
	echo mysql_error();
	mysql_close();
        
	header("location:../viewproductdetails.php?srno=$srno");
         
 }
?>
