<?php
include "include/header.php";
include "include/sidebar.php";
?>

		

	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Dashboard</a>
							</li>
							<li class="active">User Profile</li>
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
						<div class="page-header" style="border:none;">
							<h1>
								 Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									user profile
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="clearfix">
									<div class="alert alert-success no-margin alert-dismissable">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>
										USER PROFILE PAGE
									</div>

									<!-- <div class="pull-right">
										<span class="green middle bolder">Choose profile: &nbsp;</span>

										<div class="btn-toolbar inline middle no-margin">
											<div data-toggle="buttons" class="btn-group no-margin">
												<label class="btn btn-sm btn-yellow active">
													<span class="bigger-110">1</span>

													<input value="1" type="radio">
												</label>

												<label class="btn btn-sm btn-yellow">
													<span class="bigger-110">2</span>

													<input value="2" type="radio">
												</label>

												<label class="btn btn-sm btn-yellow">
													<span class="bigger-110">3</span>

													<input value="3" type="radio">
												</label>
											</div>
										</div>
									</div> -->
								</div>

								<div class="hr dotted"></div>

								<div class="">
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="assets/images/avatars/profile-pic.jpg">
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">


													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="ace-icon fa fa-circle light-green"></i>
															&nbsp;
															<span class="white">lovekesh singh</span>
														</a>

														<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
															<li class="dropdown-header"> Change Status </li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle green"></i>
&nbsp;
																	<span class="green">Available</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle red"></i>
&nbsp;
																	<span class="red">Busy</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle grey"></i>
&nbsp;
																	<span class="grey">Invisible</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
												<!-- <div class="profile-contact-links align-left">
													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
														Add as a friend
													</a>

													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-envelope bigger-120 pink"></i>
														Send a message
													</a>

													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-globe bigger-125 blue"></i>
														www.alexdoe.com
													</a>
												</div> -->

												<div class="space-6"></div>

												<div class="profile-social-links align-center">
													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
														<i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
													</a>

													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
														<i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
													</a>

													<a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
														<i class="middle ace-icon fa fa-google-plus-square fa-2x red"></i>
													</a>
												</div>
											</div>

											<!-- <div class="hr hr12 dotted"></div> -->

											<!-- <div class="clearfix">
												<div class="grid2">
													<span class="bigger-175 blue">25</span>

													<br>
													Followers
												</div>

												<div class="grid2">
													<span class="bigger-175 blue">12</span>

													<br>
													Following
												</div>
											</div> -->

											<!-- <div class="hr hr16 dotted"></div> -->
										</div>

										<div class="col-xs-12 col-sm-9">
											
											<!-- Form Starting -->
											<form method="post" action="">
											<div class="space-12"></div>

											<script type="text/javascript">
												function input(){
													var x = document.getElementById('txtinput');
													x.style.border='1px solid black';
												}

												function leave(){
													var x = document.getElementById('txtinput');
													x.style.border='0px solid black';
												}
											</script>
											<style type="text/css">
												.valuemargin {padding-left: 0px !important;margin-left:10px !important;}
											</style>
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> USERNAME </div>

													<div class="profile-info-value valuemargin">
														<div class="profile-activity clearfix" style="padding:0px;border:none">
															<input type="text" class="form-contro" value="lovekesh singh" placeholder="USERNAME" name="">
															<div class="tools action-buttons">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-pencil bigger-125"></i>
																</a>
																<a href="#" class="red">
																	<i class="ace-icon fa fa-times bigger-125"></i>
																</a>
															</div>
														</div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> EMAIL ID </div>
													<div class="profile-info-value valuemargin">
														<div class="profile-activity clearfix" style="padding:0px;border:none">
															<input type="text" class="form-contro" value="" placeholder="example@gmail.com" name="">
															<div class="tools action-buttons">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-pencil bigger-125"></i>
																</a>
																<a href="#" class="red">
																	<i class="ace-icon fa fa-times bigger-125"></i>
																</a>
															</div>
														</div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> CITY </div>

													<div class="profile-info-value valuemargin">
														<div class="profile-activity clearfix" style="padding:0px;border:none">
															<input type="text" class="form-contro" value="jabalpur" placeholder="CITY" name="">
															<div class="tools action-buttons">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-pencil bigger-125"></i>
																</a>
																<a href="#" class="red">
																	<i class="ace-icon fa fa-times bigger-125"></i>
																</a>
															</div>
														</div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> COUNTRY </div>

													<div class="profile-info-value valuemargin">
														<div class="profile-activity clearfix" style="padding:0px;border:none">
															<input type="text" class="form-contro" value="india" placeholder="COUNTRY" name="">
															<div class="tools action-buttons">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-pencil bigger-125"></i>
																</a>
																<a href="#" class="red">
																	<i class="ace-icon fa fa-times bigger-125"></i>
																</a>
															</div>
														</div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> ADDRESS </div>

													<div class="profile-info-value valuemargin">
														<div class="profile-activity clearfix" style="padding:0px;border:none">
															<input type="text" class="form-contro" value="sadar" placeholder="ADDRESS" name="" class="pull-left">
															<div class="tools action-buttons">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-pencil bigger-125"></i>
																</a>
																<a href="#" class="red">
																	<i class="ace-icon fa fa-times bigger-125"></i>
																</a>
															</div>
														</div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> CLUB OPEN TIME </div>

													<div class="profile-info-value valuemargin">
														<div class="profile-activity clearfix" style="padding:0px;border:none">
															<input type="text" class="form-contro" value="" placeholder="CLUB OPEN TIME" name="">
															<div class="tools action-buttons">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-pencil bigger-125"></i>
																</a>
																<a href="#" class="red">
																	<i class="ace-icon fa fa-times bigger-125"></i>
																</a>
															</div>
														</div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> CLUB CLOSE TIME </div>

													<div class="profile-info-value valuemargin">
														<div class="profile-activity clearfix" style="padding:0px;border:none">
															<div><input type="text" class="form-contro" value="" placeholder="CLUB CLOSE TIME" name=""></div>
															<div class="tools action-buttons">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-pencil bigger-125"></i>
																</a>
																<a href="#" class="red">
																	<i class="ace-icon fa fa-times bigger-125"></i>
																</a>
															</div>
														</div>
													</div>
												</div>

											</div>

											<div class="space-20"></div>
											<!-- <div class="clearfix form-actions"> -->
											<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button><!-- 
										</div> -->
									</div>
											

											<div class="hr hr2 hr-double"></div>

											<div class="space-6"></div>

											<!-- <div class="center">
												<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
													<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
													<span class="bigger-110">View more activities</span>

													<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
												</button>
											</div> -->

										</form>
										<!-- Form ending -->

										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div>

			

<?php
    include "include/footer.php";
?>