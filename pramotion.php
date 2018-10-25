<?php
include "include/header_bus.php";
include "include/sidebar_bus.php";
include 'controller/connection.php';
if(isset($_SESSION['errorlist']))
{
    $errorlist=$_SESSION['errorlist'];
}
if(isset($_SESSION['datafield']))
{
    $datafield=$_SESSION['datafield'];
}

?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<!-- <i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a> -->
							</li>
							<li class="active"><a href="pramotion.php">Promotion</a></li>
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
								Promotion
							</h1>
						</div><!-- /.page-header -->
                                                 <?php
                                                if(isset($_SESSION['successmsg']))
                                                {
                                                    ?>
                                                <center>
                                                  <div class="alert alert-success"><?php echo $_SESSION['successmsg'];?></div>
                                                </center>
                                                  <?php
                                                }
                                                ?>
						<div class="row">
							<div class="col-xs-12">


								<!-- FORM BEGINS -->
								<form action="controller/pramotion.php" method="POST" role="form" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> business Name </label>

										<div class="col-sm-9">
											<input name="businessnm" id="productname" readonly="true" value="<?php echo $_SESSION['clubname']; ?>" class="col-xs-10 col-sm-5" type="text">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Name </label>

										<div class="col-sm-9">
											<input  id="productname" value="<?php if(isset($datafield['dpronamet'])) echo $datafield['dpronamet'];?>" name="productname" type="text" placeholder="Enter your product name" class="col-xs-10 col-sm-5" >
                                                                                    <?php
                                                                                      $stylenm="";
                                                                                            if(isset($errorlist['productnm']) )
                                                                                            {
                                                                                                $stylenm="display:block";
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                                $stylenm="display:none";
                                                                                            }
                                                                                      ?>
                                                                                      <div class="col-md-6 alert alert-danger" id="namejs" style="margin-top:10px;padding:4px;<?php echo $stylenm;?>">
                                                                                        <?php
                                                                                            if(isset($errorlist['productnm']))
                                                                                            {
                                                                                                echo $errorlist['productnm'];
                                                                                            }

                                                                                        ?>
                                                                                      </div>         
                                                                                </div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Price </label>

										<div class="col-sm-9">
											<input id="price" value="<?php if(isset($datafield['dprice'])) echo $datafield['dprice'];?>" name="price" type="text" placeholder="Enter your price" class="col-xs-10 col-sm-5" >
										<?php
                                                                                      $stylenm="";
                                                                                            if(isset($errorlist['productprice']) )
                                                                                            {
                                                                                                $stylenm="display:block";
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                                $stylenm="display:none";
                                                                                            }
                                                                                      ?>
                                                                                      <div class="col-md-6 alert alert-danger" id="namejs" style="margin-top:10px;padding:4px;<?php echo $stylenm;?>">
                                                                                        <?php
                                                                                            if(isset($errorlist['productprice']))
                                                                                            {
                                                                                                echo $errorlist['productprice'];
                                                                                            }

                                                                                        ?>
                                                                                      </div>
                                                                                </div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Time </label>

										<div class="col-sm-9">
											<select id="time" name="time" class="col-xs-10 col-sm-5">
                                                                                          <option value="">Select Time</option>
                                                                                          <option value="1 DAY">1 DAY</option>
                                                                                          <option value="2 DAY">2 DAYS</option>
                                                                                          <option value="3 DAY">3 DAYS</option>
                                                                                          <option value="1 WEEK">1 WEEK</option>
                                                                                          <option value="2 WEEK">2 WEEKS</option>
                                                                                          <option value="1 MONTH">1 MONTH</option>
                                                                                          <option value="2 MONTH">2 MONTHS</option>
                                                                                          <option value="3 MONTH">3 MONTHS</option>
                                                                                          <option value="6 MONTH">6 MONTHS</option>
                                                                                          <option value="1 YEAR">1 YEAR</option>
                                                                                        </select>
                                                                                      <?php
                                                                              $stylenm="";
                                                                                    if(isset($errorlist['producttime']) )
                                                                                    {
                                                                                        $stylenm="display:block";
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                        $stylenm="display:none";
                                                                                    }
                                                                              ?>
                                                                              <div class="col-md-6 alert alert-danger" id="namejs" style="margin-top:10px;padding:4px;<?php echo $stylenm;?>">
                                                                                <?php
                                                                                    if(isset($errorlist['producttime']))
                                                                                    {
                                                                                        echo $errorlist['producttime'];
                                                                                    }

                                                                                ?>
                                                                              </div>
										</div>
									</div>
									<div class="space-4"></div>


									<!-- <div class="clearfix form-actions"> -->
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info btn-sm" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											
											
										</div>
									<!-- </div> -->
								</form>
								<!-- FORM END -->


							</div><!-- /.col -->

						</div><!-- /.row -->
            
					</div><!-- /.page-content -->
          <?php
            include "include/footerb.php";
          ?>
				</div>
			</div>

<?php 
unset($_SESSION['datafield']);
unset($_SESSION['errorlist']);
unset($_SESSION['successmsg']);
?>
