<?php
session_start();
include 'connection.php';
 $businessnm=$_SESSION['clubname'];

 $sql=  mysql_query("SELECT * from  comment_message where status_member='unread' and business_nm ='$businessnm'");
      $result=  mysql_fetch_array($sql);
  echo mysql_error();
       $count =  mysql_num_rows($sql);
    echo $count;
       mysql_close();
?>
