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
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Search Business</a>
							</li>
                                                        <li>
								<a href="#">View All Products</a>
							</li>
							<li class="active">Payment</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						

						<div class="page-header">
							<h1><!--Congratulation-->  Thank you for order </h1>
						</div><!-- /.page-header -->

						<div class="row">
						   <div class="col-xs-6 col-md-offset-3">
          <div class="well" style="background-image: url('images/background.jpg ');color:#FEE79B;font-size:25px; ">
              <?php 
               if(isset($_SESSION['registration_success']) && $_SESSION['registration_success']!=''&& isset($_SESSION['buyer_details']) && $_SESSION['buyer_details']!='')
                                {
                                    echo $_SESSION['registration_success'];
                                    echo $_SESSION['buyer_details'];
                                    unset($_SESSION['registration_success']);
                                    unset($_SESSION['buyer_details']);
                                    print "</p>";
                                }
                                ?>
          </div>
        <div class="col-md-12">
          
          <?php //print_r($_SESSION);?>
          
          
<!--          Dear , <?php echo $_SESSION['username'];?> thanks for your order. we will contact you soon.-->
          
          <!--<a href="https://www.sbi.co.in/" target="_blank">
              State Bank of India
          </a><br/>
          <a href="https://www.icicibank.com/" target="_blank">
              ICICI Bank
          </a><br/>
          <a href="https://www.axisbank.com/" target="_blank">
              Axis Bank
          </a><br/>
          <a href="http://www.kotak.com/" target="_blank">
              Kotak Mahindra Bank
          </a><br/>
          <a href="http://www.indusind.com/" target="_blank">
              IndusInd Bank
          </a><br/>
          <a href="http://www.bankofbaroda.co.in/" target="_blank">
              Bank of Baroda
          </a><br/>
          <a href="https://www.yesbank.in/" target="_blank">
              Yes Bank
          </a>-->
          

          </div>
      </div>
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php
                include "include/footer.php";
?>