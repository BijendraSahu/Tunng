<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['update_clubprofile']))
   {
       $userid=$_SESSION['username'];
       
       $city=$_POST['club_city'];
       $country=$_POST['club_country'];
       $address=$_POST['club_address'];
       $mobileno=$_POST['contact_number'];
       $email=$_POST['email'];
       $bank_name=$_POST['bank_name'];
       $acc_holder_nm=$_POST['acc_holder_nm'];
       $account_number=$_POST['account_number'];
       $ifsc_code=$_POST['ifsc_code'];
       $user_id=$_SESSION['clubid'];
       
    include 'connection.php';
   
    if(isset($_POST['email'])&&  $_POST['email']!='')
       {
        $sql=  mysql_query("Select * from club where user_emailid='$email'");
       
        if(mysql_num_rows($sql)==0)
           {
             $updateprofile=mysql_query("UPDATE club SET user_emailid='$email',club_city='$city',club_country='$country',club_address='$address',bank_name='$bank_name',account_holder_name='$acc_holder_nm',account_no='$account_number',ifsc_code='$ifsc_code' where clubid='$user_id'");
             $_SESSION['success_profile']="1";
             header("location:../club-profile-view.php");
           }
           else{
              $_SESSION['email_allready']="This Email already register, please try other.";
               header("location:../club-profile-view.php");
           }
         
   }
   elseif(isset($_POST['contact_number'])&&  $_POST['contact_number']!='')
     {
        
        $sql2=  mysql_query("Select * from club where mobile_no='$mobileno'");
       if(mysql_num_rows($sql2)==0)
       {
             $updateprofile=mysql_query("UPDATE club SET club_city='$city',club_country='$country',club_address='$address',bank_name='$bank_name',account_holder_name='$acc_holder_nm',account_no='$account_number',ifsc_code='$ifsc_code',mobile_no='$mobileno' where clubid='$user_id'");
             $_SESSION['success_profile']="1";
              header("location:../club-profile-view.php");
           
       }else{
           $_SESSION['mobile_allready']="This Mobile Number already register, please try other.";
           header("location:../club-profile-view.php");
           }   
           
   }
   else{
         $updateprofile=mysql_query("UPDATE club SET club_city='$city',club_country='$country',club_address='$address',bank_name='$bank_name',account_holder_name='$acc_holder_nm',account_no='$account_number',ifsc_code='$ifsc_code' where clubid='$user_id'");
             $_SESSION['success_profile']="1";
           header("location:../club-profile-view.php");
   }
       
   }
}
   ?>
