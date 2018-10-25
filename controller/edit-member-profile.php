<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
{
   if(isset($_POST['update_memberprofile']))
   {
       $userid=$_SESSION['memberid'];
       $email=  trim($_POST['email']);
       $city=$_POST['city'];
       $country=$_POST['country'];
       $address=$_POST['address'];
       $contact=$_POST['mobile'];
       
     include 'connection.php';
    if(isset($_POST['email']) &&  $_POST['email']!='')
       { 
        $sql=  mysql_query("Select * from user_reg where email_id ='$email'");
      mysql_num_rows($sql);
        if(mysql_num_rows($sql)==0)
           {
             $updateprofile=mysql_query("UPDATE user_reg SET  email_id='$email',member_city='$city',member_country='$country',address='$address' where srno='$userid'");
    
                $_SESSION['success_profile']="1";
                header("location:../member-profile.php");
           }
           else{
              $_SESSION['email_allready']="This Email already register, please try other.";
              header("location:../member-profile.php");
           }
         
        }
   elseif(isset($_POST['mobile'])&&  $_POST['mobile']!='')
     {
        
        $sql2=  mysql_query("Select * from user_reg where contact_no='$contact'");
       if(mysql_num_rows($sql2)==0)
       {
             $updateprofile=mysql_query("UPDATE user_reg SET  member_city='$city',member_country='$country',address='$address',contact_no='$contact' where srno='$userid'");
     
     $_SESSION['success_profile']="1";
     header("location:../member-profile.php");
           
       }else{
           $_SESSION['mobile_allready']="This Mobile Number already register, please try other.";
         header("location:../member-profile.php");
           }   
           
   }
   else{
          $updateprofile=mysql_query("UPDATE user_reg SET  member_city='$city',member_country='$country',address='$address' where srno='$userid'");
          $_SESSION['success_profile']="1";
           header("location:../member-profile.php");
       }
     
     
     
     
     
     
    
       
   }
}
   ?>
