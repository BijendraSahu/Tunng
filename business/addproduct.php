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
							<li class="active">Add Product Details</li>
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
									add product details
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">


								<!-- FORM BEGINS -->
								<form method="post" action="" role="form" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Select Category </label>

										<div class="col-sm-10">
											<select id="form-field-2" placeholder="Time" class="col-xs-10 col-sm-5" required="required">
											<option value="0">Select Category</option>
											<option value="Beauty, Health and Groceries">Beauty, Health and Groceries</option>
											<option value="Books">Books</option>
											<option value="Car, Motorbike and Industrial">Car, Motorbike and Industrial</option>
											<option value="Clothing and Accessories">Clothing and Accessories</option>
											<option value="Computers and Accessories">Computers and Accessories</option>
											<option value="Home, Kitchen and Pets">Home, Kitchen and Pets</option>
											<option value="Jewellery, Watches and Eyewear">Jewellery, Watches and Eyewear</option>
											<option value="Kindle eReaders and eBooks">Kindle eReaders and eBooks</option>
											<option value="Mobiles and Tablets">Mobiles and Tablets</option>
											<option value="Movies, Music and Video Games">Movies, Music and Video Games</option>
											<option value="Shoes">Shoes</option>
											<option value="Sports, Fitness and Outdoors">Sports, Fitness and Outdoors</option>
											<option value="Toys and Baby Products">Toys and Baby Products</option>
											<option value="TV, Audio and Cameras">TV, Audio and Cameras</option>
											<option value="Used and Refurbished">Used and Refurbished</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Select Sub-Category </label>

										<div class="col-sm-10">
											<select id="form-field-1" class="col-xs-10 col-sm-5" type="text" name="" required>
												<option value=""></option>
											</select>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Title </label>

										<div class="col-sm-10">
											<input id="form-field-2" placeholder="Enter Product Title" class="col-xs-10 col-sm-5" type="email" name="" required>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Price </label>

										<div class="col-sm-10">
											<input id="form-field-1" placeholder="Enter Product Price" class="col-xs-10 col-sm-5" type="text" name="" required>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Select Country </label>

										<div class="col-sm-10">
											<select id="form-field-1" placeholder="Enter Product Price" class="col-xs-10 col-sm-5" type="text" name="" required>
												<option value=""></option>
											</select>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Select State </label>

										<div class="col-sm-10">
											<select id="form-field-1" placeholder="Enter Product Price" class="col-xs-10 col-sm-5" type="text" name="" required>
												<option value=""></option>
											</select>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Select City </label>

										<div class="col-sm-10">
											<select id="form-field-1" placeholder="Enter Product Price" class="col-xs-10 col-sm-5" type="text" name="" required>
												<option value=""></option>
											</select>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Payment Details </label>

										<div class="col-sm-10">
											<input id="form-field-1" placeholder="Enter Bank Name" class="col-xs-10 col-sm-5" type="text" name="" required><br><br>
											<input id="form-field-1" placeholder="Enter IFSC Code" class="col-xs-10 col-sm-5" type="text" name="" required><br><br>
											<input id="form-field-1" placeholder="Enter Account No" class="col-xs-10 col-sm-5" type="text" name="" required>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Product Image </label>

										<div class="col-sm-10">
											<input id="form-field-1" placeholder="Enter Product Price" class="" type="file" name="" required><br>
											<input id="form-field-1" placeholder="Enter Product Price" class="" type="file" name="" required><br>
											<input id="form-field-1" placeholder="Enter Product Price" class="" type="file" name="" required><br>
											<input id="form-field-1" placeholder="Enter Product Price" class="" type="file" name="" required><br>
											<input id="form-field-1" placeholder="Enter Product Price" class="" type="file" name="" required><br>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Detail Description </label>

										<div class="col-sm-10">
											<textarea id="form-field-1" placeholder="Write few lines about your product." class="col-xs-10 col-sm-10" type="text" name="" required></textarea>
										</div>
									</div>

									<!-- <div class="clearfix form-actions" style="background:none;"> -->
										<div class="col-md-2"></div>
										<div class="col-md-10">
											<button class="btn btn-info" type="submit">
												<!-- <i class="ace-icon fa fa-check bigger-110"></i> -->
												&nbsp;Add&nbsp;
											</button>

											&nbsp;
											<!-- <button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button> -->
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