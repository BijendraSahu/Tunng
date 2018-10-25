<?php
include "include/header_bus.php";
include "include/sidebar_bus.php";
include 'controller/connection.php';
include 'function/countries.php';

?>
<body style="overflow-x:none !important;">
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
							<li class="active">Show Category List</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						

						<div class="row">
							<div class="col-xs-12">

                            	<!-- Starting Slider -->
                                                            <div class="container"> 
								  <div id="myCarousel" class="carousel slide" data-ride="carousel">
								    <!-- Indicators -->
								    <ol class="carousel-indicators">
								      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								      <li data-target="#myCarousel" data-slide-to="1"></li>
								      <li data-target="#myCarousel" data-slide-to="2"></li>
								      <li data-target="#myCarousel" data-slide-to="3"></li>
								    </ol>

								    <!-- Wrapper for slides -->
								    <div class="carousel-inner">
								      <div class="item active">
								        <img src="images/category-images/CI02.jpg" alt="Los Angeles" class="img-responsive casli">
								      </div>

								      <div class="item">
								        <img src="images/category-images/CI01.jpg" alt="Chicago" class="img-responsive casli">
								      </div>
								    
								      <div class="item">
								        <img src="images/category-images/CI03.jpg" alt="New york" class="img-responsive casli">
								      </div>

								      <div class="item">
								        <img src="images/category-images/CI04.jpg" alt="New york" class="img-responsive casli">
								      </div>
								    </div>

								    <!-- Left and right controls -->
								    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
								      <span class="glyphicon glyphicon-chevron-left"></span>
								      <span class="sr-only">Previous</span>
								    </a>
								    <a class="right carousel-control" href="#myCarousel" data-slide="next">
								      <span class="glyphicon glyphicon-chevron-right"></span>
								      <span class="sr-only">Next</span>
								    </a>
								  </div>
								</div>
								<!-- End slider -->
								<br>
								<h4>  &nbsp;&nbsp;&nbsp;Category List</h4>
								<?php $p= getCategories();
                                                                                foreach($p as $category)
                                                                                {
                                                                                    ?>
                                                                                   <div class="panel panel-default panel-def-mar">
									<div class="panel panel-body tunng-cotegory-panel">
										<div class="col-md-1 col-xs-4  col-sm-2">
											<img src="images/gr-img/gr4.png" class="img-responsive">
										</div>
										<div class="col-md-11 col-xs-8  col-sm-10">
                                                                                    <a target="_blank" href="Viewproduct.php?cat=<?php echo $category;?>"><h4><?php echo $category;?></h4></a>
<!--											<h6>
												Logo Design, Photoshop edition
											</h6>-->
										</div>
									</div>
								</div>  
                                                                          <?php
                                                                                }?>
                                                               
								              
                                                            
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div>

<link rel="stylesheet" type="text/css" href="css/style18.css" />
<?php
    include "include/footerb.php";
?>