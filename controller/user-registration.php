<?php
session_start();
require_once('../phpmailer/phpmailer/class.phpmailer.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
     include './connection.php';
    $club_username=  trim($_POST['username']);
   @$email=  trim($_POST['email']);
    $password=  trim($_POST['password']);
    $reenterpassword=  trim($_POST['repassword']);
    $club_address=  trim($_POST['address']);
   @$contact_no=  trim($_POST['mobno']);
    $city_name = trim($_POST['city_name']);
    $country = trim($_POST['ddlcountry']);
    $state = trim($_POST['state']);
     if(isset($_POST['email']))
        {
    function generateRandomString($length = 100) 
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
   
    $sql=  mysql_query("Select * from user_reg where email_id='$email'");
    $sql1=  mysql_query("Select * from user_reg where user_name='$club_username'");
    if(mysql_num_rows($sql)==0)
    {
        if(mysql_num_rows($sql1)==0)
        {
        $query_number=generateRandomString();
        $sql2= mysql_query("Insert into  user_reg(user_name,email_id,password,address,member_city,member_country,member_state,verification_code) "
                . "values('$club_username','$email','$password','$club_address','$city_name','$country','$state','$query_number')");
        echo mysql_error();
        mysql_close();
        $to=$email;
        $from="Admin@Tunng.co";
        $subj="Tunng.co :: Email verification";
        $msg="Thanks to register in <a href='https://www.tunng.co'>Tunng.co</a><br/>
              Your registration is done successfully, for email verification click on the below link.<br/><br/>
              <a href='https://www.tunng.co/login_view.php?verification=$query_number'>Click here for Email Verification</a><br/><br/>";
        $header=array();
        $header[]='From: '.$from.'    No-Reply';
        $header[]='MIME-Version:1.0';
        $header[]='Content-Type:text/html;Charset=iso-8859-1';
        $header[]='Content-Transfer-Encoding:7bit';
          $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "Admin@Tunng.co";
    $mail->Password = "tunng@pass";
	$mail->SMTPDebug = 1;
	//$mail->SMTPSecure = "ssl";  
    $mail->Host = "mail.tunng.co";//"smtp.gmail.com";
    $mail->Port = "25";
 
    $mail->setFrom('Admin@Tunng.co', 'Tunng.co');
    $mail->AddAddress($to, $club_username);

    $mail->Subject  =  $subj;
    $mail->IsHTML(true);
    $mail->Body    = $msg;
	if($mail->Send())
	{
		  Print"<div class='alert alert-success  alert-dismissable' style='padding:5px !important'>
	       Dear User, Thanks for registration,<br/>your registration successfully complete, we have sent a mail in your registered email-id, please varify your email-id, then try to login.
        </div>";
	}
	else
	{

		echo "Mail Error - >".$mail->ErrorInfo;
		//die();
	}
       
        }
         else 
    {
       
       Print"<div class='alert alert-danger  alert-dismissable' style='padding:5px !important'>
	     This user name already register, please try other.
        </div>";
        
       
    }
    }
    else 
    {
       Print"<div class='alert alert-danger  alert-dismissable' style='padding:5px !important'>
	      This Email already register, please try other.
        </div>";
     
    }
        }
       if(isset($_POST['mobno']))
        {
           $sql1=  mysql_query("Select * from user_reg where user_name='$club_username'");
            if(mysql_num_rows($sql1)==0)
        {
        
        $sql2= mysql_query("Insert into  user_reg(user_name,password,address,contact_no,verification_code) "
                . "values('$club_username','$password','$club_address','$contact_no','done')");
       
           
       Print"<div class='alert alert-success  alert-dismissable' style='padding:5px !important'>
                          Dear User, Thanks for registration <br/>Your registration successfully complete,then try to login.
                   </div>";
        }
         else 
    {
       Print"<div class='alert alert-danger  alert-dismissable' style='padding:5px !important'>
	     This user name already register, please try other.
        </div>";
        
    }
        }
        
        
        
}
?>