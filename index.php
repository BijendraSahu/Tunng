<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tunng</title>


        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="css/ace.min.css" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="css/ace-part2.min.css" />
        <![endif]-->
        <link rel="stylesheet" href="css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="css/ace-ie.min.css" />
        <![endif]-->

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->


        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
        <!--        my css-->
        <link href="css/My.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/211017.css">
        <link href="css/slider.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body class="body_section">

        <!-- Top content -->
        <div class="banner">
            <container style="height: 833px;">
            
            <center>    
                <div class="login-layout"  style="background:transparent !important;position:relative;z-index: 1000" >



        <div class="main-container">

            <div class="main-content">

                <div class="row">
                    
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container" style="border:1px solid #ffffff;margin-top:20px;background: rgba(255,255,255,0.7);">

                            <div class="center">
                                <span><strong style="font-family:Century Gothic;font-size:55px;"><b style="color:#4286F1">T</b><b style="color:#FF2A2C">u</b><b style="color:#EBBE1D">n</b><b style="color:#4286F3">n</b><b style="color:#31A854">g</b></strong></span>               
                                            <br><span class="tutitle" style="color:#ffffff !important;font-weight: ">Empowering Business</span>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border transparent">

            <!-- body -->
            <div class="widget-body">
                                        
                <!-- <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
                            
                            <i class="fa fa-user" aria-hidden="true"></i>

                            
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
                            
                            <span class="glyphicons glyphicons-group" aria-hidden="true"></span>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            
                        </button>
                    </div>
                </div> -->
        <div class="">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
              
              <div class="widget-main transparent">
                                            <!-- <h4 class="header blue lighter bigger transparent">
                                                <i class="ace-icon fa fa-key"></i>
                                                <b>Business login</b>
                                            </h4> -->

                                            <h3 class="blue bolder">Select Your Category</h3>

                                            <a href="clublogin_view.php" class="btn btn-primary" style="border:1px solid #800080">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                Business
                                            </a>
                                            <a href="login_view.php" class="btn btn-primary" style="border:1px solid #800080">
                                                <i class="fa fa-users" aria-hidden="true"></i>
                                                Member
                                            </a>
                                            <div class="space-6"></div>

                                            <form  method="GET"  action="searchresfrount.php" class="navbar-form navbar-center" id="search_user" name="search_user" onsubmit="return checkvalue();" style="padding:0px">
                                                <div class="">
                                                    <input type="search" id="searchtxt" name="searchtxt" placeholder="What product are you looking for..." class="form-control searchbar" style="width:80% !important;border:1px solid #800080">
                                                    <button type="submit"  class="tusearchbtn" style="background-color:#800080;color:#fff;height:34px!important;width:20% !important;">
                                                        <i class="fa fa-search fa-1x" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </form>

                                            <div class="space-10"></div>
                                                
                                            <a href="aboutf.php"><h4 class="pull-left">About Us</h4></a>
                                            <a href="contactf.php"><h4 class="pull-right">Contact Us</h4></a>
                                            <!-- <center> -->
                                                <img src="images/downloadnow.png" align="center" style="width:80%">

                                                <div class="col-md-6 col-xs-6" style="padding:0px">
                                                    <a href="https://play.google.com/store/apps/details?id=com.db.tunngs&hl=en" target="_blank">
                                                        <img src="images/playstor_a.png" class="img-responsive">
                                                    </a>                                                 
                                                </div>
                                                    <!-- <div class="col-md-2"></div> -->
                                                <div class="col-md-6 col-xs-6" style="padding:0px">
                                                    <img src="images/playstor_app.png" class="img-responsive">
                                                </div>

                                            <!-- </center> -->
                                            <div class="space-10"></div>
                                            <style>
                                            .searchbar {float:left !important;
                                                width:80% !important;}
                                            .searchbtn {float:right !important;
                                                width: 20% !important;
                                                background:#800080 !important;
                                                border:0px !important;
                                                padding:8px !important;
                                                color:#ffffff;}
                                            .searchbtn:hover {
                                                    background:#960196 !important;
                                                }
                                            .tusearchbtn {
                                                    width: 20% !important;
                                                    border: 1px solid #800080;
                                                    border-radius: 0px;
                                                }
                                        </style>
                                            <!-- FORM FOR BUSINESS LOGIN  -->
                                <form method="POST" action="controller/club-login.php" class="login-form">

                                    <?php
                                if(isset($_SESSION['registration_success']) && $_SESSION['registration_success']!='')
                                {
                                    print "<div class='alert alert-success'><p style='text-align:justify;'>";
                                    echo $_SESSION['registration_success'];
                                    unset($_SESSION['registration_success']);
                                    print "</p></div>";
                                }
                                if(isset($_GET['verification']) && $_GET['verification']!='')
                                {
                                    include './controller/connection.php';
                                    $sql=  mysql_query("Select * from club where verification_code='".$_GET['verification']."'");
                                    echo mysql_error();
                                    if(mysql_num_rows($sql)==1)
                                    {
                                        $sql=  mysql_query("Update club SET verification_code='done' where verification_code='".$_GET['verification']."'");
                                        print "<div class='alert alert-success'>";
                                        echo "Your Email Verification is complete successfully, please login.";
                                        print "</div>";
                                    }
                                }
                                if(isset($_SESSION['emailvarificationerr']) && $_SESSION['emailvarificationerr']!='')
                                {
                                    print "<div class='alert alert-danger'><p style='text-align:justify;'>";
                                    echo $_SESSION['emailvarificationerr'];
                                    unset($_SESSION['emailvarificationerr']);
                                    print "</p></div>";
                                }
                                if(isset($_SESSION['incorrectusernm']) && $_SESSION['incorrectusernm']!='')
                                {
                                    print "<div class='alert alert-danger'><p style='text-align:justify;'>";
                                    echo $_SESSION['incorrectusernm'];
                                    unset($_SESSION['incorrectusernm']);
                                    print "</p></div>";
                                }
                                if(isset($_SESSION['allfieldreq']) && $_SESSION['allfieldreq']!='')
                                {
                                    print "<div class='alert alert-danger'><p style='text-align:justify;'>";
                                    echo $_SESSION['allfieldreq'];
                                    unset($_SESSION['allfieldreq']);
                                    print "</p></div>";
                                }
                                ?>

                                    <fieldset>
                                                    <!-- <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" name="username" class="form-control" placeholder="Username" />
                                                            <i class="ace-icon fa fa-user bluecolor"></i>
                                                        </span>
                                                    </label>
                                                    <div class="form-group" id="password">
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="password" name="password" class="form-control" placeholder="Password" >
                                                                <i class="ace-icon fa fa-lock bluecolor"></i>
                                                            </span>
                                                        </label>
                                                    </div> -->
                                                    
                                  
                                  <!-- <div class="form-group">
                                      <div id="input_fields_wrap">
                                          <input type="password" name="pin1" id="pin1" maxlength="1" class="pindigit">
                                          <input type="password" name="pin2" id="pin2" maxlength="1" size="1" class="pindigit">
                                          <input type="password" name="pin3" id="pin3" maxlength="1" size="1" class="pindigit">
                                          <input type="password" name="pin4" id="pin4" maxlength="1" size="1" class="pindigit">
                                           <a href="#" class="btn remove_field transparent">
                                               <i class="fa fa-refresh" aria-hidden="true"></i>
                                           </a> 
                                      </div>
                                  </div> -->
                                                    <!-- <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <button type="submit" name="submit" class="width-100 btn btn-sm btn-primary">
                                                                <i class="ace-icon fa fa-paper-plane"></i>
                                                                <span class="bigger-110">Login</span>
                                                            </button>
                                                        </span>
                                                    </label> -->
                                      <div class="clearfix">
                                           
                                      </div>
                                      <div class="space-2"></div>
                                    </fieldset>
                                </form>


                                            <!-- <div class="social-or-login center" id="pin_text">
                                                <span class="bigger-110">OR LOGIN VIA PIN</span>
                                            </div>
                                            <div class="social-or-login center" id="pass_text">
                                                <span class="bigger-110">OR LOGIN VIA PASSWORD</span>
                                            </div> -->
                                            

                                            <div class="space-1"></div>

                                            <div class="social-login center">
                                                <!-- <a class="btn btn-primary" id="add_pin_button" onclick="toggleOn1()">
                                                    <i class="ace-icon fa fa-th-large" title="login via pin"></i>
                                                </a>
                                                <a class="btn btn-primary"  id="switch_pass" onclick="toggleOff1()">
                                                    <i class="ace-icon fa fa-th" title="login via pin"></i>
                                                </a> -->
 <script>
 function toggleOn1() {
 // alert("on");
     $('#password').hide();
     $('#add_pin_button').hide();
      $('#switch_pass').show();
      $('#pin_text').hide();
      $('#pass_text').show();
      $('#input_fields_wrap').show()
     
  }
  function toggleOff1() {
     // alert("off");
       $('#password').show();
        $('#add_pin_button').show();
      $('#switch_pass').hide();
      $('#pin_text').show();
      $('#pass_text').hide();
$('#input_fields_wrap').hide()
  }
                            $('#pin1').keyup(function (event) {
                             
                                    var lenghtp1=($('#pin1').length);
                                if (lenghtp1 === 1) {
                                    event.preventDefault();
                                    $(this).next('#pin2').focus();
                                }
                            });
                             $('#pin2').keyup(function (event) {
                                    var lenghtp1=($('#pin2').length);
                                if (lenghtp1 === 1) {
                                    event.preventDefault();
                                    $(this).next('#pin3').focus();
                                }
                            });
                             $('#pin3').keyup(function (event) {
                                    var lenghtp1=($('#pin3').length);
                                if (lenghtp1 === 1) {
                                    event.preventDefault();
                                    $(this).next('#pin4').focus();
                                }
                            });
  $('.remove_field').click(function(e){
          $('#pin1').val('');
        $('#pin2').val('');
      $('#pin3').val('');
        $('#pin4').val('');
      
        });
           $(document).ready(function() {
                                            
         $('#switch_pass').hide();
        $('#input_fields_wrap').hide();
        $('#pin_text').show();
      $('#pass_text').hide();

    });
 </script>
                                            </div>
                                        </div>


                                        <!-- <div class="toolbar clearfix">
                                            <div>
                                                <a href="#" data-target="#forgot-box" class="forgot-password-link" style="color:#ffffff">
                                                    <i class="ace-icon fa fa-chevron-left"></i>
                                                    <i class="fa fa-unlock hidden-md hidden-sm hidden-lg" aria-hidden="true"></i>
                                                    <span class="hidden-xs">Forgot password</span>
                                                </a>
                                            </div>

                                            <div>
                                                <a href="#" data-target="#signup-box" class="user-signup-link" style="color:#ffffff">

                                                    <span class="hidden-xs">Want to register</span>
                                                    <i class="fa fa-user-plus hidden-md hidden-sm hidden-lg" aria-hidden="true"></i>
                                                    <i class="ace-icon fa fa-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div> -->
                                </div>
                                <div class="tab-pane fade in" id="tab2">
                                 <!--  <h3>This is tab 2</h3> -->

                                  <div class="widget-main transparent">
                                            <h4 class="header blue lighter bigger transparent">
                                                <i class="ace-icon fa fa-key"></i>
                                                <b>Member login</b>
                                            </h4>

                                            <div class="space-6"></div>

                                    
                                    <form>
                                        <fieldset>
                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input name="" type="text" class="form-control" placeholder="Username">
                                                    <i class="ace-icon fa fa-user bluecolor"></i>
                                                </span>
                                            </label>
                                            <div class="form-group" id="passwordd">
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input name="" type="password" class="form-control" placeholder="Password">
                                                        <i class="ace-icon fa fa-lock bluecolor"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        <!-- BUTTONS -->
                                        <div class="form-group">
                                        <div id="input_fields_wrapp">
                                        <input name="pin11" id="pin11" type="password" maxlength="1" size="1" class="pindigit">
                                        <input name="pin22" id="pin22" type="password" maxlength="1" size="1" class="pindigit">
                                        <input name="pin33" id="pin33" type="password" maxlength="1" size="1" class="pindigit">
                                        <input name="pin44" id="pin44" type="password" maxlength="1" size="1" class="pindigit">
                                            <a href="#" class="remove_fieldd btn transparent">
                                               <i class="fa fa-refresh" aria-hidden="true"></i>
                                            </a> 
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <button type="submit" class="width-100 btn btn-sm btn-primary">
                                                <span class="">Login</span>
                                            </button>
                                        </div>
                                        <div class="space-2"></div>
                                        </fieldset>
                                    </form>
                                        <div class="social-or-login center" id="pin_text2">
                                            <span class="bigger-110">OR LOGIN VIA PIN</span>
                                        </div>
                                        <div class="social-or-login center" id="pass_text2">
                                            <span class="bigger-110">OR LOGIN VIA PASSWORD</span>
                                        </div>
                                        <div class="space-1"></div>
                                            <div class="social-login center">
                                                <a class="btn btn-primary"  id="switch_passs" onclick="toggleOff2()">
                                                    <i class="ace-icon fa fa-th" title="login via pin"></i>
                                                </a>
                                                <a class="btn btn-primary" id="add_pin_buttonn" onclick="toggleOn2()">
                                                    <i class="ace-icon fa fa-th-large" title="login via pin"></i>
                                                </a>

<script>
 function toggleOn2() {
 // alert("on");
     $('#passwordd').hide();
     $('#add_pin_buttonn').hide();
      $('#switch_passs').show();
      $('#pin_text2').hide();
      $('#pass_text2').show();
      $('#input_fields_wrapp').show()
     
  }

  function toggleOff2() {
     // alert("off");
       $('#passwordd').show();
        $('#add_pin_buttonn').show();
      $('#switch_passs').hide();
      $('#pin_text2').show();
      $('#pass_text2').hide();
$('#input_fields_wrapp').hide()
  }
                            $('#pin11').keyup(function (event) {
                             
                                    var lenghtp1=($('#pin11').length);
                                if (lenghtp1 === 1) {
                                    event.preventDefault();
                                    $(this).next('#pin22').focus();
                                }
                            });
                             $('#pin22').keyup(function (event) {
                                    var lenghtp1=($('#pin22').length);
                                if (lenghtp1 === 1) {
                                    event.preventDefault();
                                    $(this).next('#pin33').focus();
                                }
                            });
                             $('#pin33').keyup(function (event) {
                                    var lenghtp1=($('#pin33').length);
                                if (lenghtp1 === 1) {
                                    event.preventDefault();
                                    $(this).next('#pin44').focus();
                                }
                            });
  $('.remove_fieldd').click(function(e){
          $('#pin11').val('');
        $('#pin22').val('');
      $('#pin33').val('');
        $('#pin44').val('');
      
        });
           $(document).ready(function() {
                                            
         $('#switch_passs').hide();
        $('#input_fields_wrapp').hide();
        $('#pin_text2').show();
      $('#pass_text2').hide();

    });
 </script>
                                            </div>
                                        </div>

            </div>
            <div class="tab-pane fade in" id="tab3">
              <h3>This is tab 3</h3>
            </div>
          </div>
    </div>
    <script>
        $(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
    </script>
                    </div>
                </div>

                                <div id="forgot-box" class="forgot-box widget-box no-border transparent">
                                    <div class="widget-body transparent">
                                        <div class="widget-main transparent">
                                            <h4 class="header red lighter bigger transparent redcolor">
                                                <i class="ace-icon fa fa-key"></i>
                                                <b>Forgot password</b>
                                            </h4>

                                            <div class="space-6"></div>
                                            <p style="color:#ffffff">
                                                Enter your email to get reset password link.
                                            </p>

                                            
                                            <form >
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input name="" type="email" class="form-control" placeholder="E-mail" />
                                                            <i class="ace-icon fa fa-user redcolor"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <button type="submit" class="width-100 btn btn-sm btn-danger">
                                                                <i class="ace-icon fa fa-paper-plane"></i>
                                                                <span class="bigger-110">Send</span>
                                                            </button>
                                                        </span>
                                                    </label>

                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="toolbar center danger">
                                            <a href="#" data-target="#login-box" class="back-to-login-link" style="color:#ffffff">
                                                <span class="hidden-xs">Back to login</span>
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="signup-box" class="signup-box widget-box no-border transparent">
                                    <div class="widget-body transparent">
                                        <div class="widget-main transparent">
                                            <h4 class="header green lighter bigger transparent">
                                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                                <b>New User Registration</b>
                                            </h4>

                                            <div class="space-6"></div>
                                            <p style="color:#ffffff"> Enter your details to begin: </p>


                                            
                                            <form method="post" action="">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input name="" type="email" class="form-control" placeholder="Email" />
                                                            <i class="ace-icon fa fa-envelope greencolor"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input name="" type="text" class="form-control" placeholder="Username" />
                                                            <i class="ace-icon fa fa-user greencolor"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input name="" type="password" class="form-control" placeholder="Password" />
                                                            <i class="ace-icon fa fa-lock greencolor"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input name="" type="password" class="form-control" placeholder="Repeat password" />
                                                            <i class="ace-icon fa fa-retweet greencolor"></i>
                                                        </span>
                                                    </label>
                                                    
                                                    
                                                    
                                                    <label class="block" for="lbl">
                                                        <input type="checkbox" id="lbl" /> &nbsp; I accept the user Agreement.
                                                    </label>

                                                        
                                                    

                                                    <div class="space-1"></div>

                                                    <div class="clearfix">
                                                        <button type="reset" class="width-35 pull-left btn btn-sm btn-success">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                            <span class="bigger-110">Reset</span>
                                                        </button>

                                                        <button type="button" class="width-60 pull-right btn btn-sm btn-success">
                                                            <span class="bigger-110">Register</span>

                                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="toolbar center success">
                                            <a href="#" data-target="#login-box" class="back-to-login-link" style="color:#ffffff">
                                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                <span class="hidden-xs">Back to login</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
             $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible');//hide others
                $(target).addClass('visible');//show target
             });
            });
            
            
            
            //you don't need this, just used for changing background
            jQuery(function($) {
             $('#btn-login-dark').on('click', function(e) {
                $('body').attr('class', 'login-layout');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
             });
             $('#btn-login-light').on('click', function(e) {
                $('body').attr('class', 'login-layout light-login');
                $('#id-text2').attr('class', 'grey');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
             });
             $('#btn-login-blur').on('click', function(e) {
                $('body').attr('class', 'login-layout blur-login');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'light-blue');
                
                e.preventDefault();
             });
             
            });
        </script>
    </div>
</center>

                <slide style="background-image: url('images/slider11.png')" class=""></slide>
                 <slide style="background-image: url('images/slider2.png')" class="">
                </slide>
                <slide style="background-image: url('images/slider10.jpg')" class="">
                </slide>
                <slide style="background-image: url('images/slider12.jpg')" class="">
                </slide>
                <slide style="background-image: url('images/slider09.jpg')" class="">
                </slide>
               


                <!-- <div class="next"></div>
                <div class="prev"></div> -->
                
            </container>
        </div>


        <!-- Javascript -->
        
<!--        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/slider.js"></script>
        <script type="text/javascript">
            $('container').pureSlider({
                slideNode: 'slide'
            });

        </script>







        <!--[if !IE]> -->
        <script src="js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
             $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible');//hide others
                $(target).addClass('visible');//show target
             });
            });
            
            
            
            //you don't need this, just used for changing background
            jQuery(function($) {
             $('#btn-login-dark').on('click', function(e) {
                $('body').attr('class', 'login-layout');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
             });
             $('#btn-login-light').on('click', function(e) {
                $('body').attr('class', 'login-layout light-login');
                $('#id-text2').attr('class', 'grey');
                $('#id-company-text').attr('class', 'blue');
                
                e.preventDefault();
             });
             $('#btn-login-blur').on('click', function(e) {
                $('body').attr('class', 'login-layout blur-login');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'light-blue');
                
                e.preventDefault();
             });
             
            });
        </script>
    </body>

</html>