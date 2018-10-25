<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $errorlist=array();
    $datafield=array();
    $srno=$_POST['srno'];
    $fname=$_POST['fname'];
    $datafield['datafname']=$fname;
    
    $mobileno = $_POST['mobileno']; 
    $datafield['datamobileno']=$mobileno;
    
    $emailid = $_POST['emailid']; 
    $datafield['dataemailid']=$emailid;
  
    $country = trim($_POST['country']); 
    $datafield['datacountry']=$country;
   
    
    $state= $_POST['state']; 
    $datafield['datastate']=$state;
    
    $city = $_POST['city']; 
    $datafield['datacity']=$city;
    $pin = $_POST['pin']; 
    $datafield['datapin']=$pin;
    $address = $_POST['address']; 
    $datafield['dataaddress']=$address;
    $radio_btn = $_POST['radio_btn']; 
     
      if($fname=="")
        {
           $errorlist['fname_null']="Name is required.";
        }
        elseif($mobileno=="")
        {
           $errorlist['mobileno_null']="Contact no is required.";
        }
       
        elseif($emailid=="")
        {
           $errorlist['emailid_null']="Email is required.";
        }
        
        elseif($country=="")
        {
           $errorlist1['country_null']="Country is required.";
        }
        elseif($state=="")
        {
           $errorlist['state_null']="State is required.";
        }
        elseif($city=="")
        {
           $errorlist['city_null']="City is required.";
        }
         elseif($pin=="")
        {
           $errorlist['pin_null']="Pin code is required.";
        }
        elseif($address=="")
        {
           $errorlist['address_null']="Address is required.";
        }
       
         elseif($radio_btn=="")
        {
           $errorlist['radio_null']="Payment option is required.";
        }
      
     if(empty($errorlist))
    {  
   include 'connection.php';
   $iq =mysql_query("INSERT INTO  payment_details(name,mobileno,emailid,country,state,city,pin,address,radio_btn)"
          ." VALUES ('$fname','$mobileno','$emailid','$country','$state','$city','$pin','$address','$radio_btn' )");
        
   $businessdetl=  mysql_query("SELECT * FROM add_product_business where srno= '$srno' ");
   $businessdetlres=  mysql_fetch_array($businessdetl);
   echo mysql_error();
    mysql_close();
    $busiemail=$businessdetlres['emailid'];
 $subcategory=$businessdetlres['subcategory'];

$title=$businessdetlres['title'];
  
//       $to=$busiemail;
//        $from="Admin@Tunng.co";
//        $subj="Tunng.co :: Confirmation mail";
//        $msg="Thanks to register in <a href='http://www.tunng.co'>Tunng.co</a><br/>
//              This Product  $subcategory &nbsp; $title Purchased by User Name $fname  Mobile no  $mobileno  ,<br/><br/>
//              <a href='http://www.tunng.co/payment-complete-msg.php'>Click here to go to tunng.co</a><br/><br/>";
//        $header=array();
//        $header[]='From: '.$from.'    No-Reply';
//       $header[]='MIME-Version:1.0';
//        $header[]='Content-Type:text/html;Charset=iso-8859-1';
//        $header[]='Content-Transfer-Encoding:7bit';



//       if(mail($to,$subj,$msg,join("\r\n",$header)))
//                {
           $_SESSION['registration_success']="Dear  $fname, Thanks for purchase,<br/>this product your process being successfully completed";
           
  //echo "ifif";
    header("location:../payment-complete-msg.php"); 
//                 }
//        $to_1=$emailid;
//        $from_1="Admin@Tunng.co";
//        $subj_1="Tunng.co :: Confirmation mail";
//        $msg_1="Thanks to register in <a href='http://www.tunng.co'>Tunng.co</a><br/>
//            Dear User, Thanks for purchase,<br/>this product $subcategory $title your process being successfully completed<br/><br/>
//              <a href='http://www.tunng.co/payment-complete-msg.php'>Click here to go to tunng.co</a><br/><br/>";
//        $header_1=array();
//        $header_1[]='From: '.$from.'    No-Reply';
//       $header_1[]='MIME-Version:1.0';
//        $header_1[]='Content-Type:text/html;Charset=iso-8859-1';
//        $header_1[]='Content-Transfer-Encoding:7bit';
//
//       if(mail($to_1,$subj_1,$msg_1,join("\r\n",$header_1)))
//                {
           $_SESSION['registration_success']="Dear  $fname, Thanks for purchase,<br/>this product your process being successfully completed<br/>";
           $_SESSION['buyer_details']="Name = $fname<br/>Contact No.=$mobileno<br/>Email-Id=$emailid<br/>Address=$address<br/>";
  //echo "ifif";
    header("location:../payment-complete-msg.php"); 
//                 }
    }
    else {
       $_SESSION['datafield']=$datafield;
        $_SESSION['errorlist']=$errorlist;
    // echo "else";
   header("location:../payment.php"); 
        }
    }
?>





