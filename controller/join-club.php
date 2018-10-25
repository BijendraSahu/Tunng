<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $errorlist=array();
    $datafield=array();
    $username=$_SESSION['username'];
    $club_name=$_POST['club_name'];
    $name=$_POST['join_name'];
    $datafield['dataname']=$name;
    $email=$_POST['join_email'];
    $datafield['dataemail']=$email;
    $contact=$_POST['join_contact'];
    $datafield['datacontact']=$contact;
    $country=$_POST['join_country'];
    $datafield['datacountry']=$country;
    $city=$_POST['join_city'];
    $datafield['datacity']=$city;
    $photo1=$_FILES['join_profile'];
    
    //$name_reg="/^(?:[A-Za-z]+(?:\s+|$)){2,3}$/";
    $name_reg="/^[A-Za-z]/";
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
    $contactexp="/^[0-9]+$/";
    
    if($name=="")
        {
            $errorlist['fullnameNull']="Full name is required.";
        }
     elseif(!preg_match($name_reg,$name))
        {
            $errorlist['fullnamechar']="Enter Your valid Name";
        }
     elseif($email=="")
        {
            $errorlist['emailNull']="Email id is required.";
        }
     elseif(!preg_match($regex, $email))
        {
            $errorlist['emailvali']="Enter your valid email id";
        }
     elseif($contact=="")
        {
            $errorlist['contactNull']="Contact no. is required.";
        }
     elseif(!preg_match($contactexp, $contact))
        {
         $errorlist['contact_vali']="Enter your valid contact no";
        }
     elseif((strlen ($contact) < 1) || (strlen ($contact)> 11))
        {
           $errorlist['contact_digit']="contact no contain 1-10 digit."; 
        }
    elseif($country=="")
        {
            $errorlist['countryNull']="Country is required.";
        }
     
    elseif($city=="")
        {
            $errorlist['cityNull']="City is required.";
        }
    
    if(empty($errorlist))
    {
        $imagename="";
      if(trim($photo1['tmp_name']!=''))
        {
            $imgextension=substr(strrchr($photo1['name'],"."),1);
            if($imgextension=='jpg' || $imgextension=='JPG' || $imgextension=='JPEG' || $imgextension=='jpeg' || $imgextension=='PNG' || $imgextension=='png')
             {
                $imgname=$photo1['name'];
                $imgfname =md5(time());
                $imagename=$imgfname.$imgname;
                $imgpath='../assets/img/member_join_club_image/';
                $img_path1=$imgpath.$imgfname.$imgname;
                move_uploaded_file($photo1['tmp_name'],$img_path1);
             }                   
                
         }
    
        include'connection.php';
         $unread="unread";
	$joinclub=mysql_query("INSERT INTO  join_club(club_name,name,email_id,contact_no,country,city,user_name,image,status)values('$club_name','$name','$email','$contact','$country','$city','$username','$imagename','$unread')");
	echo mysql_error();
	mysql_close();
        $_SESSION['success_join']="1";
	header("location:../join-club.php");
         
         
   }
   else {
                   $_SESSION['errorlist']=$errorlist;
                   $_SESSION['datafield']=$datafield;
                   echo mysql_error();
                   header("location:../join-club.php");
             }
}
?>