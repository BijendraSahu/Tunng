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

							<li>
								<a href="contact.php">Contact Us</a>
							</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Contact Us
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
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
							<div class="col-xs-12">


								<!-- FORM BEGINS -->
								<form method="post" action="controller/contact-us-submit.php" role="form" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> SUBJECT </label>

										<div class="col-sm-9">
											<select id="subject" name="subject" placeholder="Time" class="col-xs-10 col-sm-5" required="required">
												<option value="">Select Subject</option>
                                                                                                <option value="Change Order">Change Order</option>
                                                                                                <option value="Franchisee">Franchisee</option>
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
											<input maxlength="25" value="<?php if(isset($datafield['afnamep'])) echo $datafield['afnamep'];?>" id="f_name" name="f_name"  placeholder="Product Name" class="col-xs-10 col-sm-5" type="text"  required>
										</div>
                                                                                <?php
                                                                                      $stylenm="";
                                                                                            if(isset($errorlist['f_name_null']) || isset($errorlist['f_name_char']))
                                                                                            {
                                                                                                $stylenm="display:block";
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                                $stylenm="display:none";
                                                                                            }
                                                                                      ?>
                                                                                      <div class="col-md-3 alert alert-danger" id="namejs" style="margin-top:10px;padding:4px;<?php echo $stylenm;?>">
                                                                                        <?php
                                                                                            if(isset($errorlist['f_name_null']))
                                                                                            {
                                                                                                echo $errorlist['f_name_null'];
                                                                                            }
                                                                                            if(isset($errorlist['f_name_char']))
                                                                                            {
                                                                                                echo $errorlist['f_name_char'];
                                                                                            }
                                                                                        ?>
                                                                                      </div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> EMAIL </label>

										<div class="col-sm-9">
											<input value="<?php if(isset($datafield['aemail'])) echo $datafield['aemail'];?>" id="email" name="email" placeholder="Enter your email id" class="col-xs-10 col-sm-5" type="email"  required>
										</div>
                                                                                 <?php
                                                                              $stylenm="";
                                                                                    if(isset($errorlist['email_vali_null']) ||  isset($errorlist['email_vali']) )
                                                                                    {
                                                                                        $stylenm="display:block";
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                        $stylenm="display:none";
                                                                                    }
                                                                              ?>
                                                                              <div class="col-md-3 alert alert-danger" id="emailjs" style="margin-top:10px;padding:4px;<?php echo $stylenm;?>">
                                                                                <?php
                                                                                    if(isset($errorlist['email_vali_null']))
                                                                                    {
                                                                                        echo $errorlist['email_vali_null'];
                                                                                    }
                                                                                    if(isset($errorlist['email_vali']))
                                                                                    {
                                                                                        echo $errorlist['email_vali'];
                                                                                    }
                                                                                ?>
                                                                              </div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> CONTACT NO. </label>

										<div class="col-sm-9">
											<input maxlength="10" value="<?php if(isset($datafield['amob_no'])) echo $datafield['amob_no'];?>" id="mob_no" name="mob_no" placeholder="Enter your contact no." class="col-xs-10 col-sm-5" type="text"  required>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> MESSAGE </label>

										<div class="col-sm-9">
											<textarea value="<?php if(isset($datafield['amessage'])) echo $datafield['amessage'];?>" placeholder="Your Message" name="message" id="message" class="col-xs-10 col-sm-5" type="text" required></textarea>
										</div>
                                                                                 <?php
                                                                                      $stylenm="";
                                                                                            if(isset($errorlist['msg_null']) )
                                                                                            {
                                                                                                $stylenm="display:block";
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                                $stylenm="display:none";
                                                                                            }
                                                                                      ?>
                                                                                      <div class="col-md-3 alert alert-danger" id="messagejs" style="margin-top:10px;padding:4px;<?php echo $stylenm;?>">
                                                                                        <?php
                                                                                            if(isset($errorlist['msg_null']))
                                                                                            {
                                                                                                echo $errorlist['msg_null'];
                                                                                            }

                                                                                        ?>
                                                                                      </div>
									</div>

									<!-- <div class="clearfix form-actions"> -->
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
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


