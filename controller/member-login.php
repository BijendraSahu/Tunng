<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include './connection.php';
    if (isset($_POST['passcode']) && $_POST['passcode'] != '') {
        $pin = $_POST['passcode'];
        $sql1 = mysql_query("Select * from  user_reg where pin_no='$pin' ");

        if (mysql_num_rows($sql1) == 1) {
            $user = mysql_fetch_array($sql1);
            if ($user['verification_code'] == 'done') {
                $_SESSION['memberid'] = $user['srno'];
                $_SESSION['username'] = $user['user_name'];
                $_SESSION['profilepic'] = $user['member_photo'];
//               
//               $entry_date=$user['entry_dt'];
//               $Currentdate=strtotime(date("Y-m-d"));
//               $newEndingDate =strtotime(date("Y-m-d", strtotime(date("Y-m-d", strtotime($entry_date)) . " + 365 day"))); 
                /* if($Currentdate >= $newEndingDate)
                 {
                  header("location:../member_renew.php");
                    $_SESSION['username_renewmembership']=$user['user_name'];
                     //echo"time out";
                 }
                 else*/
//                {

                echo $pin;
//                }

            } else {
                echo "Please verify your Email ID, then try to login.";

            }
        } else {
            echo "Please Enter Valid Pin";
        }
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        if ($username != '' && $password != '') {
            $sql1 = mysql_query("Select * from  user_reg where (user_name='$username' AND password='$password') or (contact_no='$username' AND password='$password')");

            if (mysql_num_rows($sql1) == 1) {
                $user = mysql_fetch_array($sql1);
                if ($user['verification_code'] == 'done') {
                    $_SESSION['profilepic'] = $user['member_photo'];
                    mysql_close();
//                $entry_date=$user['entry_dt'];
//               $Currentdate=strtotime(date("Y-m-d"));
//               $newEndingDate =strtotime(date("Y-m-d", strtotime(date("Y-m-d", strtotime($entry_date)) . " + 365 day"))); 
                    /* if($Currentdate >= $newEndingDate)
                     {
                      header("location:../member_renew.php");
                        $_SESSION['username_renewmembership']=$user['user_name'];
                         //echo"time out";
                     }
                     else*/
//                {
                    $_SESSION['username'] = $user['user_name'];
                    $_SESSION['memberid'] = $user['srno'];

                    header("location:../member-timeline.php");
//                }

                } else {
                    mysql_close();
                    $_SESSION['emailvarificationerr'] = "Please verify your Email ID, then try to login.";
                    header("location:../login_view.php");

                }
            } else {
                mysql_close();
                $_SESSION['incorrectusernm'] = "You have enter in-correct username / password.";
                header("location:../login_view.php");
            }
        } else {
            $_SESSION['allfieldreq'] = "Username and password required.";
            header("location:../login_view.php");
        }
    }
} else if ($_GET['fb'] == 'yes') {
    include './connection.php';
    $fuid = $_GET['fbid'];
    $ffname = $_GET['fbname'];
    $femail = $_GET['fbemail'];
    $check = mysql_query("select * from user_reg where Fuid='$fuid'");
    $check = mysql_num_rows($check);
    if (empty($check)) { // if new user . Insert a new record
        $query = "INSERT INTO user_reg (Fuid,user_name,email_id) VALUES ('$fuid','$ffname','$femail')";
        mysql_query($query);
    } else {   // If Returned user . update the user record
        $query = "UPDATE user_reg SET user_name='$ffname', email_id='$femail' where Fuid='$fuid'";
        mysql_query($query);
    }
    $check = mysql_query("select * from user_reg where Fuid='$fuid'");
    $user = mysql_fetch_array($check);
    $_SESSION['profilepic'] = $user['member_photo'];
    $_SESSION['username'] = $user['user_name'];
    $_SESSION['memberid'] = $user['srno'];

    header("location:../member-timeline.php");
}
?>