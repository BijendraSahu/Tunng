<?php
session_start();
       include 'connection.php';
       $loginid=$_SESSION['clubname'];
   
  $sql1=  mysql_query("update join_club set status ='read' where club_name ='$loginid'");
      //$result1= mysql_fetch_array($sql1);
  echo mysql_error();
       $count =  mysql_num_rows($sql1);
       echo $count;
       mysql_close();
       
?>