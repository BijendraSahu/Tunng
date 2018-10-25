<?php
function getCountries()
{
    include 'controller/connection.php';
    $sql= mysql_query("SELECT * FROM  countries");
    $index=0;
    $yourArray=array();
    while($sqlresult=  mysql_fetch_assoc($sql))
    { 
         $yourArray[$index]=  $sqlresult['name'];
         $index++;
        
    }
    
     return $yourArray;
}
function getCategories()
{
    include 'controller/connection.php';
    $sql= mysql_query("SELECT * FROM  categories_list ORDER BY categories_nm asc");
    $index=0;
    $yourArray=array();
    while($sqlresult=  mysql_fetch_assoc($sql))
    { 
         $yourArray[$index]=  $sqlresult['categories_nm'];
         $index++;
        
    }
     return $yourArray;
}
?>