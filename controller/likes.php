<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $user_id=$_SESSION['username'];
   $msgid=$_POST['msgid'];
    include 'connection.php';
    $sql=  mysql_query("Select * from likes where user_name='$user_id' and post_id=$msgid ");
    
    if(mysql_num_rows($sql)==0)
    {
        $sql1= mysql_query("update  club_post SET `like` = `like` + 1 where `srno`=$msgid");
        
        $sql2=  mysql_query("insert into likes(`post_id`,`user_name`) values($msgid,'$user_id')");
        
    }
    else
    {
        $sql1= mysql_query("update club_post SET `like`= `like` - 1 where `srno`=$msgid");
        
        $sql2=  mysql_query("delete from likes where `post_id`=$msgid and `user_name`='$user_id'");
    }
    $sql3=  mysql_query("Select * from club_post where `srno`=$msgid");
    echo mysql_error();
    $tolikesarr=  mysql_fetch_array($sql3);
    mysql_close();
    echo $tolikes=$tolikesarr[9];
}
?>