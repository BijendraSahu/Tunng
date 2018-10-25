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
							<li class="active">Promotion</li>
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
									promotion
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">


								<!-- FORM BEGINS -->
								<form method="post" action="" role="form" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> business Name </label>

										<div class="col-sm-9">
											<input id="form-field-1" placeholder="business Name" class="col-xs-10 col-sm-5" type="text" name="">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Name </label>

										<div class="col-sm-9">
											<input id="form-field-1" placeholder="Product Name" class="col-xs-10 col-sm-5" type="text" name="">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Price </label>

										<div class="col-sm-9">
											<input id="form-field-2" placeholder="Price" class="col-xs-10 col-sm-5" type="text" name="">
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Time </label>

										<div class="col-sm-9">
											<select id="form-field-2" placeholder="Time" class="col-xs-10 col-sm-5">
												<option value="0">Select Time</option>
												<option value="1 DAY">1 DAY</option>
												<option value="2 DAYS">2 DAYS</option>
												<option value="3 DAYS">3 DAYS</option>
												<option value="1 WEEK">1 WEEK</option>
												<option value="2 WEEKS">2 WEEKS</option>
												<option value="1 MONTH">1 MONTH</option>
												<option value="2 MONTHS">2 MONTHS</option>
												<option value="3 MONTHS">3 MONTHS</option>
												<option value="6 MONTHS">6 MONTHS</option>
												<option value="1 YEAR">1 YEAR</option>
											</select>
										</div>
									</div>
									<div class="space-4"></div>


									<!-- <div class="clearfix form-actions"> -->
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
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