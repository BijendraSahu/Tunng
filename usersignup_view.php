<?php
session_start();
$errorlist="";
$datafield="";
if(isset($_SESSION['errorlist']))
{
    $errorlist=$_SESSION['errorlist'];
}
if(isset($_SESSION['datafield']))
{
    $datafield=$_SESSION['datafield'];
}
include 'function/countries.php';
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
        <link rel="stylesheet" type="text/css" href="css/tab.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
        <script type="text/javascript" src="assets/js/validation.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<body style="overflow-y: 0px;overflow-x: 0px;">
 <script type="text/javascript">
    $(document).ready(function(){
        //get states
         $('#ddlcountry').change(function(){
            var country=$(this).val();
            $.ajax({
                url:'controller/get-states.php',
                method:'POST',
                data:'country='+country,
                success: function(res) 
                {
                    $('#state').empty().append(res);
                }
            });
        });
         //get city
         $('#state').change(function(){
            var state=$(this).val();
            $.ajax({
                url:'controller/get-cities.php',
                method:'POST',
                data:'state='+state,
                success: function(res) 
                {
                    $('#city').empty().append(res);
                }
            });
        });
        
        //get states
         $('#country_mob').change(function(){
            var country=$(this).val();
            $.ajax({
                url:'controller/get-states.php',
                method:'POST',
                data:'country='+country,
                success: function(res) 
                {
                    $('#state_mob').empty().append(res);
                }
            });
        });
         //get city
         $('#state_mob').change(function(){
            var state=$(this).val();
            $.ajax({
                url:'controller/get-cities.php',
                method:'POST',
                data:'state='+state,
                success: function(res) 
                {
                    $('#city_mob').empty().append(res);
                }
            });
        });
        
    });
</script>   
<div class="container">
	<div class="row">
		<div class="col-md-4"  style="padding:0px;margin:0px"></div>
		<div class="col-xs-12 col-md-4 lovekesh" style="padding:0px;background:#F7F7F7">

		<!-- Form starting from here -->
    		<center>
                     <h4 style="color: #800080;">Member Sign Up</h4>
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

    <div class="row">
        <div class="col-md-12">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
<!--                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Signup via Mobile</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Signup via Emailid</a></li>
                     </ul>-->
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane " id="Section1">
                        <div id="result">
                            <div id="validno" style="display: none;" class="alert alert-danger"> Enter Valid Mobile Number</div>
                        </div>
                         <div id="otpform" >
                            <form  id="formotp" class="form-signin mg-btm" method="POST"  style="margin:auto">
                            <div class="form-group">
                              <label>Mobile Number</label>
                                <input type="text"  name="mobilenootp"  class="form-control mobilenootp" placeholder="Enter Mobile Number" id="phone"  maxlength="10" onkeyup="validatephone(this);" required autofocus />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit"  value="Generate OTP"  class="btn btn-primary btn-block" style="background:#800080;border:1px solid #800080;font-weight: 600" onmouseover="this.style.background='#960196';this.style.border='1px solid #800080'" onmouseleave="this.style.background='#800080'" />
                            </div>
                            </form>
                         </div>
                         <div id="regform_mobile" style="display: none;">
                         <form name="formmobile" id="formmobile"  class="form-signin mg-btm"  style="margin:auto">
			  
			<div class="main" style="padding-bottom:0px">
				<center>
 
                            <div class="form-group" id="errorboxm">

                            </div>
                                <div class="alert alert-danger" id="otpnotvalid" style="display: none;">
                                   Please Enter Valid OTP. 
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="mobno" value=""  class="form-control" id="mobno" />
                                    <input type="text"  name="enterotp"  class="form-control enterotp" placeholder="Enter OTP" id="phone"  maxlength="6" onkeyup="validatephone(this);" required />
			        </div>   
                                <div class="form-group">
                                     <input type="text" name="username" id="username" maxlength="25" class="form-control" placeholder="User Name" required autofocus />
				</div>
			        <div class="form-group">
			        	<input type="password" name="password"  maxlength="20" id="passwordm" class="form-control" placeholder="Password" required />
			        </div>
			        <div class="form-group">
			        	<input type="password" name="repassword"  maxlength="20" id="repasswordm" class="form-control" placeholder="Re-enter Password..." required />
			        </div>
                                           <div class="form-group">
                                                <select id="country_mob" name="ddlcountry"  class="form-country form-control" required="">
                                                    <option value="">Select Country </option>
                                                      <?php
                                                        $p= getCountries();
                                                        foreach($p as $countries){
                                                      ?>
                                                      <option value="<?php echo $countries;?>"><?php echo $countries;?></option>
                                                      <?php   
                                                        }
                                                      ?>                     
                                             </select>
                            </div>
                            <div class="form-group">
                                <select id="state_mob" name="state"  class="form-country form-control" required="">
                                                                     
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="city_mob" name="city_name"  class="form-country form-control" required="">
                                                                     
                                </select>
                            </div>
			        <div class="form-group">
			        	<input name="address" id="address"  maxlength="200" class="form-control" placeholder="Enter Address" required />
			    	</div>
			    	
                           	<div class="form-group">
					<input type="submit" name="submit" value="Sign up"  class="btn btn-primary btn-block" style="background:#800080;border:1px solid #800080;font-weight: 600" onmouseover="this.style.background='#960196';this.style.border='1px solid #800080'" onmouseleave="this.style.background='#800080'" />
				</div>

		        	 <div class="row">
						<div class="col-md-12">
			                
			                  <i class="icon-twitter"></i> 
			            </div>
			            <center>
			            	<a href="pin.php" style="color:#800080">Forgot password?</a>
			            </center>
		          	</div>
		        
<!--		          	<div class="section">-->
<!--		          		<br>-->
<!--						<center>-->
<!--							<a href="pin.php" style="color:#800080">Login via PIN</a>-->
<!--						</center>-->
<!--					</div> -->

				
        	</div>
        	
        	
         	 <!--========= OR =========--> 
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
				                <a href="login_view.php" class="btn btn-default form-control" style="border:1px solid #800080;color:#800080;" onmouseover="this.style.background='rgba(150, 1, 150, 0.1)'" onmouseleave="this.style.background='transparent'">
				                  <i class="icon-twitter"></i>   Login to site...
				                </a>
				            </div>
				          	</div>
				        </div>
	        		</td>
	        	</tr>
	        </table>
        
	        
	        </form>
                    </div>
                    </div>
                   
                    
                    
                    <div role="tabpanel" class="tab-pane fade in active" id="Section2">
                        <form name="form1" id="form1"  class="form-signin mg-btm"  style="margin:auto">
			  
			<div class="main" style="padding-bottom:0px">
				<center>
 
                    <div class="form-group" id="errorbox">
                    	
                    </div>
                                <div class="alert alert-danger" id="allfields" style="display: none;">
                                    All fields is require. 
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" maxlength="25" class="form-control" placeholder="User Name" required autofocus />
                                </div>
			        <div class="form-group">
			        	<input type="text" name="email"  maxlength="25" id="email" class="form-control" placeholder="Email-id" required />
			        </div>
			        <div class="form-group">
			        	<input type="password" name="password"  maxlength="20" id="password" class="form-control" placeholder="Password" required />
			        </div>
			        <div class="form-group">
			        	<input type="password" name="repassword"  maxlength="20" id="repassword" class="form-control" placeholder="Re-enter Password..." required />
			        </div>
                                      <div class="form-group">
                                                <select id="ddlcountry" name="ddlcountry"  class="form-country form-control" required="">
                                                    <option value="">Select Country </option>
                                                      <?php
                                                        $p= getCountries();
                                                        foreach($p as $countries){
                                                      ?>
                                                      <option value="<?php echo $countries;?>"><?php echo $countries;?></option>
                                                      <?php   
                                                        }
                                                      ?>                     
                                             </select>
                            </div>
                            <div class="form-group">
                                <select id="state" name="state"  class="form-country form-control" required="">
                                                                     
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="city" name="city_name"  class="form-country form-control" required="">
                                                                     
                                </select>
                            </div>
			        <div class="form-group">
			        	<textarea name="address" id="address"  maxlength="45" class="form-control" placeholder="Enter Address" required ></textarea>
			    	</div>
                           	<div class="form-group">
					<input type="submit" name="submit" value="Sign up"  class="btn btn-primary btn-block" style="background:#800080;border:1px solid #800080;font-weight: 600" onmouseover="this.style.background='#960196';this.style.border='1px solid #800080'" onmouseleave="this.style.background='#800080'" />
				</div>
		        	<div class="row">
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
				</div> 

        	</div>
         	 <!--========= OR =========--> 
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
				                <a href="login_view.php" class="btn btn-default form-control" style="border:1px solid #800080;color:#800080;" onmouseover="this.style.background='rgba(150, 1, 150, 0.1)'" onmouseleave="this.style.background='transparent'">
				                  <i class="icon-twitter"></i>   Login to site...
				                </a>
				            </div>
				          	</div>
				        </div>
	        		</td>
	        	</tr>
	        </table>
	        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
               
            <?php
            if(isset($_SESSION['register_email']) && $_SESSION['register_email']!='')
            {
                print "<div class='alert alert-danger'>";
                echo $_SESSION['register_email'];
                unset($_SESSION['register_email']);
                print "</div>";
            }
            ?>
            
            <?php
            if(isset($_SESSION['register_username']) && $_SESSION['register_username']!='')
            {
                print "<div class='alert alert-danger'>";
                echo $_SESSION['register_username'];
                unset($_SESSION['register_username']);
                print "</div>";
            }
            ?>
                
<script type="text/javascript">
$(document).ready(function() {
     $("#formotp").submit(function(){
          var formData2 = new FormData($(this)[0]);
          var mobileno=$('.mobilenootp').val();
          var lenghtno=((mobileno).length);
          if(lenghtno==10){
              $.ajax({
                        url:'controller/otp-genrate_member.php',
                        method:'POST',
                        enctype: 'multipart/form-data',
                        data: formData2,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
     
                        success: function(results) 
                        {
                         // alert(results);
                         var lenghtno=((results).length); 
                         if(lenghtno == 73){
                        $("#result").empty().append(results);
                        $("#regform_mobile").css('display','block');
                        $("#otpform").css('display','none');
                        $('#mobno').val(mobileno); 
                         }
                         else{
                             $("#result").empty().append(results);
                         }
                        
                        }
        }) 
          }else{
              $('#validno').css('display','block');
          }
            
         return false;  
    });
    
    
    $("#repassword").keyup(function(){
         var password=$('#password').val();
         var reenterpassword=$('#repassword').val();
   if(password ==reenterpassword){
       $("#repassword").css("background-color", "green");
   }else{
       $("#repassword").css("background-color", "red");
   }
});

   $("#password").keyup(function(){
         var password=$('#password').val();
         var reenterpassword=$('#repassword').val();
   if(reenterpassword!=''){
       if(password ==reenterpassword){
       $("#repassword").css("background-color", "green");
   }else{
       $("#repassword").css("background-color", "red");
   }
   }
});

//======================mobile==================
   
    $("#repasswordm").keyup(function(){
         var password=$('#passwordm').val();
         var reenterpassword=$('#repasswordm').val();
   if(password ==reenterpassword){
       $("#repasswordm").css("background-color", "green");
   }else{
       $("#repasswordm").css("background-color", "red");
   }
});

   $("#passwordm").keyup(function(){
         var password=$('#passwordm').val();
         var reenterpassword=$('#repasswordm').val();
   if(reenterpassword!=''){
       
       if(password ==reenterpassword){
       $("#repasswordm").css("background-color", "green");
   }else{
       $("#repasswordm").css("background-color", "red");
   }
   }
    
});
    
   $('#form1').submit(function(){
        var formData = new FormData($(this)[0]);
        
            var username=$('#username').val();
            var email=$('#email').val();
            
            var password=$('#password').val();
            var reenterpassword=$('#repassword').val();
            var address=$('#address').val();
             
                     if(password ==reenterpassword){
                       $.ajax({
                        url:'controller/user-registration.php',
                        method:'POST',
                        enctype: 'multipart/form-data',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,

                        success: function(results) 
                        {
                         $("#errorbox").empty().append(results);    
                         //alert(results);
                        }
                    });  

                   }else{
                       $("#repassword").css("background-color", "red");
                   }
                     
                
           return false;          
        });
        
    $('#formmobile').submit(function(){
       
        var formData = new FormData($(this)[0]);
        
            var enterotp=$('.enterotp').val();
            var genratedotp=$('#genratedotp').val();
           
            var password=$('#passwordm').val();
            var reenterpassword=$('#repasswordm').val();
           
                   
              if(enterotp == genratedotp)
              {
                     if(password ==reenterpassword){
                       $.ajax({
                        url:'controller/user-registration.php',
                        method:'POST',
                        enctype: 'multipart/form-data',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,

                        success: function(resultsm) 
                        {
                            //alert(resultsm);
                         $("#errorboxm").empty().append(resultsm);    
                        
                        }
                    });  

                   }else{
                       $("#repasswordm").css("background-color", "red");
                   }
                     
                 }
                 else{
                 $('#otpnotvalid').css('display','block');
                 }
           return false;          
        });     
});</script>         

      <!-- Form ending -->
	</div>
	<div class="col-md-4"></div>
</div>
</div>
       
</body>
</html>