<?php
include "include/header_bus.php";
include "include/sidebar_bus.php";
include 'controller/connection.php';
$username=$_SESSION['username'];
$club=  mysql_query("select * from club where user_login_id='$username'");
$clubdetl=  mysql_fetch_array($club);
$srno=$_GET['srno'];
$sql=  mysql_query("SELECT * FROM add_product_business WHERE srno='$srno'");
$sqlresult= mysql_fetch_assoc($sql); 
$businessemail=$sqlresult['emailid'];
$businessnm=$_SESSION['clubname'];
?>

<div class="main-content">
<div class="main-content-inner">


<div class="page-content">
<div class="row">
<div class="col-xs-12">
<h4 class="blue" align="center">Send Comments/Messages To All The Members</h4>
<div class="search-area well col-xs-12" style="paddign:0px !important">

<div class="row">
<div class="col-md-4"></div>


<div class="col-md-4">
<div class="panel with-nav-tabs panel-default">
<div class="panel-heading" style="padding:0px">
<a href="#tab1default" data-toggle="tab" class="btn btn-sm btn-primary">
<span>Send Comment </span>
</a>
<a href="#tab2default" data-toggle="tab" class="btn btn-sm btn-primary">
<span>Send Message</span>
</a>
<!--
<ul class="nav nav-tabs">
<li class="active"><aDefault 1</a></li>
<li><a>Default 2</a></li>
</ul>
-->
</div>
<div class="panel-body" style="padding:0px">
<div class="tab-content">
<div class="tab-pane fade in active" id="tab1default">
Send comment 
									<form action="controller/business-comment.php" method="POST" enctype="multipart/form-data">
										<input type="hidden" id="business_email" name="business_email" value="<?php echo $businessemail;?>"/>
										<input type="hidden" id="business_nm" name="business_nm" value="<?php echo $businessnm;?>"/>
										 <input type="hidden" id="srno" name="srno" value="<?php echo $srno;?>"/>

											<div class="input-group">

<input class="form-control" id="comment" name="comment"  placeholder="Enter Comment for member" type="text">
<div class="input-group-btn">
<button type="submit" class="btn btn-default no-border btn-sm">
<i class="ace-icon fa fa-paper-plane icon-on-right bigger-110"></i>
</button>
</div>
</div>
										<!-- hidden inputs -->

									</form>

</div>
<div class="tab-pane fade" id="tab2default">
Send message 
									<form action="controller/business-message.php" method="post" enctype="multipart/form-data">
										<input type="hidden" id="business_email" name="business_email" value="<?php echo $businessemail;?>"/>
										<input type="hidden" id="business_nm" name="business_nm" value="<?php echo $businessnm;?>"/>
									   <input type="hidden" id="srno" name="srno" value="<?php echo $srno;?>"/>

									   <div class="input-group">

<input class="form-control" id="message" type="text"  name="message" placeholder="Message for member" type="text">
<div class="input-group-btn">
<button type="submit" class="btn btn-default no-border btn-sm">
<i class="ace-icon fa fa-paper-plane icon-on-right bigger-110"></i>
</button>
</div>
</div>

										<!-- hidden inputs -->
										<input type="hidden" id="x" name="x" />
										<input type="hidden" id="y" name="y" />
										<input type="hidden" id="w" name="w" />
										<input type="hidden" id="h" name="h" />
									</form>

</div>
</div>
</div>
</div>
</div>


<div class="col-md-4">
<center>
<div class="input-group">



</div>
</center>
<div class="hr hr-6" style="border:0px"></div>

</div>
<div class="col-md-4"></div>
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">

<h3 class="blue" align="center">Product Details </h3>
<div class="hr hr-24"></div>

<!-- <div class="media search-media"> -->
<div class="row">
<div class="col-xs-12 col-md-4">
<div class="">
<a href="#">
<img class="media-object share-image img-responsive thumbnail"  alt="72x72" src="images/businessimg/<?php echo $sqlresult['product_imgone'];?>" data-holder-rendered="true">
<p class="onribbon_price" style="transform:rotate(-45deg);border:0px solid black;position: absolute;z-index:1;top:18px;font-width:bold !important;"><?php echo $sqlresult['price'];?></p>
														<img src="images/corner_ribbon.png" style="transform: rotate(0deg);position:absolute;width:90px;height:90px;left:5px;top:-7px">
</a>
</div>
   <center>
       
    <h5 class="col-md-6 media-heading" style="text-align: right;">
<a href="#" class="blue"><b>Share This Product</b></a>
</h5>
    <div class="col-md-6 a2a_kit a2a_kit_size_16 a2a_default_style" data-a2a-url="<?php echo  "https://tunng.co/viewproductdetails1.php?srno=".$srno; ?>" >
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_whatsapp"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
    </div></center>


<script async src="//static.addtoany.com/menu/page.js"></script> 
</div>
<div class="col-xs-12 col-md-8">
<div class="hr hr-5"></div>
<div class="media-body">
<div>
<h4 class="media-heading">
<a href="#" class="blue"><b>Product Name</b></a>
</h4>
<h1><?php echo $sqlresult['title'];?></h1>
</div>
<div>
<h4 class="media-heading">
<a href="#" class="blue"><b>Price</b></a>
</h4>
<h4><?php echo $sqlresult['price'];?></h4>
</div>
<div>
<h4 class="media-heading">
<a href="#" class="blue"><b>Description</b></a>
</h4>
<h5><?php echo $sqlresult['detaildiscription'];?> </h5>

</div>
</div>
</div>

</div>
<!-- </div> -->
<!-- <div class="hr hr-5"></div> -->




<div class="row">
<h3 class="blue" align="center">Comments/Message</h3>
<div class="col-xs-12">
<?php
$businessnm=$_SESSION['clubname'];
$noti=  mysql_query("SELECT * from  comment_message_business where  srno_product ='$srno' ORDER BY entry_dt DESC");
$numrow=  mysql_num_rows($noti);
if($numrow >=1)
{
?>
 <?php
while($notifres=  mysql_fetch_array($noti))
{
?> 
 <?php 
if($notifres['comment']!="")
{
?>
<div class="widget-box" style="border:0px">
 <h5> Comments </h5> 

<div class="widget-body">
<div class="widget-main no-padding">
<div class="dialogs">


<div class="itemdiv dialogdiv">
<div class="user">

<?php
if($_SESSION['clubimg']!=''){
?>
<img  src="images/club_photo/<?php echo $_SESSION['clubimg'];?>" alt="Jason's Photo" height="41px"/>
<?php

}
else{
?>
<img alt="John's Avatar" src="assets/images/avatars/avatar.png">
<?php
}
?>

</div>

<div class="body">
<div class="time">
<i class="ace-icon fa fa-clock-o"></i>
<span class="blue"><?php echo date('d M Y h:i:s',strtotime($notifres['entry_dt']));?></span>
</div>

<div class="name">
<a href="#"><?php echo $notifres['business_nm'];?></a>
</div>
<div class="text">
<i class="ace-icon fa fa-comments red"></i>
<?php echo $notifres['comment'];?></div>


</div>
</div>

</div>
</div> 
</div>


</div> 

<?php
}
if($notifres['message']!="")
{
?>

<div class="widget-box" style="border:0px">
 <h5> Messages </h5> 
<div class="widget-body">
<div class="widget-main no-padding">
<div class="dialogs">


<div class="itemdiv dialogdiv">
<div class="user">
<?php
if($_SESSION['clubimg']!=''){
?>
<img  src="images/club_photo/<?php echo $_SESSION['clubimg'];?>" alt="Jason's Photo" height="41px"/>
<?php

}
else{
?>
<img alt="John's Avatar" src="assets/images/avatars/avatar.png">
<?php
}
?>

</div>

<div class="body">
<div class="time">
<i class="ace-icon fa fa-clock-o"></i>
<span class="blue"><?php echo date('d M Y h:i:s',strtotime($notifres['entry_dt']));?></span>
</div>

<div class="name">
<a href="#"><?php echo $notifres['business_nm'];?></a>
</div>
<div class="text">
<i class="ace-icon fa fa-envelope blue"></i>
<?php echo $notifres['message'];?></div>


</div>
</div>

</div>
</div> 
</div> 


</div>  
<?php
}
?>
<?php
}
?>

<?php
}

?>

</div>

</div>
</div>
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div>


<?php
include "include/footerb.php";
?>