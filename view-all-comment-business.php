<?php
include "include/header.php";
include "include/sidebar.php";
include 'controller/connection.php';
@$user_id=$_GET['id'];
$sqlc=  mysql_query("SELECT * FROM club Where clubID='$user_id' "); 
$sqlcresult=  mysql_fetch_array($sqlc);
$businesemail=$sqlcresult['user_emailid'];
 
 $noti=  mysql_query("SELECT * from  comment_message where business_emailid ='$businesemail' order by entry_dt DESC");
 $numrow=  mysql_num_rows($noti);

 
 $sqlcc=  mysql_query("SELECT * FROM club Where user_emailid='$businesemail' "); 
 $sqlccresult=  mysql_fetch_array($sqlcc); 
 $username=$_SESSION['username'];
$memberprofile=  mysql_query("select * from user_reg where user_name='$username'");
$memberdetl= mysql_fetch_array($memberprofile);
 $memberdetl
?>

			<div class="main-content">
                            
				<div class="main-content-inner" style="">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<!-- <i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a> -->
							</li>

							<li>
								<a href="#">Search Business</a>
							</li>
							<li class="active">View All Comment</li>
						</ul><!-- /.breadcrumb -->

<!--						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div> /.nav-search -->
					</div>
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
           load_as_lightboxemoji();
            ShowLightBox('Simple_Lightboxemoji'); // call the As_Lightbox show function
            return false;
        });
       
    });
</script>
 <div class="as_lightbox_wrapperemoji"></div>
<div style="width:500px; background-color: #fff;" class="as_lightbox_containeremoji" id="Simple_Lightboxemoji">
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
            <a href="#Happy" class="btn btn-info" data-toggle="tab">Happy</a>
            <a href="#Sad" class="btn btn-info" data-toggle="tab">Sad</a>
            <a href="#In_Love" class="btn btn-info" data-toggle="tab"> Love</a>
            <a href="#Angry" class="btn btn-info"  data-toggle="tab">Angry</a>
            <a href="#Funny" class="btn btn-info"  data-toggle="tab">Funny</a>
           
        </div>
             
        <div class="tab-content" style="border:0px;">
        <div class="tab-pane stckrimg" id="Happy">
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy2.png'); height: 100px; width:100px;  " type="button" id='happy2' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy3.png'); height: 100px; width:100px;  " type="button" id='happy3' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy4.png'); height: 100px; width:100px;  " type="button" id='happy4' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy5.png'); height: 100px; width:100px;  " type="button" id='happy5' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy6.png'); height: 100px; width:100px;  " type="button" id='happy6' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy7.png'); height: 100px; width:100px;  " type="button" id='happy7' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy8.png'); height: 100px; width:100px;  " type="button" id='happy8' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy9.png'); height: 100px; width:100px;  " type="button" id='happy9' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy10.png'); height: 100px; width:100px;  " type="button" id='happy10' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy11.png'); height: 100px; width:100px;  " type="button" id='happy11' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy12.png'); height: 100px; width:100px;  " type="button" id='happy12' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy13.png'); height: 100px; width:100px;  " type="button" id='happy13' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy14.png'); height: 100px; width:100px;  " type="button" id='happy14' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy1.png'); height: 100px; width:100px;  " type="button" id='happy1' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy16.png'); height: 100px; width:100px;  " type="button" id='happy16' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/happy16.png'); height: 100px; width:100px;  " type="button" id='happy16' alt="Close Lightbox" title="Close" ></button>
          
           </div>
        <div class="tab-pane stckrimg" id="Sad">
        
       <button  style=" background-repeat: no-repeat; background-image:url('images/sad1.png'); height: 100px; width:100px;  " type="button" id='sad1' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad2.png'); height: 100px; width:100px;  " type="button" id='sad2' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad3.png'); height: 100px; width:100px;  " type="button" id='sad3' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad4.png'); height: 100px; width:100px;  " type="button" id='sad4' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad5.png'); height: 100px; width:100px;  " type="button" id='sad5' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad6.png'); height: 100px; width:100px;  " type="button" id='sad6' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad7.png'); height: 100px; width:100px;  " type="button" id='sad7' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad8.png'); height: 100px; width:100px;  " type="button" id='sad8' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad9.png'); height: 100px; width:100px;  " type="button" id='sad9' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad10.png'); height: 100px; width:100px;  " type="button" id='sad10' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad11.png'); height: 100px; width:100px;  " type="button" id='sad11' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad12.png'); height: 100px; width:100px;  " type="button" id='sad12' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad13.png'); height: 100px; width:100px;  " type="button" id='sad13' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad14.png'); height: 100px; width:100px;  " type="button" id='sad14' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad15.png'); height: 100px; width:100px;  " type="button" id='sad15' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/sad16.png'); height: 100px; width:100px;  " type="button" id='sad16' alt="Close Lightbox" title="Close" ></button>
         </div>
              <div class="tab-pane stckrimg" id="In_Love">
          <button  style=" background-repeat: no-repeat; background-image:url('images/love1.png'); height: 100px; width:100px;  " type="button" id='love1' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love2.png'); height: 100px; width:100px;  " type="button" id='love2' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love3.png'); height: 100px; width:100px;  " type="button" id='love3' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love4.png'); height: 100px; width:100px;  " type="button" id='love4' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love5.png'); height: 100px; width:100px;  " type="button" id='love5' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love6.png'); height: 100px; width:100px;  " type="button" id='love6' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love7.png'); height: 100px; width:100px;  " type="button" id='love7' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love8.png'); height: 100px; width:100px;  " type="button" id='love8' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love9.png'); height: 100px; width:100px;  " type="button" id='love9' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love10.png'); height: 100px; width:100px;  " type="button" id='love10' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love11.png'); height: 100px; width:100px;  " type="button" id='love11' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love12.png'); height: 100px; width:100px;  " type="button" id='love12' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love13.png'); height: 100px; width:100px;  " type="button" id='love13' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love14.png'); height: 100px; width:100px;  " type="button" id='love14' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love15.png'); height: 100px; width:100px;  " type="button" id='love15' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/love16.png'); height: 100px; width:100px;  " type="button" id='love16' alt="Close Lightbox" title="Close" ></button>
         
              </div>
              <div class="tab-pane stckrimg" id="Angry">
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang1.png'); height: 100px; width:100px;  " type="button" id='ang1' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang2.png'); height: 100px; width:100px;  " type="button" id='ang2' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang3.png'); height: 100px; width:100px;  " type="button" id='ang3' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang4.png'); height: 100px; width:100px;  " type="button" id='ang4' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang5.png'); height: 100px; width:100px;  " type="button" id='ang5' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang6.png'); height: 100px; width:100px;  " type="button" id='ang6' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang7.png'); height: 100px; width:100px;  " type="button" id='ang7' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang8.png'); height: 100px; width:100px;  " type="button" id='ang8' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang9.png'); height: 100px; width:100px;  " type="button" id='ang9' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang10.png'); height: 100px; width:100px;  " type="button" id='ang10' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang11.png'); height: 100px; width:100px;  " type="button" id='ang11' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang12.png'); height: 100px; width:100px;  " type="button" id='ang12' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang13.png'); height: 100px; width:100px;  " type="button" id='ang13' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang14.png'); height: 100px; width:100px;  " type="button" id='ang14' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang15.png'); height: 100px; width:100px;  " type="button" id='ang15' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/ang16.png'); height: 100px; width:100px;  " type="button" id='ang16' alt="Close Lightbox" title="Close" ></button>
          
          </div>
          <div class="tab-pane stckrimg" id="Funny">
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun1.png'); height: 100px; width:100px;  " type="button" id='fun1' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun2.png'); height: 100px; width:100px;  " type="button" id='fun2' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun3.png'); height: 100px; width:100px;  " type="button" id='fun3' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun4.png'); height: 100px; width:100px;  " type="button" id='fun4' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun5.png'); height: 100px; width:100px;  " type="button" id='fun5' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun6.png'); height: 100px; width:100px;  " type="button" id='fun6' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun7.png'); height: 100px; width:100px;  " type="button" id='fun7' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun8.png'); height: 100px; width:100px;  " type="button" id='fun8' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun9.png'); height: 100px; width:100px;  " type="button" id='fun9' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun10.png'); height: 100px; width:100px;  " type="button" id='fun10' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun11.png'); height: 100px; width:100px;  " type="button" id='fun11' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun12.png'); height: 100px; width:100px;  " type="button" id='fun12' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun13.png'); height: 100px; width:100px;  " type="button" id='fun13' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun14.png'); height: 100px; width:100px;  " type="button" id='fun14' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun15.png'); height: 100px; width:100px;  " type="button" id='fun15' alt="Close Lightbox" title="Close" ></button>
          <button  style=" background-repeat: no-repeat; background-image:url('images/fun16.png'); height: 100px; width:100px;  " type="button" id='fun16' alt="Close Lightbox" title="Close" ></button>
          
        </div>
        </div>
      </div> 
      
    
</div><!--wrap-->
</center>
 </div>
 </div>
    
					<div class="page-content">
						

						<div class="page-header">
							<h1>Comments </h1>
						</div><!-- /.page-header -->

                    <div class="row"> 
                                 <div class="panel panel-default">
                                        <h4 class="cmt-bussheadding">Comments For Business</h4>	
                                        <div class="panel-body">                
                                   <form accept-charset="UTF-8" action="controller/mbr-comment-viewall-comment.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" id="business_email" name="business_email" value="<?php echo $businesemail;?>"/>
                                    <input type="hidden" id="club_id" name="club_id" value="<?php echo $user_id;?>"/>
                                    <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $sqlccresult['club_name'];?>"/>
                                    <input type="hidden" id="member_email" name="member_email" value="<?php echo $memberdetl['email_id'];?>"/>


                                                <textarea class="form-control counted"  name="comment" id="comment" placeholder="Type in your comment" rows="5" style="margin-bottom:10px;"></textarea>
                                                    <input type="hidden" id='txtemoji' name="txtemoji"/>
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
															<button type="button" class="btn btn-sm btn-primary" id="changeImageemoji" title="Post file"><i class="fa fa-smile-o" aria-hidden="true"></i></button>
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
                                                             <div class="row" style="height:auto;">
        <center><h2  style="font-family: Calisto MT;color: #0573CB;">Comments</h2></center>
        
          <?php
          include 'controller/connection.php';
          $businesemail=$sqlcresult['user_emailid'];
          $noti=  mysql_query("SELECT * from  comment_message where business_emailid ='$businesemail' order by entry_dt DESC");
          $numrow=  mysql_num_rows($noti);
        ?>
                 <?php
                while($notifres=  mysql_fetch_array($noti))
                {
                ?>
                        <?php 
                        if($notifres['message']=="")
                        {
                          ?>
                
        <div class="row" style="margin-top:0px;">
	<!-- Contenedor Principal -->
    <div class="comments-container mszspacing">
		    
        <ul id="comments-list" class="comments-list" style="list-style-type: none;">
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
                                        <?php
                                       $memberemail=$notifres['member_emailid'];
                                        $bussprofile=  mysql_query("SELECT * from  user_reg where email_id ='$memberemail' ");
                                        $memberprofile= mysql_fetch_array($bussprofile);
                                        if($memberprofile['member_photo']!="")
                                         {
                                             ?>
                                                <div class="comment-avatar">
                                            <img src="images/member_photo/<?php echo $memberprofile['member_photo'];?>" alt="">
                                             </div>
                                                <?php
                                         }  else {
                                             ?>
                                                <div class="comment-avatar">
                                                    <img src="images/defaultuser.png" alt="">
                                                    
                                                </div>
                                                <?php
                                                
                                         }
                                        ?>
                                           
					
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						       <div class="comment-head">
                                                           <h6 class="comment-name" style="color:#0B96CD;"><i class="fa fa-comment" style="font-size: 15px;color:#0B96CD;"></i><?php echo $notifres['member_nm'];?></h6>
								<span><?php echo date('d/m/Y h:i:s',strtotime($notifres['entry_dt']));?></span>
								
							</div>
							<div class="comment-content">
								<?php echo $notifres['comment'];?>
                                                            <?php
                                     if($notifres['emoji']!='')
                                     {
                                            $emojis= $notifres['emoji'];
                                            $arr=@split(" ",$emojis); 
                                         
                                            for($i=1;$i<sizeof($arr);$i++)
                                            {
                                            $emojiimg=$arr[$i];
                                                   
                                            ?>
                                             <img src="images/<?php  echo $emojiimg.'.png';?>" style="height: 80px;width: 80px;"  class="thumbnail" alt="image loading error."/><br/>
                                            <?php
                                            }
                                     }
                                        ?>
                                
                                <?php
                                if($notifres['images']!='')
                                {
                                   ?>
                                <div class="asset video">
                
                                    <img src="images/comment_images/<?php echo $notifres['images'];?>" style="max-height: 500px;max-width:400px;width:100%" class="thumbnail" alt="image loading error." /><br/>
                
                                     </div>
                                              
                                <?php
                                }
                                  ?> 
                                      <?php  
                                        if($notifres['video']!='')
                               {
                                    ?> 
                                        <br/><br/>
                                 <div class="asset video">
                
                                <!--<img src="assets/img/club_post_videos/<?php //echo $postdetl[2];?>" style="height: 150px;width: 180px;"/>-->
                                     <iframe height="300px" width="400px"  src="images/comment_videos/<?php echo $notifres['video'];?>" frameborder="0"></iframe>
                   
                                     </div>
                                       <?php
                                } 
                                ?> 
                                          <?php  
                                        if($notifres['document']!='')
                               {
                                    ?> 
                                      <div class="asset video">
                
                                
                                      <p class="fa fa-file-text"></p>
                                     <?php
                                    $str = $notifres['document'];
                                    $res = explode(".", $str);
                                     echo".". $res[1];
                                     ?> File
                                     
                                     <a  href="images/member_post_doc/<?php echo $notifres['document'];?>" target="_self"> Download</a>
                                <!--<img src="assets/img/club_post_videos/<?php //echo $postdetl[2];?>" style="height: 150px;width: 180px;"/>-->
                                    
                                     </div>
                                    
                                 
                                       <?php
                                } 
                                ?>
                                                        </div>
                                            <form class="navbar-form navbar-left" method="POST" action="controller/reply-comment-viewallcmtbusi.php"  onsubmit="return checkvalue();">
                      <input type="hidden" id="busemail" name="busemail" value="<?php echo $notifres['business_emailid'];?>"/>
                      <input type="hidden" id="memebernm" name="memebernm" value="<?php echo $notifres['member_nm'];?>"/>
                      <input type="hidden" id="member_email" name="member_email" value="<?php echo $memberdetl['email_id'];?>"/>
                      <input type="hidden" id="club_id" name="club_id" value="<?php echo $user_id;?>"/>
                                    
                      <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $_SESSION['username'];?>"/>
                      <input type="hidden" id="comment" name="comment" value="<?php echo $notifres['comment'];?>"/>
                   
                            <div class="input-group custom-search-form " >
                         <span class="input-group-btn">
                      <input type="text"  class=" btn-lg  input_width"  id="replycomment" name="replycomment"  style="border:0.5px solid #7ACBE3; width:380px;"/>
                      <button class="btn btn-info btn-sm" type="submit" value="Replay" style="margin-top: -10px;">
                      <span >Reply</span>
                     </button>
                     </span>
                    </div>  
                   
                        </form>
					</div>
				</div>
				<!-- Respuestas de los comentarios -->
                                <ul class="comments-list reply-list" style="list-style-type: none;">
                                      <?php 
            $comment= $notifres['comment']; 
             $replymsg=  mysql_query("SELECT * from  comment_message where  business_emailid ='$businesemail' and comment='$comment'");
             while ($replymsgres=  mysql_fetch_array($replymsg))
             {
                 if($replymsgres['comment_r_business']!='')
                 {
                    ?>
                         <li>
			<!-- Avatar -->
                             <?php
                                $business_emailid=$notifres['business_emailid'];
                                $bussprofile=  mysql_query("SELECT * from  club where user_emailid ='$business_emailid' ");
                                $bussprofileimg= mysql_fetch_array($bussprofile);
                                if($bussprofileimg['club_image']!="")
                                    {
                                    ?>
                                    <div class="comment-avatar">
                                        <img src="images/club_photo/<?php echo $bussprofileimg['club_image'];?>" alt="">
                                    </div>
                                    <?php
                                         }  else {
                                             ?>
                                                <div class="comment-avatar">
                                                    <img src="images/defaultuser.png" alt="">
                                                </div>
                                                <?php
                                                
                                         }
                                        ?> 
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
                                                            
                                                            <h6 class="comment-name" style="color:#0B96CD;"><i class="fa fa-comment" style="font-size: 15px;color:#0B96CD;"></i><?php echo $replymsgres['business_nm'];?></h6>
								<span><?php echo date('d/m/Y h:i:s',strtotime($replymsgres['entry_dt']));?></span>
								
							</div>
							<div class="comment-content">
								<?php echo $replymsgres['comment_r_business'];?>
                                                        </div>
						</div>
                                                
					</li>

            <?php
                 }
                 ?>
          
            <?php
             }
             ?>
					

					
				</ul><br/><br/>
			</li>
		</ul>
	</div>
	</div>
        
        

                        <?php
                 }
                 ?>
                         
                       
                     <?php
                 }
                 ?>
                 </ul>
      </div>  
                                                                                                        
					</div><!-- /.page-content -->
          <?php
    include "include/footer.php";
?>
				</div>
			</div><!-- /.main-content -->

