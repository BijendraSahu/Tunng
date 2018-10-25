<?php 

//if($_SERVER['REQUEST_METHOD']=='POST')
//{
//    
//$userid=$_POST['txt_uid_hid_delete'];
//include 'connection.php';
//$ur=mysql_query("Delete From  user_reg where user_name='$userid'");
//header("location:../deactivate.php");
//}
?>
<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $userid=$_POST['txt_uid_hid_delete'];
  include 'connection.php';
  $ur=  mysql_query("DELETE  FROM  user_reg  Where user_name='$userid'");
  
  $ur1=  mysql_query("DELETE  FROM  join_club  WHERE user_name='$userid'");
 
  $ur2=  mysql_query("DELETE  FROM  comment  WHERE user_name='$userid'");
 echo mysql_error();
 $_SESSION['account_deactivate']="1";
  header("location:../deactivate.php");
}
?>