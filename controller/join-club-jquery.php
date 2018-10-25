<?php
session_start();
$errorlist="";
$datafield="";
if(isset($_SESSION['errorlist']))
{
    $errorlist=$_SESSION['errorlist'];
}
if(isset($_SESSION['datafield']))
{
    $datafield=$_SESSION['datafield'];
}
?>
<style type="text/css">
    #errname, #errcontact, #errcity,#errcountry{
        text-align: left;
        padding-left: 0px;
        margin-left: 0px;
        color: #red;
        font-weight: bold;
        
    }
</style>

<script type="text/javascript">
    function fvalidation()
    {
        var name=document.getElementById('join_name').value;
        
        var contact=document.getElementById('join_contact').value;
        var city=document.getElementById('join_city').value;
        var country=document.getElementById('join_country').value;
        var regnm =/^[A-Za-z]/
        
        var contactexp=/[0-9]/g;
        
        
        
    if(name==="")
    {
        document.getElementById('errname').style.display='block';
        document.getElementById('errname').innerHTML="Please enter your full name.";
       
        return false;
    }
    else
    {
        document.getElementById('errname').style.display='none';
        document.getElementById('errname').innerHTML="";
    }
    if(!name.match(regnm))
    {
        document.getElementById('errname').style.display='block';
        document.getElementById('errname').innerHTML="Please enter your valid name";      
        return false;  
    }
    else
    {
        document.getElementById('errname').style.display='none';
        document.getElementById('errname').innerHTML="";
    }
   if(contact==="")
    {
        document.getElementById('errcontact').style.display='block';
        document.getElementById('errcontact').innerHTML="Please enter contact no.";
        return false;
   }
    else
   {
        document.getElementById('errcontact').style.display='none';
        document.getElementById('errcontact').innerHTML="";
    }
    if (!contact.match(contactexp))
    {
        document.getElementById('errcontact').style.display='block';
        document.getElementById('errcontact').innerHTML="Please Enter valid contact no.";
    return false;
    }
    else
    {
        document.getElementById('errcontact').style.display='none';
        document.getElementById('errcontact').innerHTML="";
    }
   
  
    
    if(city==="")
    {
        document.getElementById('errcity').style.display='block';
        document.getElementById('errcity').innerHTML="Please enter your City";
        return false;
    }
    else
    {
        document.getElementById('errcity').style.display='none';
        document.getElementById('errcity').innerHTML="";
    }    
      if(country==="")
    {
        document.getElementById('errcountry').style.display='block';
        document.getElementById('errcountry').innerHTML="Please enter your Country";
        return false;
    }
    else
    {
        document.getElementById('errcountry').style.display='none';
        document.getElementById('errcountry').innerHTML="";
    }
    
     
}
             </script>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $clubID=$_POST['clubnm'];
    include 'connection.php';
    $usernm=$_SESSION['username'];
    $sql=  mysql_query("Select * from club where clubID='$clubID'");
    
    $resj=  mysql_fetch_array($sql);
    $clubname=$resj['club_name'];
    $clubuser_emailid=$resj['user_emailid'];
    
   $sqlclubnmr=  mysql_query("Select * from join_club where user_name='$usernm' and club_name='$clubname' and email_id='$clubuser_emailid'");
    mysql_close();
   if(mysql_num_rows($sqlclubnmr)==0)
    {
   print"<legend><a href='#'></a>Join club</legend>";
             print"<form  method='POST' action='controller/join-club.php' class='form' role='form' enctype='multipart/form-data' onsubmit='return fvalidation();' >";
                print"<input class='form-control' name='club_name' id='club_name' value='$clubname' type='text' readonly='true' />";
               
 $stylenm="";
if(isset($errorlist['fullnameNull'])|| isset($errorlist['fullnamechar']))
{
 $stylenm="display:block";
 }
else
{
$stylenm="display:none";
}

print"<div  class='col-md-12 alert alert-danger' id='errname' style='padding: 1px 1px 1px 5px;  $stylenm' >";

if(isset($errorlist['fullnameNull']))
{
echo $errorlist['fullnameNull'];
}
if(isset($errorlist['fullnamechar']))
{
echo $errorlist['fullnamechar'];
}


print"</div>";
 print"<input class='form-control' name='join_email' id='join_email' value='$clubuser_emailid' readonly='true' type='text' />";
                
//$stylenm="";
//if(isset($errorlist['emailNull']) || isset($errorlist['emailvali']))
//{
// $stylenm="display:block";
//}
//else 
//{
//$stylenm="display:none";
//}

// print"<div class='col-md-12 alert alert-danger' id='erremail' style='padding: 1px 1px 1px 5px;  $stylenm;'>";
//   
//        if(isset($errorlist['emailNull']))
//        {
//            echo $errorlist['emailNull'];
//        }
//        if(isset($errorlist['emailvali']))
//        {
//            echo $errorlist['emailvali'];
//        }
//       
//     
//  print"</div>";
    print"<input class='form-control' name='join_name' id='join_name' placeholder='Enter your name' type='text'/>";
                 
                 print"<input  class='form-control' name='join_contact'  id='join_contact' placeholder='Contact no' type='text' maxlength='10'/>";
                 $stylenm="";
        if(isset($errorlist['contactNull']) || isset($errorlist['contact_vali']) || isset($errorlist['contact_digit']))
        {
            $stylenm="display:block";
        }
        else
        {
            $stylenm="display:none";
        }
  
  print"<div class='col-md-12 alert alert-danger' id='errcontact' style='padding: 1px 1px 1px 5px; $stylenm;'>";
      
        if(isset($errorlist['contactNull']))
        {
            echo $errorlist['contactNull'];
        }
     
        if(isset($errorlist['contact_vali']))
        {
            echo $errorlist['contact_vali'];
        }
        if(isset($errorlist['contact_digit']))
        {
            echo $errorlist['contact_digit'];
        }
    
  print"</div>";
              print"<input maxlength='13' class='form-control' name='join_city' id='join_city' placeholder='City' type='text' />";
              
    $stylenm="";
        if(isset($errorlist['cityNull']))
        {
            $stylenm="display:block";
        }
        else 
        {
            $stylenm="display:none";
        }
     
            print"<div class='col-md-12 alert alert-danger' id='errcity' style='padding: 1px 1px 1px 5px;  $stylenm;'>";
    
        if(isset($errorlist['cityNull']))
        {
            echo $errorlist['cityNull'];
        }
       
      
        print"</div>";
              print"<input maxlength='13' class='form-control' name='join_country' id='join_country' placeholder='Country' type='text' />";
              $stylenm="";
        if(isset($errorlist['countryNull']))
        {
            $stylenm="display:block";
        }
        else 
        {
            $stylenm="display:none";
        }
     
            print"<div class='col-md-12 alert alert-danger' id='errcountry' style='padding: 1px 1px 1px 5px;  $stylenm;'>";
    
        if(isset($errorlist['countryNull']))
        {
            echo $errorlist['countryNull'];
        }
       
      
        print"</div>";
             print"<input class='form-control' name='join_profile' id='join_profile' type='file' />";
             print" <button class='btn btn-lg btn-primary btn-block' type='submit' id='submit_form' name='submit_form'>Join Club</button>";
             print"</form>";
    } 
    else
        {
        print"<div class='alert alert-danger'> ";
        print"You'r already joined this club";
        print"</div>";
         }

}

    unset($_SESSION['errorlist']);
    unset($_SESSION['datafield']);
    
    
?>

