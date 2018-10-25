<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
     $category=$_POST['category'];
    include 'connection.php';
  
    $sql=  mysql_query("Select * from  sub_categories_list where categories_nm = '$category' ");
    echo "<option value=''>Select Sub categories</option>";
    if(mysql_num_rows($sql)>0)
    {
        while($res=  mysql_fetch_array($sql))
        {
            if(isset($datafield['datasubcategor']))
                  {
                      if($datafield['datasubcategor']==$result[1])
                           {
                                  print "<option style='text-transform: capitalize;' value='$res[2]' selected>$res[2]</option>";
                           }
                      else
                            {
                                  print "<option style='text-transform: capitalize;' value='$res[2]'>$res[2]</option>";
                            }
                   }
                   else 
                   {
                     print "<option style='text-transform: capitalize;' value='$res[2]'>$res[2]</option>";
                   }
        }
    }
    mysql_close();
}
?>

