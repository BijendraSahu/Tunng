<?php
include "include/header_external.php";
include "include/sidebar_bus.php";


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

<h3 class="blue" align="center"> Product Details </h3>
<div class="hr hr-24"></div>

<!-- <div class="media search-media"> -->
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
</a>
</div>
   
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
<h5> <?php echo $sqlresult['detaildiscription'];?> </h5>





</div>
</div>
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
    </div>
 </center>


<script async src="//static.addtoany.com/menu/page.js"></script>
</div>
<!-- </div> -->


</div>
</div><!-- /.row -->
<!-- </div> -->






</div>
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div>


<?php
include "include/footerb.php";
?>