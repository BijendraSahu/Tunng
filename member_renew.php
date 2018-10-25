<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];
//echo $first_part;
?>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
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

				<div class="navbar-buttons navbar-header pull-right"  style="position: absolute;top:0px;right:0px;border:0px !important" role="navigation">
					<ul class="nav ace-nav" style="background:none !important;">
						

						<li class="light-blue dropdown-modal" style="border:0px">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                                            <?php
                                                            if( $_SESSION['profilepic']!=''){
                                                                ?>
                                                            <img class="nav-user-photo" src="images/member_photo/<?php echo $_SESSION['profilepic'];?>" alt="Jason's Photo" height="41px"/>
                                                            <?php
                                                                
                                                            }
                                                            else{
                                                               ?>
                                                            <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
                                                            <?php
                                                            }
                                                            ?>
								
								<span class="user-info">
									<small> Welcome Member!</small>
									<?php echo $_SESSION['username_renewmembership'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>
                                                     
                                                   
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								

								<li class="divider"></li>

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
<!--                    /.navbar-container -->
		</div>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Member Renew</a>
							</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Member Renew
							</h1>
						</div><!-- /.page-header -->

						<div class="row" style="height:460px;">
							<div class="col-xs-12">
                                                            <div class="col-xs-4"></div>
                                                            <div class="col-xs-4" style="font-size: 18px;">
                                                                <p>Dear,<?php echo $_SESSION['username_renewmembership'];?> <br/>Your Membership at Tunng.co is Expire.<br/>Please renew your account
    
                                                            </div>
								

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
					 <link rel="stylesheet" href="css/footer.css" />
	<footer style="position:fixed !important;bottom:0px !important;padding-left:20px;padding-right:10px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		  <div class="container">
<!--				<div class="row tb-padding">-->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <ul>
<!--                                                <li><a href="aboutm.php"> About us</a></li>-->
						
                                                </ul>
                                             <div class="icon">
							<a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-rss-square" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-google-plus-official" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								 <ul>
						<li><a href="#"> Contact Us</a></li>
                                                </ul>
								 <div>
                                                                 contact@tunng.co<br/><br/>
                                                                <strong> Address-</strong> <span>9thavenue,Wonderboom<br/>
                                                                 Pretoria, South Africa</span>
                                      </div>                          
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <ul>
<!--                                                                <li><a href="terms-and-conditionm.php"> Terms And Condition</a></li>-->
								
                                                                </ul>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <ul>
<!--                                                                <li><a href="sitemap.php"> Site Map</a></li>-->
                                                                        <li><a href="controller/logout.php"> Log Out</a></li>
								</ul>
							</div>
							
						</div>
					</div>
<!--				</div>-->
		  </div>
		 <div class="top-border">
		  <div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<ul><li>&copy;2017 Tunng.co </li></ul>
				</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                               
                            </div>
			</div>
		  </div>
		 </div>
	</footer>

		</div><!-- /.main-container

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>

				</div>
			</div>


