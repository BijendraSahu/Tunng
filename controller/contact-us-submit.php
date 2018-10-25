<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $errorlist=array();
    $datafield=array();
   
     $subject=trim($_POST['subject']);
     $datafield['asubject']=$subject;
     $f_name = trim($_POST['f_name']);  
     $datafield['afname']=$f_name;
     $name_reg="/^[a-zA-Z]/";
     $email = trim($_POST['email']);  
     $datafield['aemail']=$email;
     $email_reg="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
     $mob_no = trim($_POST['mob_no']); 
     $datafield['amob_no']=$mob_no;
     $mob_reg="/^[0-9]+$/";
     $message=trim($_POST['message']);
     $datafield['amessage']=$message;
       if($subject=="")
        {
            $errorlist['subj_null']=" Enter Subject .";
         
        }
     elseif($f_name=="")
        {
            $errorlist['f_name_null']="Name is required.";
         
        }
     elseif(!preg_match($name_reg, $f_name))
        {
            $errorlist['f_name_char']="Enter Your valid Name";
        }
   
    elseif($email=="")
        {
            $errorlist['email_vali_null']="Email is required.";
         
        }
     elseif(!preg_match($email_reg, $email))
        {
            $errorlist['email_vali']="Please Enter Your Valid Email Id ";
        }
    elseif($mob_no=="")
        {
         
            $errorlist['mob_null']="Mobile no is required.";
         
        }
     elseif(!preg_match($mob_reg, $mob_no))
        {
         
            $errorlist['mob_vali']="Enter Your valied contact no";
        }
     elseif(strlen($mob_no)!=10)
        {
           $errorlist['mob_digit']="Contact no must be 10 digit."; 
        }
      
     elseif( $message=="")
        {
            $errorlist['msg_null']=" Enter Message .";
        }
        if(empty($errorlist))
           {
             include'./connection.php';
            $sql=mysql_query("Insert into contactus(category,name,email,mobile_no,msg) "
                       . "values('$subject','$f_name','$email','$mob_no','$message')");
                 echo mysql_error();
                   mysql_close();
                   $_SESSION['successmsg']="Successfully Done";
                   
                   if($subject!='' && $f_name!='' && $email!='' && $mob_no!='' && $message!='')
            {
                $to="contact@tunng.co";
                $from=$email;
                $subj=$f_name." Want to contact with Tunng.co";
                $msg="<b>Name :</b>$f_name<br/><br/>
                <b>Email ID :</b>$email<br/><br/>
                <b>Contact No. :</b>$mob_no<br/><br/>
                <b>Message :</b>$message<br/><br/>";
                $header=array();
                $header[]='From: '.$from.'    Reply-To: '.$from;
                $header[]='MIME-Version:1.0';
                $header[]='Content-Type:text/html;Charset=iso-8859-1';
                $header[]='Content-Transfer-Encoding:7bit';
                if(mail($to,$subj,$msg,join("\r\n",$header)))
                {
                        header("location:http://www.tunng.co/");
                }
                header("location:http://www.tunng.co/");
            }
                     header("location:../contact.php"); 
           }
            else {
               $_SESSION['errorlist']=$errorlist;
               $_SESSION['datafield']=$datafield;
               echo mysql_error();
             header("location:../contact.php"); 
          }
}
else{
    header("location:../index.php");
}
?>

