<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
     $states=$_POST['state'];
    include 'connection.php';
  $sql1=mysql_query("SELECT * FROM states WHERE name='$states'");
  $sql1res=mysql_fetch_array($sql1);
    $sql=  mysql_query("Select * from cities where state_id = '$sql1res[0]' ");
    echo "<option value=''>Select City</option>";
    if(mysql_num_rows($sql)>0)
    {
        while($res=  mysql_fetch_array($sql))
        {
           if(isset($datafield['datacity']))
                  {
                      if($datafield['datacity']==$result[1])
                           {
                                  print "<option style='text-transform: capitalize;' value='$res[1]'>$res[1]</option>";
                           }
                      else
                            {
                                  print "<option style='text-transform: capitalize;' value='$res[1]'>$res[1]</option>";
                            }
                   }
                   else 
                   {
                     print "<option style='text-transform: capitalize;' value='$res[1]'>$res[1]</option>";
                   }
        }
    }
    mysql_close();
}
?>

