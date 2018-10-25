<?php
session_start();
       include 'connection.php';
       $businessnm=$_SESSION['clubname'];
   
  $sql1=  mysql_query("update  comment_message set status_member ='read' where business_nm ='$businessnm'");
      //$result1= mysql_fetch_array($sql1);
  echo mysql_error();
       $count =  mysql_num_rows($sql1);
       echo $count;
       mysql_close();
       
?>
