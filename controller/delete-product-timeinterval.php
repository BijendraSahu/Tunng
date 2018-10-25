<?php
      include'./connection.php';
      $sqltime=  mysql_query("SELECT * FROM pramotion ");
      while ($sqltimeres=mysql_fetch_array($sqltime))
      {
         echo $time=$sqltimeres['time'];
            $sql=mysql_query("DELETE FROM pramotion WHERE entry_dt < DATE_SUB(NOW(), INTERVAL $time)");
            echo mysql_error();
             
//            echo 'Successfully deleted';  
      }
          mysql_close(); 
                   ?>