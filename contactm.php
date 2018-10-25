<?php
include "include/header.php";
include "include/sidebar.php";
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

							
							<li class="active"><a href="contactm.php">Contact Us</a></li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
					

						<div class="page-header">
							<h1>Contact Us </h1>
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
								<!-- PAGE CONTENT BEGINS -->
							
<form method="POST" action="controller/contactm-us-submit.php" class="form-horizontal">
<fieldset>
<div class="form-group">
    <label class="col-md-4 control-label" style="color:;margin-top: 10px;font-size: 16px;" for="blood_group">Subject</label>
  <div class="col-md-4">
    <select id="subject" name="subject" class="form-control" required>
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
  <label class="col-md-4 control-label" style="color:;margin-top: 10px;font-size: 16px;" for="name">Name</label>  
  <div class="col-md-4">
  <input value="<?php if(isset($datafield['afname'])) echo $datafield['afname'];?>"  id="f_name" name="f_name" type="text" maxlength="25" placeholder="Enter your name" class="form-control" required>
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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" style="color:;margin-top: 10px;font-size: 16px;" for="email">Email-Id</label>  
  <div class="col-md-4">
  <input  value="<?php if(isset($datafield['aemail'])) echo $datafield['aemail'];?>" id="email" name="email" type="email" placeholder="Enter your email id" class="form-control " required>
    
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

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" style="color:;margin-top: 10px;font-size: 16px;" for="contact">Contact No.</label>  
 
  <div class="col-md-4">
  <input value="<?php if(isset($datafield['amob_no'])) echo $datafield['amob_no'];?>" id="mob_no" name="mob_no" type="text" placeholder="Enter your contact no." class="form-control " required >
  </div>
  <?php
  $stylenm="";
        if(isset($errorlist['mob_null']) || isset($errorlist['mob_vali']) || isset($errorlist['mob_digit']) )
        {
            $stylenm="display:block";
        }
        else
        {
            $stylenm="display:none";
        }
  ?>
  <div class=" col-md-3 alert alert-danger" id="mobilejs" style="margin-top:10px;padding:4px;<?php echo $stylenm;?>">
    <?php
        if(isset($errorlist['mob_null']))
        {
            echo $errorlist['mob_null'];
        }
        if(isset($errorlist['mob_vali']))
        {
            echo $errorlist['mob_vali'];
        }
        if(isset($errorlist['mob_digit']))
        {
            echo $errorlist['mob_digit'];
        }
    ?>
  </div>
</div>


  
<div class="form-group">
  <label class="col-md-4 control-label" style="color:;margin-top: 10px;font-size: 16px;" for="area">Message</label>  
  <div class="col-md-4">
      <textarea value="<?php if(isset($datafield['amessage'])) echo $datafield['amessage'];?>" placeholder="Your Message" name="message" id="message" type="text" style="width:100%" class="con_txt_3" tabindex="4" required></textarea>
    
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


<div class="form-group">
  
  <div class="col-md-11 text-center">
<input type="submit" class="btn btn-info" value="Submit">
  </div>
</div>
                    <div class="col-md-4"></div>
                    <div class="col-md-6" >
                            <div class="company_address">
                                <h4 style="color:#2669B2;font-weight:bolder;">Address :</h4>
                                <p>9thavenue , wonderboom , pretoria,</p>
                                <p >South Africa</p>
                                <p >Email : <a href="#">contact@tunng.co</a></p>
                            </div>
			</div>
</fieldset>
    </form>
								


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
          <?php
          include "include/footer.php";

          unset($_SESSION['datafield']);
          unset($_SESSION['errorlist']);
          unset($_SESSION['successmsg']);

          ?>
				</div>
			</div><!-- /.main-content -->

			
