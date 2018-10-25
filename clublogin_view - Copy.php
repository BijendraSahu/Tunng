<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tunng</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body style="opacity:0.7;">
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <div class="row">
                       
                       
            <span><strong style="font-family:Century Gothic;font-size:55px;"><b style="color:#4286F1">T</b><b style="color:#FF2A2C">u</b><b style="color:#EBBE1D">n</b><b style="color:#4286F3">n</b><b style="color:#31A854">g</b></strong></span>               
          
         
                            <div class="description">
                            	<h3 style="color:#04158a;">
	                            	<strong>Empowering Business</strong>
                            	</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">                    
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top" style="background-color:#3e83d6; color:yellow; opacity:0.8">
                        		<div class="form-top-left">
                        			<h3 style="color:yellow;"><strong>Business Login</strong></h3>
                            		<!--<p><strong>Enter your username and password to log on:</strong></p>-->
                        		</div>                                
                        		<div class="form-top-right">
                        			<image src="images/tree.png">
                        		</div>
                            </div>
                            <div class="form-bottom" style="background-color:#3e83d6; color:yellow; opacity:0.9">
                                <form role="form" method="POST" class="login-form" action="controller/club-login.php">
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
                                <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
                                </div>
                                <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
                                </div>
                                <button type="submit" name="submit" style="color:#111;font-weight: bolder;font-size: 25px;" class="btn btn-success"> Sign In!</button>
                            </form>
                                <br/>
                               <a href="clubsignup_view.php" style="color: #FFFF4D;font-size:16px;font-weight: bold">Not a Business...?&nbsp;&nbsp;<span style="font-size:20px"> SignUp</span></a>
                                 <a href="index.php" class="fa fa-arrow-circle-left pull-right" style="color:#fff;font-size: 25px;margin-right: 5px;"></a><br/>
                                 <a href="forgotpassclub_view.php" style="color: #FFFF4D;font-size:16px;font-weight:bolder ">Forgot Password...?</a>
                                 <p class="pull-right">Back</p>
                            
                            </div>
                        </div>                      
                    </div>                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>