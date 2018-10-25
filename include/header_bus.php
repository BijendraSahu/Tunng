<?php
session_start();
if(!isset($_SESSION['clubid']) && $_SESSION['clubid']=='')
{
    header("location:./clublogin_view.php");
    return FALSE;
}
include 'controller/connection.php';
$user_id=  $_SESSION['clubid'];
$username= $_SESSION['username'];
$clubname= $_SESSION['clubname'];
$sql1= mysql_query("Select * from club where clubid='$user_id'");
   $user= mysql_fetch_array($sql1);     
?>
<!DOCTYPE html>
<html lang="en"   >

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		
		<title>Tunng</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
                <link rel="stylesheet" href="css/p-style.css" />
                <link rel="stylesheet" href="css/emojilightbox.css" />
                <link rel="stylesheet" href="css/comment_message_show.css" />
                
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
<!--                shar link===============-->

		
<link href="assets/assets/cool-share/plugin.css" media="all" rel="stylesheet" />

		<!-- Demo page styles -->
<!--		<link href="assets/assets/css/styles.css" rel="stylesheet" />-->
           <!--                shar link===============-->     
                
<script src="assets/js/visible.js"></script>
<script>
$(window).scroll(function() {
    $('video').each(function(){
        if ($(this).visible( true )) {
            $(this)[0].play();
            //alert('play');
        } else {
            $(this)[0].pause();
            //alert('pause');
        }
    })
});
</script>

	</head>

	<body class="no-skin">
            
      
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						
						<!-- <small> -->
							<table>
								<tr>
									<td><img src="images/tree.png" class="img-responsive"></td>
<!--									<td><img src="images/tunng.png" class="img-responsive"></td>-->
								</tr>
							</table>

							
							
						<!-- </small> -->
					</a>
				</div>
				<div style="border:0px solid yellow;padding-top:2.4%;margin-left:200px;">
					<div style="">
						<span class="btn btn-primary btn-sm hidden-xs">
							<a href="addproduct.php" style="color:#ffffff;">
							<i class="ace-icon fa fa-user"></i>
								Add Product
							</a>
						</span>
						<span class="btn btn-primary btn-sm hidden-xs">
							<a href="Viewproduct.php" style="color:#ffffff;">
							<i class="ace-icon fa fa-user"></i>
								View Product
							</a>
						</span>
					</div>
				<div class="navbar-buttons navbar-header pull-right" role="navigation" style="position: absolute;top:0px;right:0px;border:0px !important">
					<ul class="nav ace-nav" style="background:none !important;">
						
					

						<li class="light-blue dropdown-modal" style="border:0px">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                                            <?php
                                                            if($user['club_image']!=''){
                                                                ?>
                                                            <img class="nav-user-photo" src="images/club_photo/<?php echo $user['club_image'];?>" alt="Jason's Photo" height="41px"/>
                                                            <?php
                                                                
                                                           }
                                                            else{
                                                               ?>
                                                            <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
                                                            <?php
                                                            }
                                                            ?>
								
								<span class="user-info">
									<small> Welcome Business!</small>
									<?php echo $_SESSION['clubname'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>
                                                        <?php
//                                                        $uri = $_SERVER['REQUEST_URI'];
//                                                        echo $uri; // Outputs: URI
//                                                       $pages="pooja.p";
//                                                        $res = explode(".", $p);
//                                                        echo "d".$res;
                                                        ?>
                                                   
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li>
									<a href="club-profile-view.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li class="visible-xs">
									<a href="addproduct.php">
										<i class="ace-icon fa fa-user"></i>
										Add Product
									</a>
								</li>

								<li class="divider visible-xs"></li>

								<li class="visible-xs">
									<a href="Viewproduct.php">
										<i class="ace-icon fa fa-user"></i>
										View Product
									</a>
								</li>

								<li class="divider visible-xs"></li>

								<li>
									<a href="controller/logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
<!--           	         /.navbar-container -->
		</div>