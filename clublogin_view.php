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

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css"/>
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

</head>

<body style="overflow-y: 0px;overflow-x: 0px;">

<div class="container">
    <div class="row">
        <div class="col-md-4" style="padding:0px;margin:0px"></div>
        <div class="col-xs-12 col-md-4 lovekesh" style="padding: 0px">

            <!-- Form starting from here -->
            <center>
                <h4 class="loginheadt">Business Login</h4>
                <div class="social-box">
                    <!-- Start Slider section -->
                    <div id="wowslider-container1" style="margin:0px;padding:0px;">
                        <div class="ws_images">
                            <ul>
                                <li><img src="data1/images/slider2.jpg" alt="slider2" title="slider2" id="wows1_0"/>
                                </li>
                                <li><img src="data1/images/slider09.jpg" alt="slider09" title="slider09" id="wows1_1"/>
                                </li>
                                <li><img src="data1/images/slider10.jpg" alt="slider10" title="slider10" id="wows1_2"/>
                                </li>
                                <li><img src="data1/images/slider11.jpg" alt="bootstrap image slider" title="slider11"
                                         id="wows1_3"/></li>
                                <li><img src="data1/images/slider12.jpg" alt="slider12" title="slider12" id="wows1_4"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                    <script type="text/javascript" src="engine1/script.js"></script>
                    <!-- End WOWSlider.com BODY section -->


                </div>
            </center>
            <form method="post" class="form-signin mg-btm" action="controller/club-login.php" style="margin:auto">


                <div class="main" style="padding-bottom:0px">
                    <center>

                        <?php
                        if (isset($_SESSION['registration_success']) && $_SESSION['registration_success'] != '') {
                            print "<div class='alert alert-success'><p style='text-align:justify;'>";
                            echo $_SESSION['registration_success'];
                            unset($_SESSION['registration_success']);
                            print "</p></div>";
                        }
                        if (isset($_GET['verification']) && $_GET['verification'] != '') {
                            include './controller/connection.php';
                            $sql = mysql_query("Select * from club where verification_code='" . $_GET['verification'] . "'");
                            echo mysql_error();
                            if (mysql_num_rows($sql) == 1) {
                                $sql = mysql_query("Update club SET verification_code='done' where verification_code='" . $_GET['verification'] . "'");
                                print "<div class='alert alert-success'>";
                                echo "Your Email Verification is complete successfully, please login.";
                                print "</div>";
                            }
                        }
                        if (isset($_SESSION['emailvarificationerr']) && $_SESSION['emailvarificationerr'] != '') {
                            print "<div class='alert alert-danger'><p style='text-align:justify;'>";
                            echo $_SESSION['emailvarificationerr'];
                            unset($_SESSION['emailvarificationerr']);
                            print "</p></div>";
                        }
                        if (isset($_SESSION['incorrectusernm']) && $_SESSION['incorrectusernm'] != '') {
                            print "<div class='alert alert-danger'><p style='text-align:justify;'>";
                            echo $_SESSION['incorrectusernm'];
                            unset($_SESSION['incorrectusernm']);
                            print "</p></div>";
                        }
                        if (isset($_SESSION['allfieldreq']) && $_SESSION['allfieldreq'] != '') {
                            print "<div class='alert alert-danger'><p style='text-align:justify;'>";
                            echo $_SESSION['allfieldreq'];
                            unset($_SESSION['allfieldreq']);
                            print "</p></div>";
                        }
                        ?>
                        <input type="text" name="username" class="form-control" placeholder="Username / mobile" required
                               autofocus/>
                        <input type="password" name="password" class="form-control" placeholder="Password" required/>
                        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block"
                               style="background:#800080;border:1px solid #800080;font-weight: 600"
                               onmouseover="this.style.background='#960196';this.style.border='1px solid #800080'"
                               onmouseleave="this.style.background='#800080'"/>

                    </center>
                    <div class="row">
                        <div class="col-md-12">

                            <i class="icon-twitter"></i>
                        </div>
                        <center>
                            <a href="forgotpassclub_view.php" style="color:#800080">Forgot password?</a>
                        </center>
                    </div>

<!--                    <div class="section">-->
<!--                        <br/>-->
<!--                        <center>-->
<!--                            <a href="pin.php" style="color:#800080">Login via PIN</a>-->
<!--                        </center>-->
<!--                    </div>-->


                </div>


                <!-- ========= OR ========= -->
                <table border="0" align="center" width="80%" style="height:0px">
                    <tr>
                        <td width="40%">
                            <hr class="hrstyle">
                        </td>
                        <td rowspan="2" width="20%">
                            <p style="color:black;text-align: center;margin:0px">OR</p>
                        </td>
                        <td width="40%">
                            <hr class="hrstyle">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="height:0px">
                            <div class="main text-center paddiintab">
                                <div class="row">
                                    <div class="col-md-12" style="padding:0px">
                                        <a href="clubsignup_view.php" class="btn btn-default form-control"
                                           style="border:1px solid #800080;color:#800080;"
                                           onmouseover="this.style.background='rgba(150, 1, 150, 0.1)'"
                                           onmouseleave="this.style.background='transparent'">
                                            <i class="icon-twitter"></i>Create New Account
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>


            </form>

            <!-- Form ending -->
        </div>
        <div class="col-md-4"></div>
    </div>


</body>
</html>