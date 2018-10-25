<?php
include "include/header_bus.php";
include "include/sidebar_bus.php";
include 'controller/connection.php';
?>

<div class="main-content">
<div class="main-content-inner">

<script type="text/javascript">

function load_as_lightboxemoji()
{
var DocumentHeight = $(document).height();
$('.as_lightbox_wrapperemoji').css('height', DocumentHeight); // Set document height for As_Lightbox wrapper
}
function ShowLightBox(DivId)
{
$('.as_lightbox_wrapperemoji').show(); // Show the wrapper
$('#'+DivId+'').show(); // Show the Lightbox div, you can use another jQuery view functions such as fadeIn, fadeToggle for animations
}
function HideLightBox(DivId)
{
$('.as_lightbox_wrapperemoji').hide(); // Hide the As_Lightbox wrapper
$('#'+DivId+'').hide(); // Hide the div
}
$(document).ready(function()
{

$('#as_lightbox_closeemoji').click(function()
{
HideLightBox('Simple_Lightboxemoji'); // call the As_Lightbox close function
return false;
});
$('#lbcloseemoji').click(function()
{
HideLightBox('Simple_Lightboxemoji'); // call the As_Lightbox close function
return false;
});
$('#changeImageemoji').click(function()
{
load_as_lightboxemoji();
ShowLightBox('Simple_Lightboxemoji'); // call the As_Lightbox show function
return false;
});

});
function checkvalue()
{
if(document.getElementById('searchtxt').value=='')
{
return false;
}
}
</script>
<script>
$(document).ready(function(){

$(".tab-content button").click(function(){
var bid=this.id;
var pval=$('#txtemoji').val();
$("#imgtr").append("<img src='images/"+bid+".png' alt='Close Lightbox'  />");

$('#txtemoji').val(pval+" "+bid);
});

});
</script>  

<div class="as_lightbox_wrapperemoji"></div>
<div style="/*width:500px; */background-color: #fff;" class="as_lightbox_containeremoji" id="Simple_Lightboxemoji">
<div class="as_lightboxemoji">
<div class="as_lightbox_closeemoji" id="as_lightbox_closeemoji">
<img src="images/close_flat_icon.png" alt="Close Lightbox" title="Close" />
</div>
<div class="as_clearemoji"></div>
<center>
<div class="wrapemoji">
<!-- image uploading form -->

<div class="col-xs-12 col-md-12">
<div class="span12">
<p class="lead"></p>
<div id="tab" class="btn-group" data-toggle="buttons-radio">
<a href="#Happy" class="emgbtn" data-toggle="tab">Happy</a>
<a href="#Sad" class="emgbtn" data-toggle="tab">Sad</a>
<a href="#In_Love" class="emgbtn" data-toggle="tab"> Love</a>
<a href="#Angry" class="emgbtn"  data-toggle="tab">Angry</a>
<a href="#Funny" class="emgbtn"  data-toggle="tab">Funny</a>

</div>

<div class="tab-content" style="border:0px;">
<div class="tab-pane stckrimg" id="Happy">
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy2.png'); height: 100px; width:100px;  " type="button" id='happy2' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy3.png'); height: 100px; width:100px;  " type="button" id='happy3' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy4.png'); height: 100px; width:100px;  " type="button" id='happy4' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy5.png'); height: 100px; width:100px;  " type="button" id='happy5' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy6.png'); height: 100px; width:100px;  " type="button" id='happy6' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy7.png'); height: 100px; width:100px;  " type="button" id='happy7' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy8.png'); height: 100px; width:100px;  " type="button" id='happy8' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy9.png'); height: 100px; width:100px;  " type="button" id='happy9' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy10.png'); height: 100px; width:100px;  " type="button" id='happy10' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy11.png'); height: 100px; width:100px;  " type="button" id='happy11' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy12.png'); height: 100px; width:100px;  " type="button" id='happy12' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy13.png'); height: 100px; width:100px;  " type="button" id='happy13' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy14.png'); height: 100px; width:100px;  " type="button" id='happy14' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy1.png'); height: 100px; width:100px;  " type="button" id='happy1' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy16.png'); height: 100px; width:100px;  " type="button" id='happy16' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/happy16.png'); height: 100px; width:100px;  " type="button" id='happy16' alt="Close Lightbox" title="Close" ></button>

</div>
<div class="tab-pane stckrimg" id="Sad">

<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad1.png'); height: 100px; width:100px;  " type="button" id='sad1' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad2.png'); height: 100px; width:100px;  " type="button" id='sad2' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad3.png'); height: 100px; width:100px;  " type="button" id='sad3' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad4.png'); height: 100px; width:100px;  " type="button" id='sad4' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad5.png'); height: 100px; width:100px;  " type="button" id='sad5' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad6.png'); height: 100px; width:100px;  " type="button" id='sad6' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad7.png'); height: 100px; width:100px;  " type="button" id='sad7' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad8.png'); height: 100px; width:100px;  " type="button" id='sad8' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad9.png'); height: 100px; width:100px;  " type="button" id='sad9' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad10.png'); height: 100px; width:100px;  " type="button" id='sad10' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad11.png'); height: 100px; width:100px;  " type="button" id='sad11' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad12.png'); height: 100px; width:100px;  " type="button" id='sad12' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad13.png'); height: 100px; width:100px;  " type="button" id='sad13' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad14.png'); height: 100px; width:100px;  " type="button" id='sad14' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad15.png'); height: 100px; width:100px;  " type="button" id='sad15' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/sad16.png'); height: 100px; width:100px;  " type="button" id='sad16' alt="Close Lightbox" title="Close" ></button>
</div>
<div class="tab-pane stckrimg" id="In_Love">
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love1.png'); height: 100px; width:100px;  " type="button" id='love1' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love2.png'); height: 100px; width:100px;  " type="button" id='love2' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love3.png'); height: 100px; width:100px;  " type="button" id='love3' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love4.png'); height: 100px; width:100px;  " type="button" id='love4' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love5.png'); height: 100px; width:100px;  " type="button" id='love5' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love6.png'); height: 100px; width:100px;  " type="button" id='love6' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love7.png'); height: 100px; width:100px;  " type="button" id='love7' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love8.png'); height: 100px; width:100px;  " type="button" id='love8' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love9.png'); height: 100px; width:100px;  " type="button" id='love9' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love10.png'); height: 100px; width:100px;  " type="button" id='love10' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love11.png'); height: 100px; width:100px;  " type="button" id='love11' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love12.png'); height: 100px; width:100px;  " type="button" id='love12' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love13.png'); height: 100px; width:100px;  " type="button" id='love13' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love14.png'); height: 100px; width:100px;  " type="button" id='love14' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love15.png'); height: 100px; width:100px;  " type="button" id='love15' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/love16.png'); height: 100px; width:100px;  " type="button" id='love16' alt="Close Lightbox" title="Close" ></button>

</div>
<div class="tab-pane stckrimg" id="Angry">
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang1.png'); height: 100px; width:100px;  " type="button" id='ang1' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang2.png'); height: 100px; width:100px;  " type="button" id='ang2' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang3.png'); height: 100px; width:100px;  " type="button" id='ang3' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang4.png'); height: 100px; width:100px;  " type="button" id='ang4' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang5.png'); height: 100px; width:100px;  " type="button" id='ang5' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang6.png'); height: 100px; width:100px;  " type="button" id='ang6' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang7.png'); height: 100px; width:100px;  " type="button" id='ang7' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang8.png'); height: 100px; width:100px;  " type="button" id='ang8' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang9.png'); height: 100px; width:100px;  " type="button" id='ang9' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang10.png'); height: 100px; width:100px;  " type="button" id='ang10' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang11.png'); height: 100px; width:100px;  " type="button" id='ang11' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang12.png'); height: 100px; width:100px;  " type="button" id='ang12' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang13.png'); height: 100px; width:100px;  " type="button" id='ang13' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang14.png'); height: 100px; width:100px;  " type="button" id='ang14' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang15.png'); height: 100px; width:100px;  " type="button" id='ang15' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/ang16.png'); height: 100px; width:100px;  " type="button" id='ang16' alt="Close Lightbox" title="Close" ></button>

</div>
<div class="tab-pane stckrimg" id="Funny">
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun1.png'); height: 100px; width:100px;  " type="button" id='fun1' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun2.png'); height: 100px; width:100px;  " type="button" id='fun2' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun3.png'); height: 100px; width:100px;  " type="button" id='fun3' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun4.png'); height: 100px; width:100px;  " type="button" id='fun4' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun5.png'); height: 100px; width:100px;  " type="button" id='fun5' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun6.png'); height: 100px; width:100px;  " type="button" id='fun6' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun7.png'); height: 100px; width:100px;  " type="button" id='fun7' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun8.png'); height: 100px; width:100px;  " type="button" id='fun8' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun9.png'); height: 100px; width:100px;  " type="button" id='fun9' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun10.png'); height: 100px; width:100px;  " type="button" id='fun10' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun11.png'); height: 100px; width:100px;  " type="button" id='fun11' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun12.png'); height: 100px; width:100px;  " type="button" id='fun12' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun13.png'); height: 100px; width:100px;  " type="button" id='fun13' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun14.png'); height: 100px; width:100px;  " type="button" id='fun14' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun15.png'); height: 100px; width:100px;  " type="button" id='fun15' alt="Close Lightbox" title="Close" ></button>
<button  class="emojibtn" style="background-repeat: no-repeat; background-image:url('images/fun16.png'); height: 100px; width:100px;  " type="button" id='fun16' alt="Close Lightbox" title="Close" ></button>

</div>
</div>
</div> 


</div><!--wrap-->
</center>

</div>
</div>

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
<ul class="breadcrumb">
<li>
<!-- <i class="ace-icon fa fa-home home-icon"></i> -->
<!-- <a href="#">Home</a>
</li>
<li class="active">Dashboard</li> -->
<li class="active">
<a href="clubdashboard.php">Timeline</a></li>
</ul>

<div class="nav-search" id="nav-search">
<form method="GET" action="searchresult.php" class="form-search" id="search_user" name="search_user" onsubmit="return checkvalue();">

<span class="input-icon">
<input type="text" placeholder="Search ..." class="nav-search-input" id="searchtxt" name="searchtxt" autocomplete="off" />
<i class="ace-icon fa fa-search nav-search-icon"></i>
</span>
</form>
</div>
</div>

<?php

$product=  mysql_query("SELECT * FROM pramotion order by entry_dt DESC");

?>

<marquee onmouseover="this.stop();" onmouseout="this.start();" style="text-transform:capitalize ;color:white;">
<span style="position: relative;vertical-align: middle; color:blue;font-size: 18px; font-weight: normal;">Promotion -</span>                  
<?php
while($productres=mysql_fetch_array($product))
{
?>

<span style="font-size: 16px;  vertical-align: middle;position: relative;font-weight: bold;color:black;"><?php echo (strlen($productres['businessnm']) > 15) ? substr($productres['businessnm'],0,15).' . . .' : $productres['businessnm'];?>-<?php echo (strlen($productres['productname']) > 15) ? substr($productres['productname'],0,15).' . . .' : $productres['productname'];?></span><span style="font-size: 16px;font-weight: normal; vertical-align: middle;color:black;"> <?php echo $productres['price'];?>&nbsp;|</span>
<!--$productres['subcategory']."&nbsp;".-->
<span style="position: relative;"></span>&nbsp;


<?php
//                echo $productres['price'];
}
?>
</marquee>

<div class="page-content">

<div class="page-header">
<h1>
<a href="#">Timeline</a>
</h1>
</div><!-- /.page-header -->

<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->


<div class="row">
<div class="col-xs-12 col-sm-12">
<div class="widget-box">
<!-- <div class="widget-header">
<h4 class="widget-title">Text Area</h4>

<div class="widget-toolbar">
<a href="#" data-action="collapse">
<i class="ace-icon fa fa-chevron-up"></i>
</a>

<a href="#" data-action="close">
<i class="ace-icon fa fa-times"></i>
</a>
</div>
</div> -->

<div class="widget-body">
<div class="widget-main">
<form accept-charset="UTF-8" action="controller/club-timeline-post.php" method="POST" enctype="multipart/form-data">
<div>
<label for="form-field-8">Type your subject</label>

<textarea class="form-control" rows="1" name="subject" id="subject" placeholder="Type your subject" maxlength="35"></textarea>
</div>
<br>
<div>
<label for="form-field-9">Type in your message</label>

<textarea class="form-control" rows="5" placeholder="Type in your message" name="message" id="message" maxlength=""></textarea>
</div>
      <input type="hidden" id='txtemoji' name="txtemoji"/>
<hr>

<!-- POST BUTTON -->
<button type="submit" class="btn btn-sm btn-primary">
Post 
</button>
<!-- Camera button -->
<a data-toggle="collapse" data-parent="#accordion" href="#collapseone">
<button type="button" class="btn btn-sm btn-primary" title="Post image"><i class="fa fa-camera" aria-hidden="true"></i></button>
</a>
<!-- Video button -->
<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
<button type="button" class="btn btn-sm btn-primary" title="Post video"><i class="fa fa-video-camera" aria-hidden="true"></i></button>
</a>
<!-- file button -->
<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
<button type="button" class="btn btn-sm btn-primary" title="Post file"><i class="fa fa-file" aria-hidden="true"></i></button>
</a>
<!-- emoji button -->

<button type="button" id="changeImageemoji" class="btn btn-sm btn-primary" title="Post file"><i class="fa fa-smile-o" aria-hidden="true"></i></button>
<k id='imgtr'></k>
   <div class="panel-group" id="accordion">
<div id="collapseone" class="panel-collapse collapse">
<div class="panel-body">
  <h3 class="lead">Upload Image</h3>

<input type="file" name="fileuploadimg" id="fileuploadimg"> <br/>
<div class="row">
      <div class="col-xs-12 text-center">
      </div>
 </div>
</div>
</div>
<div id="collapseTwo" class="panel-collapse collapse">
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
<div id="collapseThree" class="panel-collapse collapse">
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
  
</form>
</div>
</div>
</div>
</div>

<!-- Conversation posts -->

<div class="col-sm-12">
<div class="widget-box">
<!-- <div class="widget-header">
<h4 class="widget-title lighter smaller">
<i class="ace-icon fa fa-comment blue"></i>
Conversation
</h4>
</div> -->

<div class="widget-body">
<div class="widget-main no-padding">
<div class="dialogs">
<!-- styling -->
<style>
ul.comtopmar {border:0px solid black;margin-top:-15px}
.userresponce {border:0px solid black;margin-top: -15px}
a:hover {text-decoration: none;}
.rehover:hover {background-image: url(images/replyhover.png);}
</style>
          
          
                         <?php
             
              $clubname=$_SESSION['clubname'];
              $username=$_SESSION['username'];
              $post=mysql_query("Select cp.user_name,cp.post,cp.post_image,cp.entry_dt,cb.club_image,cp.emoji,cp.post_video,cp.srno,cp.comment,cp.commented_user_name,cp.member_post_img,cp.member_post_video,cp.post_doc,cp.subject from club_post cp,club cb where cp.user_name=cb.user_login_id and cp.club_name='$clubname' and comment=0 ORDER BY cp.entry_dt desc");
              while ($postdetl= mysql_fetch_array($post))
              {
              ?>
<div class="itemdiv dialogdiv">
<div class="user">
              <?php
                  if($postdetl[4]!='')
                  {
                      ?>
                 <img src="images/club_photo/<?php echo $postdetl[4];?>"  height="41px">
                  <?php
                  }
                  else {
                      ?>
                          <img alt="John's Avatar" src="assets/images/avatars/avatar.png" />
                     <?php
                       }
                  ?>

</div>

<div class="body">
<div class="time">
<i class="ace-icon fa fa-clock-o"></i>
<span class="blue"><?php echo date( 'd M Y h:i:s',strtotime($postdetl[3]));?></span>
</div>
                            <?php
       $sqlcl=  mysql_query("Select * from club_post where srno=$postdetl[7]");
        $tlikarr=mysql_fetch_array($sqlcl);
        ?>
                          
                         
                   
<div class="name">
<a href="#" style="text-transform: uppercase;"><?php echo $postdetl[0];?></a>
                           <span id="like" class="stat-item likebtn" style="margin-left:40px;color:#800080">
        <i class='fa fa-thumbs-up' aria-hidden='true'></i>&nbsp;<?php  echo $tlikarr['like'];?></span>
</div>
                <?php
              if($postdetl[13]=='')
              {
                  ?>
               <p>Subject -&nbsp;&nbsp;no subject</p>
              <?php
              }  else {
                  ?>
              <p>Subject -&nbsp;&nbsp;<?php echo $postdetl[13];?></p>
              <?php
              }
              ?>
              
<div class="qa-message-content text"><?php echo $postdetl[1];?></div>
                   <?php
               if($postdetl[5]!='')
               {
                      $emojis= $postdetl[5];
                      $arr=@split(" ",$emojis); 

                      for($i=1;$i<sizeof($arr);$i++)
                      {
                      $emojiimg=$arr[$i];

                      ?>
                       <img src="images/<?php  echo $emojiimg.'.png';?>" style="height: 80px;width: 80px;"/><br/>
                      <?php
                      }
               }
                  ?>

          <?php
          if($postdetl[2]!='')
          {
             ?>
          <div class="asset video">

          <img src="images/club_post_images/<?php echo $postdetl[2];?>" style="max-width:220px;" alt="image load error" class="thumbnail"/><br/>

               </div>

          <?php
          }
            ?> 
                <?php  
                  if($postdetl[6]!='')
         {
              ?> 
                  <br/><br/>
           <div class="asset video">
               <!--dfs<a href="assets/img/club_post_videos/<?php echo $postdetl[6];?>" target="_self">Link</a>-->
          <!--<img src="assets/img/club_post_videos/<?php //echo $postdetl[2];?>" style="height: 150px;width: 180px;"/>-->
               <iframe height="100%" width="100%"  src="images/club_post_videos/<?php echo $postdetl[6];?>" frameborder="0"></iframe>

               </div>
                 <?php
          } 
          ?>
                  <?php  
                  if($postdetl[12]!='')
         {

              ?>

                  <br/><br/>
                  <div class="asset video" style="border:1px solid silver;padding:5px;width:100px;">
                  	<div  style="border:0px solid black;padding:5px;" class="search-filter-header bg-primary">
                      <p class="fa fa-file-text fa-2x"></p> 

                <?php
              $str = $postdetl[12];
              $res = explode(".", $str);
               echo".". $res[1];
               ?> File
           </div>
              <a  href="assets/img/club_post_doc/<?php echo $postdetl[12];?>" target="_self"> Download</a>

               </div>


                 <?php
          } 
          ?>


                                    <?php
            $commentid= $postdetl['srno'];
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
       <img src="images/member_photo/<?php echo $mbrimgdetl['member_photo'];?>"  style="height:41px;"/>
        <?php
          }
          else {
          ?>
          <img alt="John's Avatar" src="assets/images/avatars/avatar.png" />
              <?php
               }
              ?>

</div>

<div class="body">
<div class="time">
<i class="ace-icon fa fa-clock-o"></i>
<span class="blue"><?php echo date( 'd M Y h:i:s',strtotime($viewcbcmtdetl['entry_dt']));?></span>
</div>

<div class="name">
<a href="#"><?php echo $viewcbcmtdetl['commented_user_name'];?></a>
</div>
                           <?php  
                              if($viewcbcmtdetl['post']!='')
                     {
                          ?> 
                              <div  class="fa fa-comments text">&nbsp;&nbsp;<?php echo $viewcbcmtdetl['post'];?></div>
                    
                                                                                                          <?php
                      } 
                      ?>       
       <?php  
                              if($viewcbcmtdetl['member_post_img']!='')
                     {
                          ?> 
                              <br/><br/>
                       <div class="asset video">

                      <!--<img src="assets/img/club_post_videos/<?php //echo $postdetl[2];?>" style="height: 150px;width: 180px;"/>-->
                           <img  width="220px"  src="assets/img/member_post_images/<?php echo $viewcbcmtdetl['member_post_img'];?>" frameborder="0" alt="image load error" class="thumbnail">

                           </div>
                             <?php
                      } 
                      ?>
                                <?php  
                              if($viewcbcmtdetl['member_post_video']!='')
                     {
                          ?> 
                              <br/><br/>
                       <div class="asset video">

                      <!--<img src="assets/img/club_post_videos/<?php //echo $postdetl[2];?>" style="height: 150px;width: 180px;"/>-->
                           <iframe height="100%" width="100%"  src="assets/img/member_post_videos/<?php echo $viewcbcmtdetl['member_post_video'];?>" frameborder="0"></iframe>

                           </div>
                             <?php
                      } 
                      ?>
                              <?php  
                              if($viewcbcmtdetl['member_post_doc']!='')
                     {
                          ?> 
                       

                              <div class="asset video" style="border:1px solid silver;padding:5px;width:100px;">
                              <div  style="border:0px solid black;padding:5px;" class="search-filter-header bg-primary">
                                  <p class="fa fa-file-text fa-2x"></p> 

                                <?php
                                $str = $viewcbcmtdetl['member_post_doc'];
                                $res = explode(".", $str);
                                echo".". $res[1];
                                ?> File
                              </div>


                          <a  href="assets/img/club_post_doc/<?php echo $viewcbcmtdetl['member_post_doc'];?>" target="_self"> Download</a>

                           </div>
                             <?php
                      } 
                      ?>

</div>
</div>
                  <?php
              }
              ?>
                  
                  
</div>
</div>
          <?php
              }
              ?>

<!-- i leave it just if you neeed only comment | if you dont't want so above design you can use... -->


</div>
</div><!-- /.widget-main -->
</div><!-- /.widget-body -->
</div><!-- /.widget-box -->
</div>
</div>
<!-- /.row -->

<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
<?php
include "include/footerb.php";
?>
</div><!-- /.page-content -->

</div>

</div><!-- /.main-content -->

