<?php
include "include/header.php";
include "include/sidebar.php";
?>

<div class="main-content">
				<div class="main-content-inner">
					<!-- <div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<a href="">Dashboard</a>
							</li>
							<li class="active">View Product</li>
							<li class="active">View Product Details</li>
						</ul>/.breadcrumb

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div>
					</div> -->

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<h4 class="blue" align="center">Send Comments/Messages To All The Members</h4>
								<div class="search-area well col-xs-12" style="paddign:0px !important">
										<form>
											<div class="row">
												<div class="col-md-4"></div>
												<div class="col-md-4">
													<center>
													<div class="input-group">
														
														<a href="viewproductdetails.php" class="btn btn-sm btn-primary">
																		<span>Send Comment </span>
														</a>
														<a href="viewproductdetails.php" class="btn btn-sm btn-primary">
																		<span>Send Message</span>
														</a>

													</div>
													</center>
													<div class="hr hr-6" style="border:0px"></div>
													<div class="input-group">
														<input class="form-control" name="keywords" placeholder="" type="text">
														<div class="input-group-btn">
															<button type="button" class="btn btn-default no-border btn-sm">
															<i class="ace-icon fa fa-paper-plane icon-on-right bigger-110"></i>
															</button>
														</div>
													</div>
												</div>
												<div class="col-md-4"></div>
											</div>
										</form>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">

									<h3 class="blue" align="center"> Product Details </h3>
										<div class="hr hr-24"></div>

									<!-- <div class="media search-media"> -->
										<div class="row">
											<div class="col-xs-12 col-md-4">
												<div class="">
													<a href="#">
														<img class="media-object img-responsive"  alt="72x72" src="images/slider12.jpg" data-holder-rendered="true">
													</a>
												</div>
											</div>
											<div class="col-xs-12 col-md-8">
												<div class="hr hr-5"></div>
												<div class="media-body">
													<div>
														<h4 class="media-heading">
															<a href="#" class="blue"><b>Product Name</b></a>
														</h4>
														<h4>cars</h4>
													</div>
													<div>
														<h4 class="media-heading">
															<a href="#" class="blue"><b>Price</b></a>
														</h4>
														<h4><b>5 lakh</b></h4>
													</div>
													<div>
														<h4 class="media-heading">
															<a href="#" class="blue"><b>Description</b></a>
														</h4>
														<h5>this is the testing of description.</h5>
													</div>
												</div>
											</div>
										</div>
								  	<!-- </div> -->
								  		<!-- <div class="hr hr-5"></div> -->
								  		<div class="row">
											<h3 class="blue" align="center">Comments/Message</h3>
											<div class="col-sm-12">
										<div class="widget-box" style="">
											<!-- <div class="widget-header">
												<h4 class="widget-title lighter smaller">
													<i class="ace-icon fa fa-comment blue"></i>
													Conversation
												</h4>
											</div> -->

											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="dialogs">
														<div class="itemdiv dialogdiv">

															<!-- styling -->
															<style>
																ul.comtopmar {border:0px solid black;margin-top:-15px}
																.userresponce {border:0px solid black;margin-top: -15px}
																a:hover {text-decoration: none;}
																.rehover:hover {background-image: url(images/replyhover.png);}
															</style>

															<div class="user">
																<img alt="Alexa's Avatar" src="assets/images/avatars/avatar1.png">
															</div>

															<div class="body">
																<div class="name">
																	<a href="#">Alexa</a>
																	<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span class="green">4 sec</span>
																</div>
																</div>
																<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>
																<img src="images/reply.png">

																<!-- ul reply -->
																<ul class="comtopmar">
																	<li class="thumbnail">
																		comment will be here...
																	</li>
																	<div class="userresponce">
																		<span class="time">
																			<a href="">
																			<i class="fa fa-thumbs-up" aria-hidden="true"></i>
																			<span class="green">51</span>
																			</a>
																		</span>
																		&nbsp;&nbsp;
																		<span class="time">
																			<a href="">
																			<img src="images/reply2.png" class="rehover">
																			<span class="green">Reply</span>
																			</a>
																		</span>
																		&nbsp;&nbsp;
																		<span class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">4 sec</span>
																		</span>
																	</div>
																	<img src="images/reply.png">

																	<!-- Sub ul reply -->
																	<ul class="comtopmar">
																		<li class="thumbnail">
																		comment will be here...
																		</li>
																		<div class="userresponce">
																			<span class="time">
																				<a href="">
																				<i class="fa fa-thumbs-up" aria-hidden="true"></i>
																				<span class="green">51</span>
																				</a>
																			</span>
																			&nbsp;&nbsp;
																			<span class="time">
																				<a href="">
																				<img src="images/reply2.png" class="rehover">
																				<span class="green">Reply</span>
																				</a>
																			</span>
																			&nbsp;&nbsp;
																			<span class="time">
																				<i class="ace-icon fa fa-clock-o"></i>
																				<span class="green">4 sec</span>
																			</span>
																		</div>
																	</ul>
																</ul>
															</div>
														</div>


														<!-- i leave it just if you neeed only comment | if you dont't want so above design you can use... -->
														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="John's Avatar" src="assets/images/avatars/avatar.png">
															</div>

															<div class="body">
																<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span class="blue">38 sec</span>
																</div>

																<div class="name">
																	<a href="#">John</a>
																</div>
																<div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>

																<div class="tools">
																	<a href="#" class="btn btn-minier btn-info">
																		<i class="icon-only ace-icon fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div>

										</div>
							</div>
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div>


<?php
    include "include/footer.php";
?>