<?php
include "include/header_external.php";
include "include/sidebar_bus.php";
include 'controller/connection.php';
$username=$_SESSION['username'];
$club=  mysql_query("select * from club where user_login_id='$username'");
$clubdetl=  mysql_fetch_array($club);
$email=$clubdetl['user_emailid'];
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
														<form method="GET" action="Viewproduct.php" id="search_user" name="search_user">
															<div class="row">
																<div class="col-xs-12 col-sm-11 col-md-10">
																<div class="input-group">
																	<input class="form-control"  placeholder="Search all Products" value="<?php if (isset($_POST['searchtxt'])) echo $_POST['searchtxt'];?>" id="searchtxt" name="searchtxt" type="text">
																	<div class="input-group-btn">
																		<button type="submit" class="btn btn-default no-border btn-sm">
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
												 <?php
											  include 'controller/connection.php';
											  @ $searchtxt=$_GET['searchtxt'];

											  if($searchtxt=="")
											  {
												  $sql=  mysql_query("SELECT * FROM add_product_business Where emailid='$email' "); 
											  }
											  else 
											   {
												  $sql=  mysql_query("SELECT * FROM add_product_business Where category LIKE '%$searchtxt%' or subcategory LIKE '%$searchtxt%' or title LIKE '%$searchtxt%' ORDER BY entry_dt DESC "); 
											   }
											if(mysql_num_rows($sql)>0)
											{
												 while ($sqlresult= mysql_fetch_array($sql)) 
											 {
												 ?>

												<div class="col-xs-12 col-sm-4 col-md-3">
													<div class="thumbnail search-thumbnail" onmouseover="this.style.border='1px solid orange'" onmouseleave="this.style.border='1px solid #DDDDDD'">
														<span class="search-promotion label label-success arrowed-in arrowed-in-right"><?php //echo $sqlresult['category'];?></span>

														<img class="media-object" src="images/businessimg/<?php echo $sqlresult['product_imgone'];?>"  style="height: 200px; width: 100%; display: block;"  data-holder-rendered="true" alt="Image not found.">
														<p class="onribbon_price" style="transform:rotate(-45deg);border:0px solid black;position: absolute;z-index:1;top:18px;font-width:bold !important;"><?php echo $sqlresult['price'];?></p>
														<img src="images/corner_ribbon.png" style="transform: rotate(0deg);position:absolute;width:90px;height:90px;left:5px;top:-7px">

														<div class="caption">
															<div class="clearfix">
																<span class="pull-right label label-grey info-label"><?php echo "category : ".$sqlresult['category'];?></span>

																															</div>

															<h3 class="search-title">
																<p class="blue"><?php echo $sqlresult['subcategory'];?></p>
															</h3>
															<p>
															<i class="ace-icon fa fa-tag fa-fw blue"></i>
															Brand Name: <?php echo (strlen($sqlresult['category']) > 14) ? substr($sqlresult['category'],0,14).' . . .' : $sqlresult['category'];?></p>
															<p>
															<i class="fa fa-header fa-fw blue" aria-hidden="true"></i>
															Title Name: <?php echo (strlen($sqlresult['title']) > 14) ? substr($sqlresult['title'],0,14).' . . .' : $sqlresult['title'];?></p>
															<p>
															<i class="ace-icon fa fa-usd fa-fw blue"></i>
															Price:<?php echo $sqlresult['price'];?></p>
															<p>
															<i class="fa fa-calendar fa-fw blue" aria-hidden="true"></i>
															Date:<?php echo date( 'd M Y',strtotime($sqlresult['entry_dt']));?>
															</p>
																																 
																																																			<a href="viewproductdetails.php?srno=<?php echo $sqlresult['srno'];?> " class="btn btn-block btn-sm btn-primary">
																<span>View Product Details</span>
															</a>
														</div>
													</div>
												</div>
																										<?php
																				 }


																				}else{
																					?>
																						<br/><br/>  <br/><br/>  
																					  <div class="container" >
																					<div class="row text-center" style="">
																					<div class="col-sm-6 col-sm-offset-3" style="vertical-align: middle; height:250px;box-shadow: rgba(0, 0, 0, 0.1) 10px 10px 10px 10px;">
																			<!--        <h2 style="color:#1CB9C8;">Notification</h2>--><br/>  <br/><br/> 
																					<h3> No Result Found...</h3>

																					<!--<a href="" class="btn btn-success">     Log in      </a>-->

																					</div>

																					</div><br/>  <br/>
																				</div>
																					  <div >

																					  </div>
																					  <?php
																				}
																				  ?>        

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
include "include/footerb.php";
?>