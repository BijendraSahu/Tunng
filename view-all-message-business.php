<?php
include "include/header.php";
include "include/sidebar.php";
include 'controller/connection.php';

@$user_id=$_GET['id'];
$sqlc=  mysql_query("SELECT * FROM club Where clubID='$user_id' "); 
$sqlcresult=  mysql_fetch_array($sqlc);
$businesemail=$sqlcresult['user_emailid'];

 $businesemail=$sqlcresult['user_emailid'];
 $noti=  mysql_query("SELECT * from  comment_message where business_emailid ='$businesemail' order by entry_dt DESC");
 $numrow=  mysql_num_rows($noti);
  
$username=$_SESSION['username'];
$member=  mysql_query("select * from  user_reg where user_name='$username'");
$memberdetl=  mysql_fetch_array($member);
?>

			<div class="main-content">
                            
				<div class="main-content-inner" style="">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Search Business</a>
							</li>
							<li class="active">View All Messages</li>
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

					<div class="page-content">
						  <?php
                
		  $emailidbus=$sqlcresult['user_emailid'];
                  $sqlcc=  mysql_query("SELECT * FROM club Where user_emailid='$emailidbus' "); 
                  $sqlccresult=  mysql_fetch_array($sqlcc);
                
                      ?>

						<div class="page-header">
							<h1>Messages </h1>
						</div><!-- /.page-header -->

                                                                    <div class="row"> 
                                                                                 <div class="panel panel-default">
                                                                                        <h4 class="cmt-bussheadding">Messages For Business</h4>	
                                                                                        <div class="panel-body">                
                                                                                            <form accept-charset="UTF-8" action="controller/mbr-message-viewall-message.php" method="POST">
                                                                                                 <input type="hidden" id="business_email" name="business_email" value="<?php echo $emailidbus;?>"/>
                                                                                            <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $sqlccresult['club_name'];?>"/>
                                                                                            <input type="hidden" id="member_email" name="member_email" value="<?php echo $memberdetl['email_id'];?>"/>
                                                                                            <input type="hidden" id="member_id" name="member_id" value="<?php echo $user_id;?>"/>

                                                                                                <textarea class="form-control counted" id="message"  name="message" placeholder="Type in your message" rows="5" style="margin-bottom:10px;"></textarea>

                                                                                                <button class="btn btn-info" type="submit">Post</button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                    </div><!-- /.row -->
                                                            <div class="row" style="height:auto;">
        <center><h2 style="font-family: Calisto MT;color: #0573CB;">Messages</h2></center>
        <br/>
        
              
                 <?php
          include 'controller/connection.php';
          $businesemail=$sqlcresult['user_emailid'];
          $noti=  mysql_query("SELECT * from  comment_message where (business_emailid ='$businesemail' and m_c_notesion=1)order by entry_dt DESC ");
     $numrow=  mysql_num_rows($noti);
        
            ?>
                 <?php
                while($notifres=  mysql_fetch_array($noti))
                {
                ?>
                        <?php 
                     if($notifres['message']!="")
                        {
                            ?>
        <div class="row" style="">
	<!-- Contenedor Principal -->
    <div class="comments-container">
		
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
                                                           <h6 class="comment-name" style="color:#B50100;"><i class="fa fa-envelope" style="font-size: 15px;color:#B50100;"></i><?php echo $notifres['member_nm'];?></h6>
								<span><?php echo date('d/m/Y h:i:s',strtotime($notifres['entry_dt']));?></span>
								
							</div>
							<div class="comment-content">
								<?php echo $notifres['message'];?>
                             
                                                        </div>
                     <form class="navbar-form navbar-left" method="POST" action="controller/reply-message-viewallmsgbusi.php"  onsubmit="return checkvalue();">
                     <input type="hidden" id="busemail" name="busemail" value="<?php echo $emailidbus;?>"/>
                    <input type="hidden" id="memebernm" name="memebernm" value="<?php echo $notifres['member_nm'];?>"/>
                    <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $_SESSION['username'];?>"/>
                    <input type="hidden" id="message" name="message" value="<?php echo $notifres['message'];?>"/>
                   <input type="hidden" id="member_email" name="member_email" value="<?php echo $memberdetl['email_id'];?>"/>
                   <input type="hidden" id="member_id" name="member_id" value="<?php echo $user_id;?>"/>

                     <div class="input-group custom-search-form " >
                         <span class="input-group-btn">
                      <input type="text"  class="btn-lg input_width"  id="replymessage" name="replymessage"  style="border:0.5px solid #B50100; width:380px;"/>
                      <button class="btn btn-danger btn-xs" type="submit" value="Replay" style="margin-top: -10px;">
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
            $msg= $notifres['message']; 
             $replymsg=  mysql_query("SELECT * from  comment_message where  business_emailid ='$businesemail' and message='$msg'");
             while ($replymsgres=  mysql_fetch_array($replymsg))
             {
                 if($replymsgres['message_r_business']!='')
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
                                                            <h6 class="comment-name" style="color:#B50100;"><i class="fa fa-envelope" style="font-size: 15px;color:#B50100;"></i><?php echo $replymsgres['business_nm'];?></h6>
								<span><?php echo date('d/m/Y h:i:s',strtotime($replymsgres['entry_dt']));?></span>
								
							</div>
							<div class="comment-content">
								<?php echo $replymsgres['message_r_business'];?>
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
        
<!--         <div class="alert alert-info" style="background-color:#DDDFDD;">
                        <div class="container">
	<div class="row">
      
            
             <div class="media media-testimonial">
              <div class="media-left">
                <a href="#" style="font-size: 30px;">
                   <i class="fa fa-envelope"></i>  
                </a>
              </div>
              <div class="media-body">
                <strong style="font-size:20px"><?php echo $notifres['member_nm'];?><br/></strong>
                         <strong style="font-size:16px;font-weight: normal;"><?php echo $notifres['message'];?><br/></strong>
                        <small><?php echo date('d/m/Y h:i:s',strtotime($notifres['entry_dt']));?></small></div>
              <form class="navbar-form navbar-left" method="POST" action="controller/reply-message-viewallmsgbusi.php"  onsubmit="return checkvalue();">
                     <input type="hidden" id="busemail" name="busemail" value="<?php echo $notifres['business_emailid'];?>"/>
                    <input type="hidden" id="memebernm" name="memebernm" value="<?php echo $notifres['member_nm'];?>"/>
                    <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $notifres['business_nm'];?>"/>
                    <input type="hidden" id="message" name="message" value="<?php echo $notifres['message'];?>"/>
                   <input type="hidden" id="member_email" name="member_email" value="<?php echo $memberdetl['email_id'];?>"/>
 
                            <div class="input-group custom-search-form " >
                         <span class="input-group-btn">
                      <input type="text"  class=" btn-lg"  id="replymessage" name="replymessage"  style="border:0.5px solid #7ACBE3; width:380px;"/>
                      <button class="btn btn-info" type="submit" value="Replay" style="margin-top: -10px;">
                      <span >Reply</span>
                     </button>
                     </span>
                    </div> 
                   
                        </form>
             </div>
            <?php 
            $msg= $notifres['message']; 
             $replymsg=  mysql_query("SELECT * from  comment_message where  business_emailid ='$businesemail' and message='$msg'");
             while ($replymsgres=  mysql_fetch_array($replymsg))
             {
                 if($replymsgres['message_r_business']!='')
                 {
                    ?>
            <div class="media media-testimonial media-testimonial-med" style="background-color:white;">
              <div class="media-left">
                <a href="#" style="font-size: 25px;">
                 <i class="fa fa-envelope"></i>
                </a>
              </div>
              <div class="media-body">
                 <strong style="font-size:20px"><?php echo $replymsgres['business_nm'];?><br/></strong>
                         <strong style="font-size:16px;font-weight: normal;"><?php echo $replymsgres['message_r_business'];?><br/></strong>
                        <small><?php echo date('d/m/Y h:i:s',strtotime($replymsgres['entry_dt']));?></small></div>
              </div>
            <?php
                 }
                 ?>
            
          
            <?php
             }
             ?>
           
            </div>
	</div>
</div>     -->
            
                            <?php
                        }
                        ?>
                         
                       
                     <?php
                 }
                 ?></div>
                                                                                                        
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php
                include "include/footer.php";
?>