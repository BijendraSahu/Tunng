<?php
include "include/header.php";
include "include/sidebar.php";
include 'controller/connection.php';

@$user_id=$_GET['id'];
$sqlc=  mysql_query("SELECT * FROM club Where clubID='$user_id' "); 
$sqlcresult=  mysql_fetch_array($sqlc);
@$emailidbus=$sqlcresult['user_emailid'];
$sqlcc=  mysql_query("SELECT * FROM club Where user_emailid='$emailidbus' "); 
$sqlccresult=  mysql_fetch_array($sqlcc);
$username=$_SESSION['username'];
$memberprofile=  mysql_query("select * from user_reg where user_name='$username'");
$memberprofiledetl= mysql_fetch_array($memberprofile);
                
?>


			<div class="main-content">
				<div class="main-content-inner">
                                    <!--//_____________________________-imojies_________________________-->

<script type="text/javascript">
$(document).ready(function(){
    
    $(".tab-content button").click(function(){
        var bid=this.id;
        var pval=$('#txtemoji').val();
        $("#imgtr").append("<img src='images/"+bid+".png' alt=''/>");
        
        $('#txtemoji').val(pval+" "+bid);
    });
    
});
</script>
<script type="text/javascript">
function load_as_lightboxemoji(){
        var DocumentHeight = $(document).height();
        $('.as_lightbox_wrapperemoji').css('height', DocumentHeight); // Set document height for As_Lightbox wrapper
    }
    function ShowLightBox(DivId){
        $('.as_lightbox_wrapperemoji').show(); // Show the wrapper
        $('#'+DivId+'').show('slow'); // Show the Lightbox div, you can use another jQuery view functions such as fadeIn, fadeToggle for animations
    }
    function HideLightBox(DivId){
        $('.as_lightbox_wrapperemoji').hide('slow'); // Hide the As_Lightbox wrapper
        $('#'+DivId+'').hide(); // Hide the div
    }
    $(document).ready(function(){
        
        $('#as_lightbox_closeemoji').click(function(){
            HideLightBox('Simple_Lightboxemoji'); // call the As_Lightbox close function
            return false;
        });
        $('#lbcloseemoji').click(function(){
            HideLightBox('Simple_Lightboxemoji'); // call the As_Lightbox close function
            return false;
        });
        $('#changeImageemoji').click(function(){
//           alert("hyhyyh");
           load_as_lightboxemoji();
            ShowLightBox('Simple_Lightboxemoji'); // call the As_Lightbox show function
            return false;
        });
       
    });
</script>

 <div class="as_lightbox_wrapperemoji"></div>
<div style=" background-color:#fff;" class="as_lightbox_containeremoji" id="Simple_Lightboxemoji">
     <div class="as_lightboxemoji">
        <div class="as_lightbox_closeemoji" id="as_lightbox_closeemoji">
            <img src="images/close_flat_icon.png" alt="Close Lightbox" title="Close" />
        </div>
        <div class="as_clearemoji"></div>
         <center>
         <div class="wrapemoji">
    <!-- image uploading form -->
    
      <div class="col-md-12">
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
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy2.png'); height: 100px; width:100px;  " type="button" id='happy2' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy3.png'); height: 100px; width:100px;  " type="button" id='happy3' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy4.png'); height: 100px; width:100px;  " type="button" id='happy4' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy5.png'); height: 100px; width:100px;  " type="button" id='happy5' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy6.png'); height: 100px; width:100px;  " type="button" id='happy6' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy7.png'); height: 100px; width:100px;  " type="button" id='happy7' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy8.png'); height: 100px; width:100px;  " type="button" id='happy8' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy9.png'); height: 100px; width:100px;  " type="button" id='happy9' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy10.png'); height: 100px; width:100px;  " type="button" id='happy10' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy11.png'); height: 100px; width:100px;  " type="button" id='happy11' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy12.png'); height: 100px; width:100px;  " type="button" id='happy12' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy13.png'); height: 100px; width:100px;  " type="button" id='happy13' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy14.png'); height: 100px; width:100px;  " type="button" id='happy14' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy1.png'); height: 100px; width:100px;  " type="button" id='happy1' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy16.png'); height: 100px; width:100px;  " type="button" id='happy16' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/happy16.png'); height: 100px; width:100px;  " type="button" id='happy16' alt="Close Lightbox" title="Close" ></button>
          
           </div>
        <div class="tab-pane stckrimg" id="Sad">
        
       <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad1.png'); height: 100px; width:100px;  " type="button" id='sad1' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad2.png'); height: 100px; width:100px;  " type="button" id='sad2' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad3.png'); height: 100px; width:100px;  " type="button" id='sad3' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad4.png'); height: 100px; width:100px;  " type="button" id='sad4' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad5.png'); height: 100px; width:100px;  " type="button" id='sad5' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad6.png'); height: 100px; width:100px;  " type="button" id='sad6' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad7.png'); height: 100px; width:100px;  " type="button" id='sad7' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad8.png'); height: 100px; width:100px;  " type="button" id='sad8' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad9.png'); height: 100px; width:100px;  " type="button" id='sad9' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad10.png'); height: 100px; width:100px;  " type="button" id='sad10' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad11.png'); height: 100px; width:100px;  " type="button" id='sad11' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn"  style=" background-repeat: no-repeat; background-image:url('images/sad12.png'); height: 100px; width:100px;  " type="button" id='sad12' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad13.png'); height: 100px; width:100px;  " type="button" id='sad13' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad14.png'); height: 100px; width:100px;  " type="button" id='sad14' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad15.png'); height: 100px; width:100px;  " type="button" id='sad15' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/sad16.png'); height: 100px; width:100px;  " type="button" id='sad16' alt="Close Lightbox" title="Close" ></button>
         </div>
              <div class="tab-pane stckrimg" id="In_Love">
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love1.png'); height: 100px; width:100px;  " type="button" id='love1' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love2.png'); height: 100px; width:100px;  " type="button" id='love2' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love3.png'); height: 100px; width:100px;  " type="button" id='love3' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love4.png'); height: 100px; width:100px;  " type="button" id='love4' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love5.png'); height: 100px; width:100px;  " type="button" id='love5' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love6.png'); height: 100px; width:100px;  " type="button" id='love6' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love7.png'); height: 100px; width:100px;  " type="button" id='love7' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love8.png'); height: 100px; width:100px;  " type="button" id='love8' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love9.png'); height: 100px; width:100px;  " type="button" id='love9' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love10.png'); height: 100px; width:100px;  " type="button" id='love10' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love11.png'); height: 100px; width:100px;  " type="button" id='love11' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love12.png'); height: 100px; width:100px;  " type="button" id='love12' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love13.png'); height: 100px; width:100px;  " type="button" id='love13' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love14.png'); height: 100px; width:100px;  " type="button" id='love14' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love15.png'); height: 100px; width:100px;  " type="button" id='love15' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/love16.png'); height: 100px; width:100px;  " type="button" id='love16' alt="Close Lightbox" title="Close" ></button>
         
              </div>
              <div class="tab-pane stckrimg" id="Angry">
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang1.png'); height: 100px; width:100px;  " type="button" id='ang1' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang2.png'); height: 100px; width:100px;  " type="button" id='ang2' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang3.png'); height: 100px; width:100px;  " type="button" id='ang3' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang4.png'); height: 100px; width:100px;  " type="button" id='ang4' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang5.png'); height: 100px; width:100px;  " type="button" id='ang5' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang6.png'); height: 100px; width:100px;  " type="button" id='ang6' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang7.png'); height: 100px; width:100px;  " type="button" id='ang7' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang8.png'); height: 100px; width:100px;  " type="button" id='ang8' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang9.png'); height: 100px; width:100px;  " type="button" id='ang9' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang10.png'); height: 100px; width:100px;  " type="button" id='ang10' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang11.png'); height: 100px; width:100px;  " type="button" id='ang11' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang12.png'); height: 100px; width:100px;  " type="button" id='ang12' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang13.png'); height: 100px; width:100px;  " type="button" id='ang13' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang14.png'); height: 100px; width:100px;  " type="button" id='ang14' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang15.png'); height: 100px; width:100px;  " type="button" id='ang15' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/ang16.png'); height: 100px; width:100px;  " type="button" id='ang16' alt="Close Lightbox" title="Close" ></button>
          
          </div>
          <div class="tab-pane stckrimg" id="Funny">
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun1.png'); height: 100px; width:100px;  " type="button" id='fun1' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun2.png'); height: 100px; width:100px;  " type="button" id='fun2' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun3.png'); height: 100px; width:100px;  " type="button" id='fun3' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun4.png'); height: 100px; width:100px;  " type="button" id='fun4' alt="Close Lightbox" title="Close" ></button>
          <button  class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun5.png'); height: 100px; width:100px;  " type="button" id='fun5' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun6.png'); height: 100px; width:100px;  " type="button" id='fun6' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun7.png'); height: 100px; width:100px;  " type="button" id='fun7' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun8.png'); height: 100px; width:100px;  " type="button" id='fun8' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun9.png'); height: 100px; width:100px;  " type="button" id='fun9' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun10.png'); height: 100px; width:100px;  " type="button" id='fun10' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun11.png'); height: 100px; width:100px;  " type="button" id='fun11' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun12.png'); height: 100px; width:100px;  " type="button" id='fun12' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun13.png'); height: 100px; width:100px;  " type="button" id='fun13' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun14.png'); height: 100px; width:100px;  " type="button" id='fun14' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun15.png'); height: 100px; width:100px;  " type="button" id='fun15' alt="Close Lightbox" title="Close" ></button>
          <button class="emojibtn" style=" background-repeat: no-repeat; background-image:url('images/fun16.png'); height: 100px; width:100px;  " type="button" id='fun16' alt="Close Lightbox" title="Close" ></button>
          
        </div>
        </div>
      </div> 
      
    
</div><!--wrap-->
</center>
 </div>
 </div>
    
<!--__________________________imojies_____________________________-->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li><!-- 
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a> -->
							</li>

							<li>
								<a href="dashboard.php">Search Business</a>
							</li>
							<li class="active">View All Products</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
					

						<div class="page-header">
							<h1>View All Products</h1>
						</div><!-- /.page-header -->
                                                <div class="row">
							<div class="col-xs-12">
							
									<div id="user-profile-2" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-comment bigger-120"></i>
														Send Comment
													</a>
												</li>
                                                                                                <li>
													<a data-toggle="tab" href="#pictures">
														<i class="pink ace-icon fa fa-envelope-o bigger-120"></i>
														 Send Message
													</a>
												</li>
											</ul>

											<div class="tab-content no-border padding-10">
												<div id="home" class="tab-pane in active">
													<div class="row">
														

                                    <div class="panel panel-default">
                                        <div class="panel-body" style="padding-bottom:0px">                
                                             <form accept-charset="UTF-8" action="controller/mbr-comment.php" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" id="business_email" name="business_email" value="<?php echo $emailidbus;?>"/>
                                                <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $sqlccresult['club_name'];?>"/>
                                                <input type="hidden" id="member_email" name="member_email" value="<?php echo $memberprofiledetl['email_id'];?>"/>
                                                <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id;?>"/>
                                                <textarea class="form-control counted" id="comment"  name="comment" placeholder="Type in your comment" rows="5" style="margin-bottom:10px;"></textarea>

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
                                                                        <!--      <iframe width="450" height="200" src="http://www.youtube.com/embed/kfVsfOSbJY0?wmode=opaque" frameborder="0"></iframe>-->
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

                                                                            
                                                                                                        </div><!-- /.row -->
									
												</div><!-- /#home -->
									                   <div id="pictures" class="tab-pane">
														<div class="row">
														
		
                                            <div class="panel panel-default">
                                                <div class="panel-body">                
                                             <form accept-charset="UTF-8" action="controller/mbr-message.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" id="business_email" name="business_email" value="<?php echo $emailidbus;?>"/>
                                    <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $sqlccresult['club_name'];?>"/>
                                      <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id;?>"/>
                                    <input type="hidden" id="member_email" name="member_email" value="<?php echo $memberprofiledetl['email_id'];?>"/>
                                                        <textarea class="form-control counted" id="message" name="message" placeholder="Type in your message" rows="5" style="margin-bottom:10px;"></textarea>
                                        <input type="hidden" id='txtemoji' name="txtemoji"/>
                                                        <button class="btn btn-info btn-sm" type="submit">Post</button>
                                                    </form>
                                                </div>
                                            </div>

                                    
                                                                </div><!-- /.row -->
                          </div><!-- /#pictures -->
											</div>
										</div>
									</div>
								

						

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
                                                
						<div class="row">
							<div class="col-xs-12">
								
								
								<div>
									<div class="row search-page" id="search-page-1">
                      
                      <div class="col-xs-12">
											<div class="row">
																				
											<?php
                                                                                        @ $emailidbus=$sqlcresult['user_emailid'];;
      @ $searchtxt=$_GET['searchtxt'];
      if($searchtxt=="")
      {
          
          $sql=  mysql_query("SELECT * FROM add_product_business Where emailid='$emailidbus'  ORDER BY entry_dt DESC "); 
       
      }
 else {
           $sql=  mysql_query("SELECT * FROM add_product_business Where  subcategory LIKE '%$searchtxt%' and emailid='$emailidbus' ORDER BY entry_dt DESC "); 
       
        }
      
    
     while ($sqlresult= mysql_fetch_array($sql)) 
     {
         ?>                 <link rel="stylesheet" type="text/css" href="css/mynewstyle.css">
														<div class="col-xs-12 col-sm-4 col-md-3">
														<div class="thumbnail search-thumbnail" onmouseenter="this.style.border='1px solid orange'" onmouseleave="this.style.border='1px solid #DDDDDD'">
                              <p class="onribbon_price" style="transform:rotate(-45deg);border:0px solid black;position: absolute;z-index:1;top:12px;font-width:bold !important;"><?php echo "$ ".$sqlresult['price'];?></p>
                            <img src="images/corner_ribbon.png" style="transform: rotate(0deg);position:absolute;width:90px;height:90px;left:5px;top:-7px">
                                
																<span class="search-promotion label label-success arrowed-in arrowed-in-right"><?php //echo $sqlresult['category'];?></span>

																<img class="media-object productimg" src="images/businessimg/<?php echo $sqlresult['product_imgone'];?>"/>
																<div class="caption">
																	<div class="clearfix">
																		<span class="pull-right label label-grey info-label"><?php echo $sqlresult['cities'];?></span>

																		<div class="pull-left bigger-110">
																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star-half-o orange2"></i>

																			<i class="ace-icon fa fa-star light-grey"></i>
																		</div>
</div>
<center>
<h3 class="search-title">
																		<p class="blue search-titlee">  <?php echo (strlen($sqlresult['subcategory']) > 14) ? substr($sqlresult['subcategory'],0,14).' . . .' : $sqlresult['subcategory'];?></p>
                                                                                                                                              
														
																	</h3>
																	<p class="product-price"><?php //echo $sqlresult['price'];?></p>
                                                                                                                          															
  <a href="viewproductdetails-member.php?srno=<?php echo $sqlresult['srno'];?> " class="btn btn-primary right btn-sm" >Buy now </a>
</center>
  </div>
															</div>
														</div>

						<?php
     }
     ?>
													
											</div>
										</div>
									</div>
								</div>

							

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

              <?php
                include "include/footer.php";
              ?>
				</div>
			</div><!-- /.main-content -->

