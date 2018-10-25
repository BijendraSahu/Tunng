<?php
session_start();
require_once('../phpmailer/phpmailer/class.phpmailer.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $errorlist=array();
    empty($errorlist);
     $gmsg="";
     $email = trim($_POST['emailid']);
     $email_reg="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
     if($email=="")  
     {
         $errorlist['email_vali_null']="Email is required.";
     }
     elseif(!preg_match($email_reg, $email))     
     {
        $errorlist['email_vali']="Please Enter Valid Email Id";
     } 
      if(empty($errorlist))
     {
        unset($_SESSION['errorlist']);
       
       include 'connection.php';
        $sqlc= mysql_query("select * from club where user_emailid ='$email'");
        echo mysql_error();
        if(mysql_num_rows($sqlc)==1)
        {
            echo $result['emailid'];
            mysql_close();
                $to=$email;
                $result=  mysql_fetch_array($sqlc);
                $from="Admin@Tunng.co";
                $subj="tung.co :: Forgot Password recovery mail";
                $msg="Thanks to visit <a href='http://www.tunng.co'>tunng.co</a><br/>
                       Your User Id:-<label style='color:red;'>".$result['user_login_id']."</label>,&nbsp;&nbsp;
                       and Password is:-<label style='color:red;'>".$result['user_login_password']."</label>.<br/><br/> ";
                $header=array();
                $header[]='From: '.$from.'   Reply-To: '.$from;
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
    $mail->AddAddress($to);

    $mail->Subject  =  $subj;
    $mail->IsHTML(true);
    $mail->Body    = $msg;
	if($mail->Send())
	{
		   $_SESSION['successmail']="We have sent password in your registered Email id. ";
                       header("location:../forgotpassclub_view.php");
	}
	else
	{

		echo "Mail Error - >".$mail->ErrorInfo;
		//die();
	}
                
        }
        else
        {
            mysql_close();
            $err="You have entered incorrect Email ID.";
            $_SESSION['emailerror']=$err;
            header("location:../forgotpassclub_view.php");  
        }
         }
    else 
    {
        $_SESSION['errorlist']=$errorlist;
        header("location:../forgotpassclub_view.php");  
    }
}
 else {
    
   header("location:../index.php");  
}
?>