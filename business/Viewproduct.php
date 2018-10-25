<?php
include "include/header.php";
include "include/sidebar.php";
?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<a href="#">Dashboard</a>
							</li>
							<li class="active">View Product</li>
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
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<div>
									<div class="row search-page" id="search-page-1">
										<div class="col-xs-12">
											<div class="row">
												

												<div class="col-xs-12 col-sm-12">
													<div class="row">
														<div class="search-area well col-xs-12" style="paddign:0px !important">
															<div class="pull-left">
																<form>
																	<div class="row">
																		<div class="col-xs-12 col-sm-11 col-md-10">
																		<div class="input-group">
																			<input class="form-control" name="keywords" placeholder="Look within results" type="text">
																			<div class="input-group-btn">
																				<button type="button" class="btn btn-default no-border btn-sm">
																				<i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
																				</button>
																			</div>
																		</div>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>

													<div class="row">


														<div class="col-xs-12 col-sm-4 col-md-3">
															<div class="thumbnail search-thumbnail">
																<span class="search-promotion label label-success arrowed-in arrowed-in-right">Sponsored</span>

																<img class="media-object" data-src="holder.js/100px200?theme=gray" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22175%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20175%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15f777a373e%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15f777a373e%22%3E%3Crect%20width%3D%22175%22%20height%3D%22200%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2261%22%20y%3D%22104.8%22%3E175x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
																<div class="caption">
																	<div class="clearfix">
																		<span class="pull-right label label-grey info-label">$ 50.00</span>

																		<div class="pull-left bigger-110">
																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star-half-o orange2"></i>

																			<i class="ace-icon fa fa-star light-grey"></i>
																		</div>
																	</div>

																	<h3 class="search-title">
																		<a href="#" class="blue">Car & Bike Care</a>
																	</h3>
																	<p>
																	<i class="ace-icon fa fa-tag fa-fw blue"></i>
																	Brand Name: Car, Motorbike and Industrial</p>
																	<p>
																	<i class="fa fa-header fa-fw blue" aria-hidden="true"></i>
																	Title Name: cars</p>
																	<p>
																	<i class="ace-icon fa fa-usd fa-fw blue"></i>
																	Price: 5 lakh</p>
																	<p>
																	<i class="fa fa-calendar fa-fw blue" aria-hidden="true"></i>
																	Date:21/06/2017
																	</p>

																	<a href="viewproductdetails.php" class="btn btn-block btn-sm btn-primary">
																		<span>View Product Details</span>
																	</a>
																</div>
															</div>
														</div>

														
													</div>
													<div class="space-12"></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div>
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div>


<?php
    include "include/footer.php";
?>