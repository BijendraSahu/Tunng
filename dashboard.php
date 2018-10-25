<?php
include "include/header.php";
include "include/sidebar.php";
include 'controller/connection.php';

?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>

							</li>
							<li>
								<i class="ace-icon  active"></i>
								<a href="dashboard.php">Search Business</a>
							</li>			
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
                                                   
							<form method="GET" action="dashboard.php" id="search_user" name="search_user" onsubmit="return checkvalue();" class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" name="searchtxt" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
					

						

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
                                                                     <?php
    
                                                                 @$searchtxt=$_GET['searchtxt'];

                                                                  if($searchtxt=="")
                                                                  {
                                                                      $sql=mysql_query("SELECT * FROM club  "); 
                                                                  }
                                                                  else 
                                                                   {
                                                                      $sql=  mysql_query("SELECT * FROM club Where club_name LIKE '%$searchtxt%'  "); 
                                                                   }
                                                                              while($sqlresult= mysql_fetch_array($sql)) 
                                                                                 {
                                                                                     ?>

										<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box widget-color-blue">
											<div class="widget-header">
												<h5 class="widget-title bigger-110 bolder"><?php echo (strlen($sqlresult['club_name']) > 15) ? substr($sqlresult['club_name'],0,15).' . . .' : $sqlresult['club_name'];?></h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
                                                                                                     <?php
            if($sqlresult['club_image']=="")
            {
                ?>
            <img class="img-thumbnail dashboarimg-thumbnail"  src="images/default.png" />
             <?php
            }
         else {
             ?>
           <img src="images/club_photo/<?php echo $sqlresult['club_image'];?>" alt="..." class="img-thumbnail dashboarimg-thumbnail">
           <?php
               }
            ?>
                                                                                                     
                                                                                                   
													<ul class="list-unstyled spaced2">
														<li>
															<i class="ace-icon fa fa-envelope-o red"></i>
															<?php echo $sqlresult['user_emailid'];?>
														</li>

			

														<li>
															<i class="ace-icon fa fa-map-marker green "></i>
															<?php echo (strlen($sqlresult['club_address']) > 25) ? substr($sqlresult['club_address'],0,25).' . . .' : $sqlresult['club_address'];?>
														</li>
													</ul>

													<hr />
													<div class="price">
														<div class="pull-center ">
																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star orange2"></i>

																			<i class="ace-icon fa fa-star-half-o orange2"></i>

																			<i class="ace-icon fa fa-star light-grey"></i>
																		</div>
											
													</div>
												</div>
                                                                                                    <div>
													<a href="view-product-search-business.php?id=<?php echo $sqlresult['clubID'];?>" class="btn btn-sm btn-block btn-success center">
														<i class="ace-icon fa fa-fa fa-product-hunt bigger-110"></i>
														<span>View All Products</span>
													</a>
												</div>
                                                                                            <div>
													<a href="view-all-comment-business.php?id=<?php echo $sqlresult['clubID'];?>  " class="btn btn-sm btn-block btn-warning">
														<i class="ace-icon fa fa-comment bigger-110"></i>
														<span>View All Comments</span>
													</a>
												</div>
                                                                                            <div>
													<a href="view-all-message-business.php?id=<?php echo $sqlresult['clubID'];?> " class="btn btn-sm btn-block btn-info">
														<i class="ace-icon fa fa-envelope-o bigger-110"></i>
														<span>View All Messages</span>
													</a>
												</div>
											</div>
										</div>
									</div>
                                                           <?php
                                                                      }
                                                                      ?>
								</div>

								<div class="space-24"></div>
								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
					<?php
					    include "include/footer.php";
					?>
				</div>
			</div><!-- /.main-content -->
