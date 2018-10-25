<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>		
<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
 <?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
//echo $first_part;
?>                 
                                
                                      <style>
        #notification_count {
/*            border:2px solid #cc0000;*/
            padding: 0px 3px 3px 7px;
/*            background: #cc0000;*/
            color:#cc0000;
            font-weight: bold;
          
        width: 25px;
            border-radius: 15px;
            -moz-border-radius: 15px;
            -webkit-border-radius: 15px;
            position: absolute;
            margin-top: -8px;
            font-size: 14px;
        }
    </style>
     <script type="text/javascript" charset="utf-8">
        function addmsg(type,msg) {
 
            $('#notification_count').html(msg);
 
        }
        function waitForMsg() {
 
            $.ajax({
                type: "GET",
                url: "controller/selectnotification.php",
 
                async: true,
                cache: false,
                timeout: 50000,
 
                success: function(data) {
                    addmsg("new", data);
                    setTimeout(
                        waitForMsg,
                        1000
                    );
        
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    addmsg("error", textStatus + " (" + errorThrown + ")");
                    setTimeout(
                        waitForMsg,
                        15000);
                }
            });
        };
 
        $(document).ready(function() {

            waitForMsg();
 
        });
    </script>
    <script type="text/javascript">
function getNotification() {
 
 $.ajax({
   type: "POST",
   url: "controller/updatenotification.php", 
  
    });
}

</script>
                                

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
                                    <li class="<?php if ($first_part=="showcategory.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="showcategory.php" class="">
							<i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i>
							<!-- <i class="menu-icon fa fa-desktop"></i> -->
							<span class="menu-text">
								Home
							</span>
						</a>
					</li>
					<li class="<?php if ($first_part=="clubdashboard.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="clubdashboard.php" class="">
							<i class="fa fa-stack-exchange fa-lg fa-fw" aria-hidden="true"></i>
							<!-- <i class="menu-icon fa fa-desktop"></i> -->
							<span class="menu-text">
								Timeline
							</span>
						</a>
					</li>

					<li class="<?php if ($first_part=="notification.php") {echo "active"; } else  {echo "noactive";}?>">
                                           
						<a href="notification.php" id="notificationLink" onclick="getNotification();">
							<i class="fa fa-comments fa-lg fa-fw" aria-hidden="true"></i>
							<!-- <i class="menu-icon fa fa-desktop"></i> -->
							<span class="menu-text">
                                                           
								Message/Comment <span class="ace-icon fa fa-bell icon-animated-bell" id="notification_count"></span>
							</span>
						</a>
					</li>
					
					<li class="<?php if ($first_part=="club-profile-view.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="club-profile-view.php" class="">
							<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
							<!-- <i class="menu-icon fa fa-desktop"></i> -->
							<span class="menu-text">
								User Profile
							</span>
						</a>
					</li>
					<li class="<?php if ($first_part=="pramotion.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="pramotion.php" class="">
							<i class="fa fa-hand-peace-o fa-lg fa-fw" aria-hidden="true"></i>
							<!-- <i class="menu-icon fa fa-desktop"></i> -->
							<span class="menu-text">
								Promotion
							</span>
						</a>
					</li>
                                        
					<li class="<?php if ($first_part=="terms-and-condition.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="terms-and-condition.php" class="">
							<i class="fa fa-exclamation-circle fa-lg fa-fw" aria-hidden="true"></i>
							<!-- <i class="menu-icon fa fa-desktop"></i> -->
							<span class="menu-text">
								Terms and Conditions
							</span>
						</a>
					</li>
					<li class="<?php if ($first_part=="about.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="about.php" class="">
							<i class="fa fa-tag fa-lg fa-fw" aria-hidden="true"></i>
							<!-- <i class="menu-icon fa fa-desktop"></i> -->
							<span class="menu-text">
								About Us
							</span>
						</a>
					</li>
					<li class="<?php if ($first_part=="contact.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="contact.php" class="">
							<i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
							<!-- <i class="menu-icon fa fa-desktop"></i> -->
							<span class="menu-text">
								Contact Us
							</span>
						</a>
					</li>
					
					
					

					<!-- <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Forms </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="form-elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Form Elements
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-elements-2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Form Elements 2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-wizard.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Wizard &amp; Validation
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="wysiwyg.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Wysiwyg &amp; Markdown
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dropzone.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Dropzone File Upload
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li> -->
				</ul><!-- /.nav-list -->
<center>
   
        <img src="images/downloadnow.png" style="width:100%;">
                                               <a href="https://play.google.com/store/apps/details?id=com.db.tunngs&hl=en" target="_blank"><img src="images/playstor_a.png" style="width:150px;margin-top: 12px;"></a>
                                             <img src="images/playstor_app.png" style="width:150px;">
                                            
                                            </center>
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

