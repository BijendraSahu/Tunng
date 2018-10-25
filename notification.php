<?php
include "include/header_bus.php";
include "include/sidebar_bus.php";
?>


<div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li style="list-style-type: none">
                                <!-- <i class="ace-icon fa fa-home home-icon"></i> -->
                                <!-- <a href="#">Home</a> -->
                            </li>

                            <li>
                                <a href="notification.php">Message/Comment</a>
                            </li>
                        </ul><!-- /.breadcrumb -->

                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div><!-- /.nav-search -->
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                Timeline
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-6 col-md-12">

			<?php
          include './controller/connection.php';
          $businessnm=$_SESSION['clubname'];
          $noti=  mysql_query("SELECT * from  comment_message where status_member='unread' and business_nm ='$businessnm' ORDER By entry_dt DESC");
          $numrow=  mysql_num_rows($noti);
            if($numrow >=1)
            {
            ?>
         <?php
        while($notifres=  mysql_fetch_array($noti))
        {
        ?>
        <li style="list-style-type: none">
            <?php 
            if($notifres['message']=="")
            {
              ?>        
                        <div class="row">
	<!-- Contenedor Principal -->
    <div class="comments-container">
		
        <ul id="comments-list" class="comments-list">
			<li style="list-style-type: none">
				<div class="">
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
					<div class="comment-box" style="box-shadow: 0px 2px 10px 4px silver !important; ">
						       <div class="comment-head">
                                        <h6 class="comment-name" style="color:#800080;"><i class="fa fa-comment" style="font-size: 15px;color:#800080;"></i><?php echo $notifres['member_nm'];?></h6>
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
                                             <img src="images/<?php  echo $emojiimg.'.png';?>" style="height: 80px;width: 80px;"/><br/>
                                            <?php
                                            }
                                     }
                                        ?>
                                
                                <?php
                                if($notifres['images']!='')
                                {
                                   ?>
                                <div class="asset video">
                
                                    <img src="images/comment_images/<?php echo $notifres['images'];?>" style="max-height: 500px;max-width:400px;width:100%;" class="thumbnail" /><br/>
                
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
                                     <iframe height="300px" width="400px"  src="images/comment_videos/<?php echo $notifres['video'];?>" frameborder="0" class="video_width"></iframe>
                   
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
                                            <form class="navbar-form navbar-left" method="POST" action="controller/reply-comment.php"  onsubmit="return checkvalue();">
                     <input type="hidden" id="busemail" name="busemail" value="<?php echo $notifres['business_emailid'];?>"/>
                    <input type="hidden" id="memebernm" name="memebernm" value="<?php echo $notifres['member_nm'];?>"/>
                    <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $notifres['business_nm'];?>"/>
                    <input type="hidden" id="comment" name="comment" value="<?php echo $notifres['comment'];?>"/>
                   
                            <div class="input-group custom-search-form " >
                         <span class="input-group-btn">
                      <input type="text"  class=" btn-lg"  id="replycomment" name="replycomment"  style="border:0.5px solid #800080; width:px;"/>
                      <button class="btn btn-info btn-xs" type="submit" value="Replay" style="margin-top: -10px;">
                      <span>Reply</span>
                     </button>
                     </span>
                    </div><!-- /input-group -->
                   
                        </form>
					</div>
				</div>
				<!-- Respuestas de los comentarios -->
                                <ul class="comments-list reply-list" style="list-style-type: none;">
                                      <?php 
            $comment= $notifres['comment']; 
             $replymsg=  mysql_query("SELECT * from  comment_message where  business_nm ='$businessnm' and comment='$comment'");
             while ($replymsgres=  mysql_fetch_array($replymsg))
             {
                 if($replymsgres['comment_r_business']!='')
                 {
                    ?>
                         <li style="list-style-type: none">
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
						<div class="comment-box" style="box-shadow: 0px 2px 10px 4px silver !important; ">
							<div class="comment-head">
                                                            
                                                            <h6 class="comment-name" style="color:#800080;"><i class="fa fa-comment" style="font-size: 15px;color:#800080;"></i><?php echo $replymsgres['business_nm'];?></h6>
								
								
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
					

					
				</ul>
			</li>
		</ul>
	</div>
	</div>

                      
                        <?php
                        }
                        if($notifres['message']!="")
                        {
                            ?>
                        
                        <div class="row">
	<!-- Contenedor Principal -->
    <div class="comments-container">
		
        <ul id="comments-list" class="comments-list" style="list-style-type: none;">
			<li style="list-style-type: none">
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
					<div class="comment-box" style="box-shadow: 0px 2px 10px 4px silver !important; ">
						       <div class="comment-head">
                                                           <h6 class="comment-name" style="color:#d100d1;"><i class="fa fa-envelope" style="font-size: 15px;color:#d100d1;"></i><?php echo $notifres['member_nm'];?></h6>
								<span><?php echo date('d/m/Y h:i:s',strtotime($notifres['entry_dt']));?></span>
								
							</div>
							<div class="comment-content">
								<?php echo $notifres['message'];?>
                             
                                                        </div>
                                            <form class="navbar-form navbar-left" method="POST" action="controller/reply-message.php"  onsubmit="return checkvalue();">
                     <input type="hidden" id="busemail" name="busemail" value="<?php echo $notifres['business_emailid'];?>"/>
                    <input type="hidden" id="memebernm" name="memebernm" value="<?php echo $notifres['member_nm'];?>"/>
                    <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $notifres['business_nm'];?>"/>
                    <input type="hidden" id="message" name="message" value="<?php echo $notifres['message'];?>"/>
                   
                            <div class="input-group custom-search-form " >
                         <span class="input-group-btn">
                      <input type="text" class="input_width" class=" btn-lg"  id="replymessage" name="replymessage"  style="border:0.5px solid #d100d1;"/>
                      <button class="btn btn-danger btn-xs" type="submit" value="Replay" style="margin-top: -10px;">
                      <span >Reply</span>
                     </button>
                     </span>
                    </div><!-- /input-group -->
                   
                        </form>
					</div>
				</div>
				<!-- Respuestas de los comentarios -->
                                <ul class="comments-list reply-list" style="list-style-type: none;">
                                      <?php 
            $comment= $notifres['comment']; 
             $replymsg=  mysql_query("SELECT * from  comment_message where  business_nm ='$businessnm' and comment='$comment'");
             while ($replymsgres=  mysql_fetch_array($replymsg))
             {
                 if($replymsgres['message_r_business']!='')
                 {
                    ?>
                                    <li style="list-style-type: none">
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
						<div class="comment-box" style="box-shadow: 0px 2px 10px 4px silver !important; ">
							<div class="comment-head">
                                                            <h6 class="comment-name" style="color:#d100d1;"><i class="fa fa-envelope" style="font-size: 15px;color:#d100d1;"></i><?php echo $replymsgres['business_nm'];?></h6>
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
				</ul>
			</li>
		</ul>
	</div>
	</div>
                      
                          
                            <?php
                        }
                        ?>
                         
                       </li>
                     <?php
                 }
                 ?>
                 </ul>
        <?php
        }
 else 
     {
     
//            print"<center class='alert alert-info'><h3 style='font-family:coursiv;color:blue;'>No Comments/Messages</h3></center>";
     $noti=  mysql_query("SELECT * from  comment_message where business_nm ='$businessnm' ORDER By entry_dt DESC ");
       $numrow=  mysql_num_rows($noti);
      if($numrow >0)
      {
          while($notifres=  mysql_fetch_array($noti))
                {
                ?>
                    <li style="list-style-type: none">
                        <?php 
                        if($notifres['message']=="")
                        {
                          ?>
                                      
	<div class="row">
	<!-- Contenedor Principal -->
    <div class="comments-container">
		
        <ul id="comments-list" class="comments-list" style="list-style-type: none;">
			<li style="list-style-type: none">
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
					<div class="comment-box" style="box-shadow: 0px 2px 10px 4px silver !important; ">
						       <div class="comment-head">
                                                           <h6 class="comment-name" style="color:#800080;"><i class="fa fa-comment" style="font-size: 15px;color:#800080;"></i><?php echo $notifres['member_nm'];?></h6>
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
                                             <img src="images/<?php  echo $emojiimg.'.png';?>" style="height: 80px;width: 80px;"/><br/>
                                            <?php
                                            }
                                     }
                                        ?>
                                
                                <?php
                                if($notifres['images']!='')
                                {
                                   ?>
                                <div class="asset video">
                
                                    <img src="images/comment_images/<?php echo $notifres['images'];?>" style="max-height: 500px;max-width:400px;width:100%;" class="thumbnail"/><br/>
                
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
                                     <iframe height="300px" width="400px"  src="images/comment_videos/<?php echo $notifres['video'];?>" frameborder="0" class="video_width"></iframe>
                   
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
                                            <form class="navbar-form navbar-left" method="POST" action="controller/reply-comment.php"  onsubmit="return checkvalue();">
                     <input type="hidden" id="busemail" name="busemail" value="<?php echo $notifres['business_emailid'];?>"/>
                    <input type="hidden" id="memebernm" name="memebernm" value="<?php echo $notifres['member_nm'];?>"/>
                    <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $notifres['business_nm'];?>"/>
                    <input type="hidden" id="comment" name="comment" value="<?php echo $notifres['comment'];?>"/>
                   
                        <div class="input-group custom-search-form " >
                            <span class="input-group-btn">
                                <input type="text"  class="btn-lg input_width"  id="replycomment" name="replycomment"  style="border:0.5px solid #800080;"/>
                                <button class="btn btn-info btn-xs" type="submit" value="Replay" style="margin-top: -10px;">
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
             $replymsg=  mysql_query("SELECT * from  comment_message where  business_nm ='$businessnm' and comment='$comment'");
             while ($replymsgres=  mysql_fetch_array($replymsg))
             {
                 if($replymsgres['comment_r_business']!='')
                 {
                    ?>
                                    <li style="list-style-type: none">
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
						<div class="comment-box" style="box-shadow: 0px 2px 10px 4px silver !important; ">
							<div class="comment-head">
                                                            
                                                            <h6 class="comment-name" style="color:#800080;"><i class="fa fa-comment" style="font-size: 15px;color:#800080;"></i><?php echo $replymsgres['business_nm'];?></h6>
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
					

					
				</ul>
			</li>
		</ul>
	</div>
	</div>

                      
                        <?php
                        }
                        if($notifres['message']!="")
                        {
                            ?>
                        
                        <div class="row">
	<!-- Contenedor Principal -->
    <div class="comments-container">
		
        <ul id="comments-list" class="comments-list" style="list-style-type: none;">
			<li style="list-style-type: none">
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
					<div class="comment-box" style="box-shadow: 0px 2px 10px 4px silver !important; ">
						       <div class="comment-head">
                                                           <h6 class="comment-name" style="color:#d100d1;"><i class="fa fa-envelope" style="font-size: 15px;color:#d100d1;"></i><?php echo $notifres['member_nm'];?></h6>
								<span><?php echo date('d/m/Y h:i:s',strtotime($notifres['entry_dt']));?></span>
								
							</div>
							<div class="comment-content">
								<?php echo $notifres['message'];?>
                                                               
                                                        </div>
                                            <form class="navbar-form navbar-left" method="POST" action="controller/reply-message.php"  onsubmit="return checkvalue();">
                     <input type="hidden" id="busemail" name="busemail" value="<?php echo $notifres['business_emailid'];?>"/>
                    <input type="hidden" id="memebernm" name="memebernm" value="<?php echo $notifres['member_nm'];?>"/>
                    <input type="hidden" id="business_nm" name="business_nm" value="<?php echo $notifres['business_nm'];?>"/>
                    <input type="hidden" id="message" name="message" value="<?php echo $notifres['message'];?>"/>
                   
                            <div class="input-group custom-search-form " >
                         <span class="input-group-btn">
                      <input type="text"  class="btn-lg input_width"  id="replymessage" name="replymessage"  style="border:0.5px solid #d100d1;width:100%"/>
                      <button class="btn btn-danger btn-xs" type="submit" value="Replay" style="margin-top: -10px;">
                      <span >Reply</span>
                     </button>
                     </span>
                    </div><!-- /input-group -->
                   
                        </form>
					</div>
				</div>
				<!-- Respuestas de los comentarios -->
                                <ul class="comments-list reply-list" style="list-style-type: none;">
                                      <?php 
            $comment= $notifres['comment']; 
             $replymsg=  mysql_query("SELECT * from  comment_message where  business_nm ='$businessnm' and comment='$comment'");
             while ($replymsgres=  mysql_fetch_array($replymsg))
             {
                 if($replymsgres['message_r_business']!='')
                 {
                    ?>
                                    <li style="list-style-type: none">
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
						<div class="comment-box" style="box-shadow: 0px 2px 10px 4px silver !important; ">
							<div class="comment-head">
                                                            <h6 class="comment-name" style="color:#d100d1;"><i class="fa fa-envelope" style="font-size: 15px;color:#d100d1;"></i><?php echo $replymsgres['business_nm'];?></h6>
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
				</ul>
			</li>
		</ul>
	</div>
	</div>
                      
                          
                            <?php
                        }
                        ?>
                         
                       </li>
                     <?php
                 } 
      }else
      {
          ?>
                        <br/><br/>  <br/><br/>  
          <div class="container" >
	<div class="row text-center" style="">
        <div class="col-sm-6 col-sm-offset-3" style="vertical-align: middle; height:250px;box-shadow: rgba(0, 0, 0, 0.1) 10px 10px 10px 10px;">
<!--        <h2 style="color:#1CB9C8;">Notification</h2>--><br/>  <br/><br/> 
        <h3> No messages and comments to show.</h3>
       
        <!--<a href="" class="btn btn-success">     Log in      </a>-->
   
        </div>
        
	</div><br/>  <br/><br/> 
    </div><br>
          <div >
              
          </div>
          <?php
      }
       
     }
            ?>					
								</div>
								<!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
                        <?php
                        include "include/footer.php";
                    ?>
					</div><!-- /.page-content -->
                    
				</div><!-- /.main-content -->
            
			

