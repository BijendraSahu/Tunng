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
							<li class="active">Dashboard love</li>
							<li class="active">	comments & messages </li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									comments &amp; messages
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<h2 style="text-align: center">
									Comments/Messages
								</h2>
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									<!-- Welcome to
									<strong class="green">
										<small>Admin</small> -->
										<span>
											at present you are in MESSAGE/COMMENTS page
										</span>
									<!-- </strong>, -->
								</div>


								<div class="row">

									<!-- Conversation posts -->

									<div class="col-sm-12">
										<div class="">

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
																<img alt="Alexa's Avatar" src="assets/images/avatars/avatar1.png" />
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
																<img alt="John's Avatar" src="assets/images/avatars/avatar.png" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span class="blue">38 sec</span>
																</div>

																<div class="name">
																	<a href="#">John</a>
																</div>
																<div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

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
								<!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

<?php
    include "include/footer.php";
?>