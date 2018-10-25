<?php
include "include/header.php";
include "include/sidebar.php";
include 'controller/connection.php';
$member_id=$_SESSION['memberid'];
$username=$_SESSION['username'];
$memberprofile=  mysql_query("select * from user_reg where srno='$member_id'");
$memberprofiledetl= mysql_fetch_array($memberprofile);
?>

	
			<div class="main-content">
				<div class="main-content-inner">
              

	<style>
	@media(max-width: 576px){ 
		.popstyle {width:90% !important;background:#fff;margin:-30px -80px -80px -80px !important;}
		.filestyle {width:100%;height:10%;} }

	.popstyle {width:50%;background:#fff;margin-top:-150px;box-shadow: 0px 0px 10px black} 
	.filestyle {width:100%;}
	.btnholder {border:0px solid black;padding:5px;}
	</style>
    <script type="text/javascript">
   
    function load_as_lightbox(){
        var DocumentHeight = $(document).height();
        $('.as_lightbox_wrapper').css('height', DocumentHeight); // Set document height for As_Lightbox wrapper
    }
    function ShowLightBox(DivId){
        $('.as_lightbox_wrapper').show(); // Show the wrapper
        $('#'+DivId+'').show(); // Show the Lightbox div, you can use another jQuery view functions such as fadeIn, fadeToggle for animations
    }
    function HideLightBox(DivId){
        $('.as_lightbox_wrapper').hide('fast'); // Hide the As_Lightbox wrapper
        $('#'+DivId+'').hide(); // Hide the div
    }
    $(document).ready(function(){
         
        $('#as_lightbox_close').click(function(){
            HideLightBox('Simple_Lightbox'); // call the As_Lightbox close function
            return false;
        });
        $('#lbclose').click(function(){
            HideLightBox('Simple_Lightbox'); // call the As_Lightbox close function
            return false;
        });
        $('#changeImage').click(function(){
//            alert("DFVG");
            load_as_lightbox();
            ShowLightBox('Simple_Lightbox'); // call the As_Lightbox show function
            return false;
        });
    });

    $(document).ready(function(){
    	$('#clicktoimg').click(function(){
    		$('#uploadImage').click();
    	})
         
        $('#pinform1').submit(function(){
        var formData = new FormData($(this)[0]);
            var mobileno_forpin=$('.mobileno_forpin').val();
             var lengthmobno=((mobileno_forpin).length);
           
            
             if(lengthmobno =='10')
                 {
                    $('#valid_mmobno').css('display','none');
                       $.ajax({
                        url:'controller/generatepin-member.php',
                        method:'POST',
                        enctype: 'multipart/form-data',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(results) 
                        { 
                             alert(results);
                             var lengthres=((results).length);
                              if(lengthres=="6"){
                               $('#genratedotp').val(results);
                               $('#enterotp').css('display','block');
                               $('#entermobno').css('display','none'); 
                              }
                              else{
                              $('#mmobno_allreadyexist').css('display','block'); 
                              }
                        }
                    });  

                 }else{
                     $('#valid_mmobno').css('display','block');
                 }
                
           return false;          
        }); 
        
         $(".enterotp").keyup(function(){
            var genratedotp=$('#genratedotp').val();
             var enterotp=$('.enterotp').val();
            if(enterotp == genratedotp)
            {
                 $('#enterpasscode').css('display','block');
                 $('#enterotp').css('display','none');
            }else{
               $('#valid_otp').css('display','block');  
            }

                
                    
        }); 
        
           $('#pinform2').submit(function(){
        var formData = new FormData($(this)[0]);
            var enter_pin=$('.enter_pin').val();
             var lengthmobno=((enter_pin).length);
            
             if(lengthmobno =='6')
                 {
                       $.ajax({
                        url:'controller/generatepin-member.php',
                        method:'POST',
                        enctype: 'multipart/form-data',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(results1) 
                        { 
                            //alert(results1);
                             var lengthres1=((results1).length);
                              if(lengthres1=="6"){
                                $('#pin_allreadyexist').css('display','block');
                               
                              }
                              else{
                              $('#successmsg').css('display','block');
                              $('#enterpasscode').css('display','none');
                              }
                        }
                    });  

                 }else{
                     $('#valid_mmobno').css('display','block');
                 }
                
           return false;          
        }); 
    });
    
    function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}

    
        </script>
        
        <div class="as_lightbox_wrapper"></div>
		<div class="as_lightbox_container popstyle" id="Simple_Lightbox">
     		<div class="as_lightbox">
				<div class="as_lightbox_close" id="as_lightbox_close">
               		<img src="images/close_flat_icon.png" alt="Close Lightbox" title="Close"/>
        		</div>
        		<div class="as_clear"></div>
         		<center>
					<div class="wrap" style="border:0px">
						<!-- image uploading form -->
				        <form action="controller/edit-member-photo.php" method="POST" enctype="multipart/form-data">
							
							<div class="filestyle">
								<input id="uploadImage" type="file" accept="image/jpeg" name="image" style="display: none" />
								<img src="images/upload_image.png" style="width:80% !important;cursor:pointer;"  id="clicktoimg">
							</div>
							<div class="btnholder">
							<input type="submit" value="Upload" class="btn btn-primary">

							<!-- hidden inputs -->
							<input type="hidden" id="x" name="x" />
							<input type="hidden" id="y" name="y" />
							<input type="hidden" id="w" name="w" />
							<input type="hidden" id="h" name="h" />
							</div>
						</form>
					</div>
					<!--wrap-->
				</center>
	 		</div>
	 	</div>
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<!-- <i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a> -->
							</li>

<!--							<li>
								<a href="#">More Pages</a>
							</li>-->
							<li class="active"><a href="member-profile.php">User Profile</a></li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">

						<div class="page-header">
							<h1>
								User Profile
								
							</h1>
						</div>
                                                <center>
                                 <div>
                                    <?php
                                        if(isset($_SESSION['success_profile']) && $_SESSION['success_profile']!="")
                                         {
                                     ?>
                                     <div class="alert alert-success">
                                       <strong>Success!</strong>  Your information updated successfully.
                                     </div>

                                    <?php
                                       unset($_SESSION['success_profile']);
                                        }
                                     ?>
                                      <?php
                                        if((isset($_SESSION['email_allready']) && $_SESSION['email_allready']!="") )
                                         {
                                     ?>
                                     <div class="alert alert-danger">
                                       <strong>Error!</strong>  <?php echo $_SESSION['email_allready'];?> 
                                     </div>

                                    <?php
                                     
                                       unset($_SESSION['email_allready']);
                                        }
                                     ?>
                                      <?php
                                        if((isset($_SESSION['mobile_allready']) && $_SESSION['mobile_allready']!=""))
                                         {
                                     ?>
                                     <div class="alert alert-danger">
                                       <strong>Error!</strong> <?php echo $_SESSION['mobile_allready'];?>
                                     </div>

                                    <?php
                                       unset($_SESSION['mobile_allready']);
                                      
                                        }
                                     ?>
                                     </div>
                                   </center>
						<div class="row">
							<div class="col-xs-12">
							
									<div id="user-profile-2" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Profile
													</a>
												</li>

												
												<li>
													<a data-toggle="tab" href="#pictures">
														<i class="pink ace-icon fa fa-lock bigger-120"></i>
														Generate Pin
													</a>
												</li>
											</ul>
											<style>
											.imghover {width:100px;
												height:90%;
												width:190px;
												position:absolute;
												background:rgba(0,0,0,0.1);
												transition:.3s;
												}
												.imghover:hover {
												background:rgba(0,0,0,0.7);
												background-image:url(assets/images/camera-icon.png);
												background-size:100%;}
											.profile-picture {width:200px;}
											</style>
											<div class="tab-content no-border padding-5">
												<div id="home" class="tab-pane in active">
													<div class="row">
														<div class="col-xs-12 col-sm-4 center">
															<center></center>
															<span class="profile-picture">
																<span class="imghover"  id="changeImage"></span>
                                                                          <?php
                                                                         if($memberprofiledetl['member_photo']!="")
                                                                        {
                                                                         ?>
                                                                         <img class="editable " alt="Alex's Avatar" height="180px" width="100%" id="changeImage"  src="images/member_photo/<?php echo $memberprofiledetl['member_photo'];?>"> 
                                                                        <?php
                                                                          }
                                                                        else
                                                                         {
                                                                         ?>
                                                                        <img class="editable img-responsive" alt="Alex's Avatar" id="changeImage" src="assets/images/avatars/profile-pic.jpg" />
                                                                        <?php
                                                                         }
                                                                        ?>
			
															</span>

															<div class="space space-4"></div>

<!--															<a href="#" class="btn btn-sm btn-block btn-success">
																<i class="ace-icon fa fa-plus-circle bigger-120"></i>
																<span class="bigger-110">Add as a friend</span>
															</a>

															<a href="#" class="btn btn-sm btn-block btn-primary">
																<i class="ace-icon fa fa-envelope-o bigger-110"></i>
																<span class="bigger-110">Send a message</span>
															</a>-->
														</div><!-- /.col -->

														<div class="col-xs-12 col-sm-8">
															<h4 class="search-filter-header bg-primary" style="margin:5px">
																<span class="">Edit Profile</span>
															</h4>
<!--																<span class="label label-purple arrowed-in-right">
																	<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
																	online
																</span>-->
															
                                                                                                                        <form id="edit_member" name="edit_member" action="controller/edit-member-profile.php" method="POST">            
															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> USER NAME </div>

																	<div class="profile-info-value">
																		<input type="text" name="uname" id="uname" class="form-control" value="<?php echo $memberprofiledetl['user_name']; ?>" readonly="true">
																	</div>
																</div>

																<?php
                                                                                                                                if($memberprofiledetl['email_id']=='')
                                                                                                                                {
                                                                                                                                 ?>
                                                                                                                            <div class="profile-info-row">
																	<div class="profile-info-name"> EMAIL ID </div>

																	<div class="profile-info-value">
                                                                                                                                            
                                                                                                                                            <input type="text" name="email" id="email" placeholder="Enter valid Email-Id" class="form-control"  >
																	</div>
																</div>
                                                                                                                            <?php
                                                                                                                                }else {
                                                                                                                                   ?>
                                                                                                                            <div class="profile-info-row">
																	<div class="profile-info-name"> EMAIL ID </div>

																	<div class="profile-info-value">
                                                                                                                                            
																		 <input type="text"  class="form-control" value=" <?php echo $memberprofiledetl['email_id']; ?>" readonly="true">
																	</div>
																</div>
                                                                                                                            <?php
                                                                                                                                }
                                                                                                                                if($memberprofiledetl['contact_no']=='')
                                                                                                                                {
                                                                                                                                  ?>
                                                                                                                            <div class="profile-info-row">
																	<div class="profile-info-name">CONTACT NO. </div>

																	<div class="profile-info-value">
																		<input type="text" maxlength="10" class="form-control" placeholder="Enter Valid Contact Number" name="mobile" id="mobile" >
																	</div>
																</div>
                                                                                                                            <?php
                                                                                                                                }else{
                                                                                                                                    ?>
                                                                                                                            <div class="profile-info-row">
																	<div class="profile-info-name">CONTACT NO. </div>

																	<div class="profile-info-value">
																		<input type="text" maxlength="10" readonly="true" class="form-control" placeholder="Contact no."  value="<?php echo $memberprofiledetl['contact_no'];?>">
																	</div>
																</div>
                                                                                                                            <?php
                                                                                                                                     }
                                                                                                                                ?>
																
                                                                                                                            
																
                                                                                                                                <div class="profile-info-row">
																	<div class="profile-info-name"> COUNTRY </div>

																	<div class="profile-info-value">
																		
																		<input type="text" maxlength="13" class="form-control" placeholder="country" name="country" id="country" value="<?php echo $memberprofiledetl['member_country'];?>">
																	</div>
																</div>
                                                                                                                            <div class="profile-info-row">
																	<div class="profile-info-name"> CITY </div>

																	<div class="profile-info-value">
																		  <input type="text" maxlength="13" class="form-control" name="city" id="city" placeholder="city" value="<?php echo $memberprofiledetl['member_city'];?>">
																	</div>
																</div>
                                                                                                                            <div class="profile-info-row">
																	<div class="profile-info-name"> ADDRESS </div>

																	<div class="profile-info-value">
																		 <input type="text" class="form-control" placeholder="Address" name="address" id="address" value="<?php echo $memberprofiledetl['address'];?>">
																	</div>
																</div>

                                                                                                                            
                                                                                                                                 <center>
                                                                                                                             <button type="submit" name="update_memberprofile" id="update_memberprofile" value="submit" class="btn btn-info btn-fill pull-right">Edit Profile</button>       
                                                                                                                            </center>
                                                                                                                            
																												</div>
                                                                                                                        </form>
															

															
														</div><!-- /.col -->
													</div><!-- /.row -->

													

													
												</div><!-- /#home -->

											<div id="pictures" class="tab-pane">
												<center>
<div  class=" panel panel-default" style="max-width: 380px;box-shadow: 10px 10px 5px #E4E4E4;font-family: sans-serif;">
<div class="panel-body">
 <h2 style="font-weight:700;font-family: sans-serif;"><strong>Generate Passcode </strong></h2>
 <div id="entermobno" >  
 <form id="pinform1" action=""  method="POST" style="text-align:left;">
         <div class="form-group">
		<label for="exampleInputEmail1">Mobile Number</label>
                <input class="form-control mobileno_forpin" id="phone"  maxlength="10" onkeyup="validatephone(this);" placeholder="Enter Valid Mobile Number" name="mobileno_forpin" required="">
                <div style="display:none;color:red;" id="valid_mmobno"><p>please Enter Valid Mobile Number</p></div>
                <div style="display:none;color:red;" id="mmobno_allreadyexist"><p>Mobile Number Already Exist.</p></div>
         </div>                              
     <button type="submit" class="btn btn-success" name="signup" style="width: 100%; margin-top: 12px;margin-bottom: 12px;">Next</button>
 </form>
  </div>
 <div id="enterotp" style="display:none;"> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter OTP</label>
                    <input class="form-control enterotp" id="phone"  maxlength="6" onkeyup="validatephone(this);" placeholder="Enter OTP" name="enterotp" required="">
                    <input type="hidden" class="form-control " id="genratedotp" name="genratedotp">
                    
                    
                    <div style="display:none;color:red;" id="valid_otp"><p>please Enter Valid OTP</p></div>
                </div>                              
 </div>
 <div id="enterpasscode" style="display:none;">
     <form id="pinform2" action=""  method="POST" style="text-align:left;">
         <div class="form-group">
		<label for="exampleInputEmail1">Enter Passcode</label>
                <input class="form-control enter_pin" id="phone"  maxlength="6" onkeyup="validatephone(this);" placeholder="Enter Pin Number" name="enter_pin" required="">
                
                <div style="display:none;color:red;" id="pin_allreadyexist"><p>Passcode is Already Exist Please Enter another Passcode.</p></div>
         </div>                              
     <button type="submit" class="btn btn-success" name="signup" style="width: 100%; margin-top: 12px;margin-bottom: 12px;">Next</button>
   </form>
 </div>
 <div class="alert alert-success" style="display:none;" id="successmsg">
     <p>Passcode Generated Successfully.</p>
 </div>
 
</div>
<p style="text-align: center;
font-size: smaller;"></p>
</div>
    </center>
												</div><!-- /#pictures -->
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

			