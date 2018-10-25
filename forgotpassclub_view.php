<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tunng.co ::Business Registration</title>

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
</head>

<body style="overflow-y: 0px;overflow-x: 0px;">

<div class="container">
	<div class="row">
		<div class="col-md-4"  style="padding:0px;margin:0px"></div>
		<div class="col-xs-12 col-md-4 lovekesh" style="padding:0px;background:#F7F7F7">

		<!-- Form starting from here -->
    		<center>
                         <h4 style="color: #800080;">Business Forgot Password</h4>
			<div class="social-box">
	             	<!-- Start Slider section -->
					<div id="wowslider-container1" style="margin:0px;padding:0px;">
					<div class="ws_images">
						<ul>
						<li><img src="data1/images/slider2.jpg" alt="slider2" title="slider2" id="wows1_0"/></li>
						<li><img src="data1/images/slider09.jpg" alt="slider09" title="slider09" id="wows1_1"/></li>
						<li><img src="data1/images/slider10.jpg" alt="slider10" title="slider10" id="wows1_2"/></li>
						<li><img src="data1/images/slider11.jpg" alt="bootstrap image slider" title="slider11" id="wows1_3"/></li>
						<li><img src="data1/images/slider12.jpg" alt="slider12" title="slider12" id="wows1_4"/></li>
						</ul>
					</div>
					</div>	
					<script type="text/javascript" src="engine1/wowslider.js"></script>
					<script type="text/javascript" src="engine1/script.js"></script>
					<!-- End WOWSlider.com BODY section -->

				
			</div>
			</center>
			
			
			  
			<div class="main" style="padding-bottom:0px">
				<center>
                    <div class="form-group">
                        <?php
               if(isset($_SESSION['successmail']) && $_SESSION['successmail']!='')
                {
                    print "<div class='col-md-12 alert alert-success'>";
                        echo $_SESSION['successmail'];
                        unset($_SESSION['successmail']);
                    print "</div>";
                }
                ?>
               <?php
                    $stylenm="";
                    if( isset($errorlist['email_vali_null']) || isset($errorlist['email_vali'])  || isset($_SESSION['emailerror']))
                    {
                        $stylenm="display:block";
                    }
                    else
                    {
                        $stylenm="display:none";
                    }
                ?>

                        
                    	<div class="alert alert-danger  alert-dismissable" id="dqrerrorjs" style="<?php echo $stylenm;?>">
	                    	 <?php
                        if(isset($errorlist['email_vali_null']))
                        {
                            echo $errorlist['email_vali_null'];
                        }
                        if(isset($errorlist['email_vali']))
                        {
                            echo $errorlist['email_vali'];
                        }
                        if(isset($_SESSION['emailerror']))
                        {
                            echo $_SESSION['emailerror'];
                            unset($_SESSION['emailerror']);
                        }
                    ?>
                    	</div>
                    </div>
                                    <form method="post"  class="form-signin mg-btm" action="controller/forgotpassclub.php" style="margin:auto">
			
                    <div class="form-group">
						<input type="email" id="emailid" name="emailid" class="form-control" placeholder="Enter Your Email-id" required autofocus />
					</div>
                    <div class="form-group">
						<input type="submit" name="submit" value="Send"  class="btn btn-primary btn-block" style="background:#800080;border:1px solid #800080;font-weight: 600" onmouseover="this.style.background='#960196';this.style.border='1px solid #800080'" onmouseleave="this.style.background='#800080'" />
					</div>
                                </form>
		        	<!-- <div class="row">
						<div class="col-md-12">
			                
			                  <i class="icon-twitter"></i> 
			            </div>
			            <center>
			            	<a href="pin.php" style="color:#800080">Forgot password?</a>
			            </center>
		          	</div>
		        
		          	<div class="section">
		          		<br>
						<center>
							<a href="pin.php" style="color:#800080">Login via PIN</a>
						</center>
					</div> -->

				
        	</div>
        	
        	
         	<!-- ========= OR ========= -->
	        <table border="0" align="center" width="80%">
	        	<tr>
	        		<td width="40%">
	        			<hr style="border-width:2px">
	        		</td>
	        		<td rowspan="2" width="20%">
	        			<p style="color:black;text-align: center;margin:0px">OR</p>
	        		</td>
	        		<td width="40%">
	        			<hr style="border-width:2px;">
	        		</td>
	        	</tr>
	        	<tr><td></td><td></td></tr>
	        	<tr>
	        		<td colspan="3">
	        			<div class="main text-center" style="padding:15px">
				        	<div class="row">
							<div class="col-md-12"  style="padding:0px">
				                <a href="clublogin_view.php" class="btn btn-default form-control" style="border:1px solid #800080;color:#800080;" onmouseover="this.style.background='rgba(150, 1, 150, 0.1)'" onmouseleave="this.style.background='transparent'">
				                  <i class="icon-twitter"></i>   Login to site...
				                </a>
				            </div>
				          	</div>
				        </div>
	        		</td>
	        	</tr>
	        </table>
        
	        
	     

      <!-- Form ending -->
	</div>
	<div class="col-md-4"></div>
</div>

       
</body>
</html>