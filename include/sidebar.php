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


				<ul class="nav nav-list">
                                        <li class="<?php if ($first_part=="member-timeline.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="member-timeline.php">
							<i class="menu-icon fa fa-stack-exchange fa-lg"></i>
							<span class="menu-text">Timeline </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if ($first_part=="dashboard.php") {echo "active"; } elseif ($first_part=="view-product-search-business.php") {echo "active"; } elseif ($first_part=="view-all-comment-business.php.php") {echo "active"; } elseif ($first_part=="view-all-message-business.php") {echo "active"; }  else  {echo "noactive";}?>">
						<a href="dashboard.php">
							<i class="menu-icon fa fa-search"></i>
							<span class="menu-text"> Search Business </span>
						</a>

						<b class="arrow"></b>
					</li>
                                         
                                        <li class="<?php if ($first_part=="member-profile.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="member-profile.php">
							<i class="menu-icon fa fa-user fa-lg fa-fw"></i>
							<span class="menu-text"> User Profile </span>
						</a>

						<b class="arrow"></b>
					</li>
                                     <!--   <li class="<?php if ($first_part=="deactivate.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="deactivate.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Deactivate</span>
						</a>

						<b class="arrow"></b>
					</li> -->
                                         <li class="<?php if ($first_part=="terms-and-conditionm.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="terms-and-conditionm.php">
							<i class="menu-icon fa fa-exclamation-circle fa-lg fa-fw"></i>
							<span class="menu-text">Terms And Condition</span>
						</a>

						<b class="arrow"></b>
					</li>
                                        <li class="<?php if ($first_part=="aboutm.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="aboutm.php">
							<i class="menu-icon fa fa-tag fa-lg fa-fw"></i>
							<span class="menu-text"> About Us</span>
						</a>

						<b class="arrow"></b>
					</li>
                                         <li class="<?php if ($first_part=="contactm.php") {echo "active"; } else  {echo "noactive";}?>">
						<a href="contactm.php">
							<i class="menu-icon fa fa-phone fa-lg fa-fw"></i>
							<span class="menu-text"> Contact Us</span>
						</a>

						<b class="arrow"></b>
					</li>

				</ul> 
<center>
   
        <img src="images/downloadnow.png" style="width:100%;">
                                               <a href="https://play.google.com/store/apps/details?id=com.db.tunngs&hl=en" target="_blank"><img src="images/playstor_a.png" style="width:150px;margin-top: 12px;"></a>
                                             <img src="images/playstor_app.png" style="width:150px;">
                                            
                                            </center>
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>