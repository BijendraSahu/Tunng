<?php
session_start();
include 'connection.php';
$loginid=$_SESSION['clubname'];

 $sql=  mysql_query("SELECT * from  join_club where status='unread' and club_name ='$loginid'");
      $result=  mysql_fetch_array($sql);
  echo mysql_error();
       $count =  mysql_num_rows($sql);
    echo $count;
       mysql_close();
?>
