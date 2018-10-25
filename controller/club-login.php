<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
        include './connection.php';
    if(isset($_POST['passcode'])&& $_POST['passcode']!=''){
      $pin= $_POST['passcode'];
       $sql1= mysql_query("Select * from club where pin_no='$pin' ");
       
        if(mysql_num_rows($sql1)==1)
            {
            $user= mysql_fetch_array($sql1);
            if($user['verification_code']=='done')
            {
                $_SESSION['clubid']=$user['clubID'];
                $_SESSION['username']=$user['user_login_id'];
                $_SESSION['clubname']=$user['club_name'];
                $_SESSION['clubimg']=$user['club_image'];
                echo $pin;
            }
            else {
                
              echo "Please verify your Email ID, then try to login.";
               
            }
        }else{
            echo "Please Enter Valid Pin";
        }
      
    }else{
    
    $username=  trim($_POST['username']);
    $password=  trim($_POST['password']);    
    if($username!='' && $password!='')
    {
    
        $sql1= mysql_query("Select * from club where (user_login_id='$username' AND user_login_password='$password') OR (mobile_no='$username' AND user_login_password='$password')");
        if(!$sql1) die(mysql_error());
        if(mysql_num_rows($sql1)==1)
        {
            $user= mysql_fetch_array($sql1);
            if($user['verification_code']=='done')
            {
                $_SESSION['clubid']=$user['clubID'];
                $_SESSION['username']=$user['user_login_id'];
                $_SESSION['clubname']=$user['club_name'];
                $_SESSION['clubimg']=$user['club_image'];
                $_SESSION['category']=$user['club_categories'];
                
                header("location:../showcategory.php");
            }
            else {
              
                $_SESSION['emailvarificationerr']="Please verify your Email ID, then try to login.";
                header("location:../clublogin_view.php");
            }
        }
        else {
            
            $_SESSION['incorrectusernm']="You have enter in-correct username / password.";
            header("location:../clublogin_view.php");
        }
    }
     else {
        $_SESSION['allfieldreq']="Username and password required.";
        header("location:../clublogin_view.php");
          }
    }
}
?>