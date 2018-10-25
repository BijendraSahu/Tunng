<?php
session_start();
require_once('../phpmailer/phpmailer/class.phpmailer.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
 include './connection.php';
    $categories = $_POST['category'];
    $clubname = trim($_POST['clubname']);
   @$mobileno = trim($_POST['mobno']);
   @$email=  trim($_POST['email']);
    $club_username = trim($_POST['club_username']);
    $password = trim($_POST['password']);
    $reenterpassword = trim($_POST['reenterpassword']);
    $club_address = trim($_POST['club_address']);
    $city_name = trim($_POST['city_name']);
    $ddlcountry = trim($_POST['ddlcountry']);
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
           
           $sql=  mysql_query("Select * from club where user_emailid='$email'");
           $sql1= mysql_query("Select * from club where user_login_id='$club_username'");
           
           if(mysql_num_rows($sql)==0)
           {
               if(mysql_num_rows($sql1)==0)
               { 
               $randstring=generateRandomString();
               $sql2= mysql_query("Insert into club(club_name,user_emailid,user_login_id,user_login_password,club_address,club_city,club_country,club_state,club_categories,verification_code) "
                       . "values('$clubname','$email','$club_username','$password','$club_address','$city_name','$ddlcountry','$state','$categories','$randstring')");
               
               $to=$email;
               $from="Admin@Tunng.co";
               $subj="Tunng.co :: Email verification";
               $msg="Thanks to register in <a href='https://tunng.co/'>Tunng.co</a><br/>
                     Your registration is done successfully, for email verification click on the below link.<br/><br/>
                     <a href='https://tunng.co/clublogin_view.php?verification=$randstring'>Click here for Email Verification</a><br/><br/>";
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
    $mail->AddAddress($to, $clubname);

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
                      This user name already register, please try other.<br/>your registration successfully complete,then try to login.
               </div>";
           }
           }
           else 
           {
           print"<div class='alert alert-danger  alert-dismissable' style='padding:5px !important'>
                   This Email already register, please try other.
           </div>";

       }
        }
    if(isset($_POST['mobno']))
        {
               
               $sql1= mysql_query("Select * from club where user_login_id='$club_username'");
              
               
                   if(mysql_num_rows($sql1)==0)
                   {
                     
                   $sql2= mysql_query("Insert into club(club_name,user_login_id,user_login_password,club_address,club_city,club_country,verification_code,mobile_no)"
                           . "values('$clubname','$club_username','$password','$club_address','$city_name','$ddlcountry','done','$mobileno')");
              
                   
                    Print"<div class='alert alert-success  alert-dismissable' style='padding:5px !important'>
                          Dear User, Thanks for registration <br/>Your registration successfully complete,then try to login.
                   </div>";
                   }else 
           {
                Print"<div class='alert alert-danger  alert-dismissable' style='padding:5px !important'>
                      This user name already register, please try other.<br/>your registration successfully complete,then try to login.
               </div>";
           }
               
               }
              
        }
   


?>