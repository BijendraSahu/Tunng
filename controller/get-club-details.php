<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $clubID=$_POST['clubnm'];
    include 'connection.php';
   
    $sql=  mysql_query("Select * from club where clubID='$clubID'");
    
    $res=  mysql_fetch_array($sql);
    print "<div class='row'>";
        print "<div class='col-sm-6 col-md-4'>";
      if($res['club_image']!="")
        {
        print "<img src='assets/img/club_photo/".$res['club_image']."' alt='".$res['club_name']."' class='img-rounded img-responsive' style='height:100px; width:100px;' />";
        }
        else
         {
        print "<img class='img-rounded img-responsive'  src='assets/img/club.jpg' style='max-width:150px;'>";
         }
        print "</div>";
        print "<div class='col-sm-6 col-md-8'>";
        print "<h5>Club name &nbsp;&nbsp;<small>".$res['club_name']."</small></h5>";
        print "<h5>Club address&nbsp;&nbsp;<small>".$res['club_address']."</small></h5>";
        print "<h5>Country&nbsp;&nbsp;<small>".$res['club_country']."</small></h5>";
        print "<h5>City&nbsp;&nbsp;<small>".$res['club_city']."</small></h5>";
        print "<h5>Opening time&nbsp;&nbsp;<small>".$res['club_open_time']."</small></h5>";
        print "<h5>Close time&nbsp;&nbsp;<small>".$res['club_close_time']."</small></h5>";
        print "</div>";
    print "</div>";
    mysql_close();
}
?>

