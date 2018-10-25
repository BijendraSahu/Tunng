<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
    $errorlist=array();
    $datafield=array();
    $productname = trim($_POST['productname']);
     $businessnm = trim($_POST['businessnm']);
    $datafield['dpronamet']=$productname;
    $price = trim($_POST['price']);
    $datafield['dprice']=$price;
    $time = trim($_POST['time']);
    
     if($productname=="")
        {
            $errorlist['productnm']="Enter Product Name .";
         
        }
     elseif($price=="")
        {
            $errorlist['productprice']="Enter Product Price.";
         
        }
     elseif($time=="")
        {
            $errorlist['producttime']="Enter Time";
        }
   
         if(empty($errorlist))
           {
        include 'connection.php';
        $sql = mysql_query("INSERT INTO pramotion (businessnm,productname,price,time) "
                . "VALUES ('$businessnm','$productname','$price','$time')");
        echo mysql_error();
        mysql_close();
          $_SESSION['successmsg']="Your entry for promotion is Successfully Done & it will be shown for $time .";
       header("location:../pramotion.php");
           }
        else {
               $_SESSION['errorlist']=$errorlist;
               $_SESSION['datafield']=$datafield;
              
             header("location:../pramotion.php"); 
              }
}
?>

