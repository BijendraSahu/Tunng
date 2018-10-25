<?php
session_start();
include 'controller/connection.php';
$username=$_SESSION['username'];
$club=  mysql_query("select * from club where user_login_id='$username'");
$clubdetl=  mysql_fetch_array($club);
$srno=$_GET['srno'];
$sql=  mysql_query("SELECT * FROM add_product_business WHERE srno='$srno'");
$sqlresult= mysql_fetch_assoc($sql); 
$businessemail=$sqlresult['emailid'];
$businessnm=$_SESSION['clubname'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
   
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <meta property="og:title" content="<?php echo $sqlresult['title'];?>">
<meta property="og:image" content="https://tunng.co/images/businessimg/<?php echo $sqlresult['product_imgone'];?>">
<meta property="og:description" content="<?php echo "Price -".$sqlresult['price'] ." Description -".$sqlresult['detaildiscription'] ;?>">
<meta property="og:url" content="https://tunng.co/viewproductdetails1.php?srno=<?php echo $srno;?>">
       

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" type="text/css" href="css/mynewstyle.css">

        <!-- ace styles -->
        <link rel="stylesheet" href="assets/css/ace.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>