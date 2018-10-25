<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
     $country=$_POST['country'];
    include 'connection.php';
  $sql1=mysql_query("SELECT * FROM countries WHERE name='$country'");
  $sql1res=mysql_fetch_array($sql1);
    $sql=  mysql_query("Select * from states where country_id = '$sql1res[0]' ");
    echo "<option value=''>Select State</option>";
    if(mysql_num_rows($sql)>0)
    {
        while($res=  mysql_fetch_array($sql))
        {
                if(isset($datafield['datastate']))
                  {
                      if($datafield['datastate']==$result[1])
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

