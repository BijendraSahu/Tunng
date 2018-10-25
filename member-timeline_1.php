<?php
include "include/header.php";
include "include/sidebar.php";
include 'controller/connection.php';
$product=  mysql_query("SELECT * FROM pramotion order by entry_dt DESC");
?>

<div class="main-content">
<div class="main-content-inner">

<script>
$(document).ready(function()
{ 

$('.likebtn').click(function(){
var divid=this.id;

var msgid = divid.substring(4);
$.ajax({
url:'controller/likes.php',
method:'POST',
data:'msgid='+msgid,

success:function(result)
{
var divid="'#like"+msgid+"'";

$("#like"+msgid).html("<i class='fa fa-thumbs-up' aria-hidden='true'></i>"+result);
}
});
});
});

</script>

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
<ul class="breadcrumb">
<li>
<i class="ace-icon fa fa-home home-icon"></i>
<a href="#">Home</a>
</li>
<li class="active">Timeline</li>
</ul>

<div class="nav-search" id="nav-search">
<form class="form-search">
<span class="input-icon">
<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
<i class="ace-icon fa fa-search nav-search-icon"></i>
</span>
</form>
</div>
</div>
<marquee onmouseover="this.stop();" onmouseout="this.start();" style="text-transform:capitalize ;color:#800080;">
<span style="position: relative;vertical-align: middle; color:blue;text-shadow: 0 0 3px white;font-size: 18px; font-weight: normal;">Promotion -</span>                  
<?php
while($productres=mysql_fetch_array($product))
{
?>
<span style="color:black;font-size: 16px;  vertical-align: middle;position: relative;font-weight: bold;"><?php echo (strlen($productres['businessnm']) > 15) ? substr($productres['businessnm'],0,15).' . . .' : $productres['businessnm'];?>-<?php echo (strlen($productres['productname']) > 15) ? substr($productres['productname'],0,15).' . . .' : $productres['productname'];?></span><span style="color:black;font-size: 16px;font-weight: normal; vertical-align: middle;"> <?php echo $productres['price'];?>&nbsp;|</span>

<span style="position: relative;"></span>&nbsp;
<?php
}
?>
</marquee>
<div class="page-content" style="padding:0px">

<div class="page-header">

</div><!-- /.page-header -->







<div class="row">

<div class="col-sm-12">
<div class="widget-box" style="border:0px;">

<style>
ul.comtopmar {border:0px solid black;margin-top:-15px}
.userresponce {border:0px solid black;margin-top: -15px}
a:hover {text-decoration: none;}
.rehover:hover {background-image: url(images/replyhover.png);}
</style>
<div class="widget-body">
<div class="widget-main no-padding">
<div class="dialogs">
<?php
$viewcbpost=mysql_query("Select cp.user_name,cp.srno,cp.club_name,cp.post,cp.post_image,cp.post_video,cp.emoji,cp.entry_dt,cp.commented_user_name,cb.club_image,cp.member_post_img,cp.member_post_video,cp.subject,cp.post_doc from club_post cp,club cb where cp.user_name=cb.user_login_id  and comment=0 ORDER BY cp.entry_dt desc");

$i=1;

while ($viewcbpostdetl= mysql_fetch_array($viewcbpost))
{

?>
<div class="itemdiv dialogdiv">


<div class="user">

<?php
if($viewcbpostdetl['club_image']!='')
{

?>
<img src="images/club_photo/<?php echo $viewcbpostdetl['club_image'];?>" alt="User" height="41px">
<?php
}
else {
?>
<img alt="Alexa's Avatar" src="assets/images/avatars/avatar.png"  alt="User" />
<?php
}
?>

</div>

<div class="body">
<div class="name" style="text-transform:capitalize;">
<a href="#"><?php echo $viewcbpostdetl['club_name'];?></a>
<div class="time">
<i class="ace-icon fa fa-clock-o"></i>
<span class="green"><?php echo date( 'd M Y h:i:s',strtotime($viewcbpostdetl['entry_dt']));?></span>
</div>
</div>
<div class="name">
<?php
if($viewcbpostdetl['subject']=='')
{
?>
<p><b style="color:#800080;">Subject -</b>&nbsp;&nbsp;no subject</p>
<?php
}  else {
?>
<p><b style="color:#800080;">Subject -</b>&nbsp;&nbsp;<?php echo $viewcbpostdetl['subject'];?></p>
<?php
}
?>
</div>
<div class="text" style="text-align:justify;"><?php echo $viewcbpostdetl['post'];?></div>
<div class="asset video">
<?php
if($viewcbpostdetl['post_image']!='')
{
?>
<img src="images/club_post_images/<?php echo $viewcbpostdetl['post_image'];?>" alt="sorry there is a problem to load image." style="width:100%;"/>
<?php
}
?>
</div><br/>        
<div class="asset video">
<?php
if($viewcbpostdetl['post_video']!='')
{
?>
<video  controls autoplay width="100%">
<source src="images/club_post_videos/<?php echo $viewcbpostdetl['post_video'];?>" >
</video>
<!--                                                                                                                                          <iframe width="450" height="200" src="images/club_post_videos/<?php echo $viewcbpostdetl['post_video'];?>" frameborder="0"></iframe>-->

<?php
}
?>
</div>
	 <?php  
if($viewcbpostdetl['post_doc']!='')
{
?> 
<div class ="col-md-12" style="border:0px solid red;margin-top: -10px;margin-left: -8.5em;">

<div class="asset video col-md-12" style="border:0px solid red;margin-left: 5em;font-size: 18px;">

<p class="fa fa-file-text"></p> 

<?php
$str = $viewcbpostdetl['post_doc'];
$res = explode(".", $str);
echo".". $res[1];
?> File
<a  href="images/club_post_doc/<?php echo $viewcbpostdetl['post_doc'];?>" target="_self"> Download</a>

</div></div>
<?php
} 
?>

<?php //echo $viewcbpostdetl[1];?>
<?php
if($viewcbpostdetl[6]!='')
{
?>
<div class="qa-message-content thumbnail" style="width:100px;height:100px;border:0px solid black;">
<?php
$emojis= $viewcbpostdetl[6];
$arr=@split(" ",$emojis); 

for($i=1;$i<sizeof($arr);$i++)
{
$emojiimg=$arr[$i];
?>
<img src="images/<?php  echo $emojiimg.'.png';?>" style="height: 80px;width: 80px;"/>
<?php
}

?>
</div>
<?php
}
?>

<!-- <img src="images/reply.png"> -->

<!-- ul reply -->
<ul class="comtopmar" style="margin:0px">
<form role="form" id="comment" name="comment" method="POST" action="controller/member-post-comment.php" enctype="multipart/form-data"> 
<div class="userresponce">

<style>
.tdspace td {padding-right:1px;border:0px solid black}
</style>

<table class="tdspace">
<tr>
<td>
<!-- POST BUTTON -->
<button type="submit" class="btn btn-sm btn-primary">Post</button>
</td>
<td>
<!-- Camera button -->

<button type="button" id="like<?php echo $viewcbpostdetl[1];?>" class="btn btn-sm btn-primary likebtn" title="Post file"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
<?php
$sqlcl=  mysql_query("Select * from club_post where srno=$viewcbpostdetl[1]");
$tlikarr=  mysql_fetch_array($sqlcl);
echo $tlikarr[9];
?>
</button>
</td>
<td>
<a  data-toggle="collapse" data-parent="#accordion" href="#collapseone<?php echo $i;?>">
<button type="button" class="btn btn-sm btn-primary" title="Post image"><i class="fa fa-camera" aria-hidden="true"></i></button>
</a>
</td>
<td>
<!-- Video button -->
<a  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $i;?>">
<button type="button" class="btn btn-sm btn-primary" title="Post video"><i class="fa fa-video-camera" aria-hidden="true"></i></button>
</a>
</td>
<td>
<!-- file button -->
<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree<?php echo $i;?>">
<button type="button" class="btn btn-sm btn-primary" title="Post file"><i class="fa fa-file" aria-hidden="true"></i></button>
</a>
</td>
</tr>
</table>







<div class="panel-group" id="accordion">
<div id="collapseone<?php echo $i;?>" class="panel-collapse collapse">
<div class="panel-body">
<h3 class="lead">Upload Image</h3>

<input type="file" name="fileuploadimg" id="fileuploadimg"/> <br/>
<div class="row">
<div class="col-xs-12 text-center">
</div>
</div>
</div>
</div>
<div id="collapseTwo<?php echo $i;?>" class="panel-collapse collapse">
<div class="panel-body">
<h3 class="lead">Upload Video</h3>
<input type="file" id="fileuploadvideo" name="fileuploadvideo"> <br/>
<div class="row">
<div class="col-md-12 text-center">
<div class="roundedVideo">
<div class="asset video">
<!--             <iframe width="450" height="200" src="http://www.youtube.com/embed/kfVsfOSbJY0?wmode=opaque" frameborder="0"></iframe>-->
</div>
</div>
</div>
</div>
</div>
</div>
<div id="collapseThree<?php echo $i;?>" class="panel-collapse collapse">
<div class="panel-body">
<h3 class="lead">Upload File</h3>
<input type="file" id="fileuploaddoc" name="fileuploaddoc"> <br/>

<div class="row">
<div class="col-md-12 text-center">
<div class="roundedVideo">
<div class="asset video">
<!--             <iframe width="450" height="200" src="http://www.youtube.com/embed/kfVsfOSbJY0?wmode=opaque" frameborder="0"></iframe>-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<hr/>			
<div class="input-group" style="border:0px solid black;width:100%">
<table width="100%">
<tr>
<td width="100%">
<input type="hidden" id="clubid" name="clubid" value="<?php echo $viewcbpostdetl['user_name'];?>"/> 
<input type="hidden" id="clubname" name="clubname" value="<?php echo $viewcbpostdetl['club_name'];?>"/>           
<input type="hidden" id="txtpost" name="txtpost" value="<?php echo $viewcbpostdetl['srno'];?>"/> 
<input class="form-control" placeholder="Add a comment" type="text" id="insert_comment" name="insert_comment">
</td>
<td width="100%">
<button type="submit" class="btn btn-sm btn-primary" style="float:right" name=""><span class="hidden-xs">Comment</span><i class="fa fa-paper-plane visible-xs" aria-hidden="true"></i></button>
</td>
</tr>
</table>
</div>

</form>
<hr/>

<!--                                                                                                                comment start-->
<?php
$commentid= $viewcbpostdetl['srno'];
include 'controller/connection.php';
$viewcmt=  mysql_query("Select * from club_post where comment='$commentid' ORDER BY entry_dt desc");

while ($viewcbcmtdetl= mysql_fetch_array($viewcmt))
{
$imgid=$viewcbcmtdetl['commented_user_name'];
$mbrimg=  mysql_query("Select * from  user_reg where user_name='$imgid'");
$mbrimgdetl=mysql_fetch_array($mbrimg);
?>    
<div class="itemdiv dialogdiv">
<div class="user">
<?php
if($mbrimgdetl['member_photo']!='')
{
?>
<img class="avatar" src="images/member_photo/<?php echo $mbrimgdetl['member_photo'];?>" alt="User" height="41px" >
<?php
}
else {
?>
<img alt="Default" src="assets/images/avatars/avatar.png" />
<?php
}
?>

</div>

<div class="body">
<div class="time">
<i class="ace-icon fa fa-clock-o"></i>
<span class="blue"><?php echo date( 'd M Y h:i:s',strtotime($viewcbcmtdetl['entry_dt']));?></span>
</div>

<div class="name" style="text-transform:capitalize;">
<a href="#"><?php echo $viewcbcmtdetl['commented_user_name'];?></a>
</div>
<?php  
if($viewcbcmtdetl['member_post_img']!='')
{
?> 

<div class="asset video">

<img src="images/member_post_images/<?php echo $viewcbcmtdetl['member_post_img'];?>" alt="image" style="width: 100%;"/>
<!--                                                                                                             <iframe height="200px" width="400px"  src="images/member_post_images/<?php echo $viewcbcmtdetl['member_post_img'];?>" frameborder="0"></iframe>-->

</div>
<?php
} 
?>
<?php  
if($viewcbcmtdetl['member_post_video']!='')
{
?> 

<div class="asset video">
<video  controls autoplay width="100%" poster="images/combo-big.png" title="video">
<source src="images/member_post_videos/<?php echo $viewcbcmtdetl['member_post_video'];?>" >
</video>

</div>
<?php
} 
?>
<?php  
if($viewcbcmtdetl['member_post_doc']!='')
{
?> 



<p class="fa fa-file-text"></p>
<?php
$str = $viewcbcmtdetl['member_post_doc'];
$res = explode(".", $str);
echo".". $res[1];
?> File

<a  href="images/club_post_doc/<?php echo $viewcbcmtdetl['member_post_doc'];?>" target="_self"> Download</a>
<!--<img src="assets/img/club_post_videos/<?php //echo $postdetl[2];?>" style="height: 150px;width: 180px;"/>-->


<?php
} 
?>
<?php  
if($viewcbcmtdetl['post']!='')
{
?> 

<div class="asset video">

<div class="text"><?php echo $viewcbcmtdetl['post'];?></div>
</div>
<?php
} 
?>




</div>
</div>
<?php
}
?> 
<!--                                                                                                                comment end-->



</ul>
</div>
</div>
<?php
$i++;
}

?>
<!--                                                                                                                         end timeline one       -->


</div>
</div><!-- /.widget-main -->
</div><!-- /.widget-body -->
</div><!-- /.widget-box -->
</div>
</div>
<!-- /.row -->

<!-- PAGE CONTENT ENDS -->


</div><!-- /.page-content -->
<?php
include "include/footer.php";
?>
</div>
</div><!-- /.main-content -->

