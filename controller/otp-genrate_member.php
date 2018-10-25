<?php session_start();
include './connection.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{ 
          $mobileno=$_POST['mobilenootp'];
          $sql2= mysql_query("Select * from user_reg where contact_no='$mobileno'");
          if($mobileno!='')
          {
               if(mysql_num_rows($sql2)==0)
                   {
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
    $name="OTP -".$otp;
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

         print"<input type='hidden' value='$otp' name='genratedotp' id='genratedotp'/>";
               }
           else {
                     Print"<div class='alert alert-danger  alert-dismissable' style='padding:5px !important'>
                      This Mobile number already register, please try other.
                   </div>"; 
                 }
          }
          else {
              print"<div class='alert alert-danger' style='text-align:center;'>Mobile Number Is Not Empty</div>";
          }
            
              
        } 


?>