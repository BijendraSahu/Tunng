<?php
session_start();
include './connection.php';
$username= $_SESSION['username'];
$clubname= $_SESSION['clubname'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['mobileno_forpin'])&& $_POST['mobileno_forpin']!='')
    {
        $mobileno=  trim($_POST['mobileno_forpin']);
        include './connection.php';
//        $sql1= mysql_query("Select * from club where mobile_no='$mobileno' and user_login_id='$username'");
//        if(!$sql1) die(mysql_error());
//        if(mysql_num_rows($sql1)==0)
//        {
            function generateRandomString($length = 6) 
            {
                $characters = '0123456789';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) 
                {
                     $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }
                 $otp=generateRandomString();
    $name="OTP Is: $otp";
    $mobileno=$mobileno;
    $username = "dynamicbindings@gmail.com";
    $hash = "b77eb271d60847abdc2ec3eacb011ca3680781ad";
    $sender = "JLJTMI"; // This is who the message appears to be from.
    $numbers = $mobileno; // A single number or a comma-seperated list of numbers
    $message = $name." , Mobile No- $mobileno , want to contact with JalJaitMilan.com.";
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers;
    $ch = curl_init('http://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
      $sql1= mysql_query("UPDATE club SET mobile_no='$mobileno' where club_name='$clubname' AND user_login_id='$username'");
      echo $otp;
//        }
//    else{
//        $sql1res=  mysql_fetch_array($sql1);
//            echo $mobileno;
//        }   
    }
    
    if(isset($_POST['enter_pin'])&& $_POST['enter_pin']!='')
    {
      $enter_pin= trim($_POST['enter_pin']);
       $sql2= mysql_query("Select * from club where pin_no='$enter_pin'");
       if(mysql_num_rows($sql2)==0)
        {
      $sql1= mysql_query("UPDATE club SET pin_no='$enter_pin' where club_name='$clubname' AND user_login_id='$username'");
        }
        else{
            echo $enter_pin;
        } 
    }
 
}
?>