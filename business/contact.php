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
							<li class="active">Contact Us</li>
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
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									contact us
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">


								<!-- FORM BEGINS -->
								<form method="post" action="" role="form" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> SUBJECT </label>

										<div class="col-sm-9">
											<select id="form-field-2" placeholder="Time" class="col-xs-10 col-sm-5" required="required">
												<option value="0">Select Subject</option>
												<option value="Change Order">Change Order</option>
												<option value="Order Delivery">Order Delivery</option>
												<option value="Offer Redemption">Offer Redemption</option>
												<option value="Order Payment/refund">Order Payment/refund</option>
												<option value="Problem With Item Received/Return">Problem With Item Received/Return</option>
												<option value="Post Delivery Services">Post Delivery Services</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NAME </label>

										<div class="col-sm-9">
											<input id="form-field-1" placeholder="Product Name" class="col-xs-10 col-sm-5" type="text" name="" required>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> EMAIL </label>

										<div class="col-sm-9">
											<input id="form-field-2" placeholder="Price" class="col-xs-10 col-sm-5" type="email" name="" required>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> CONTACT NO. </label>

										<div class="col-sm-9">
											<input id="form-field-1" placeholder="business Name" class="col-xs-10 col-sm-5" type="text" name="" required>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> MESSAGE </label>

										<div class="col-sm-9">
											<textarea id="form-field-1" placeholder="Your Message" class="col-xs-10 col-sm-5" type="text" name="" required></textarea>
										</div>
									</div>

									<!-- <div class="clearfix form-actions"> -->
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									<!-- </div> -->
								</form>
								<!-- FORM END -->


							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div>


<?php
    include "include/footer.php";
?>