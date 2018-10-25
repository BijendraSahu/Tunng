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
    <!--    <script src='https://connect.facebook.net/en_US/all.js'></script>-->

    <!-- End WOWSlider.com HEAD section -->
    <style>
        .btn-social{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-social :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}
        .btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}
        .btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{background-image:none}
        .btn-facebook.disabled,.btn-facebook[disabled],fieldset[disabled] .btn-facebook,.btn-facebook.disabled:hover,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook:hover,.btn-facebook.disabled:focus,.btn-facebook[disabled]:focus,fieldset[disabled] .btn-facebook:focus,.btn-facebook.disabled:active,.btn-facebook[disabled]:active,fieldset[disabled] .btn-facebook:active,.btn-facebook.disabled.active,.btn-facebook[disabled].active,fieldset[disabled] .btn-facebook.active{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}
    </style>

</head>

<body style="overflow-y: 0px;overflow-x: 0px;">
<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1903357076638110',
            xfbml: true,
            version: 'v3.1'
        });
        FB.AppEvents.logPageView();
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="container">
    <div class="row">
        <div class="col-md-4" style="padding:0px;margin:0px"></div>
        <div class="col-xs-12 col-md-4 lovekesh" style="padding:0px;background:#F7F7F7">

            <!-- Form starting from here -->
            <center>
                <h4 class="loginheadt">Member Login</h4>
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
            <form method="post" class="form-signin mg-btm" action="controller/member-login.php" style="margin:auto">


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
                            $sql = mysql_query("Select * from  user_reg where verification_code='" . $_GET['verification'] . "'");
                            echo mysql_error();
                            if (mysql_num_rows($sql) == 1) {
                                $sql = mysql_query("Update  user_reg SET verification_code='done' where verification_code='" . $_GET['verification'] . "'");
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
                               autofocus maxlength="30"/>
                        <input type="password" name="password" class="form-control" placeholder="Password" required
                               maxlength="20"/>
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
                            <a href="forgotpassmember_view.php" style="color:#800080">Forgot password?</a>
                        </center>
                    </div>

<!--                    <div class="section">-->
<!--                        <br>-->
<!--                        <center>-->
<!--                            <a href="pin_member.php" style="color:#800080">Login via PIN</a>-->
<!--                        </center>-->
<!--                    </div>-->

                    <div class="section">
                        <br>
                        <center>
<!--                            <a href="#" style="color:#800080">Login via Facebook</a>-->
                            <a class="btn btn-block btn-social btn-facebook" onclick="fblogin()">
                                <i class="mdi mdi-facebook"></i> Sign in with Facebook
                            </a>
                            <!--                            <fb:login-button scope="public_profile,email" type="button" onclick="fblogin()">Login via-->
                            <!--                                Facebook-->
                            <!--                            </fb:login-button>-->

                        </center>
                    </div>
                    <div>
                        <!--                        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">-->

                        <!--                        <button type="button" onclick="Facebook_sign_Up()">sign up</button>-->

                    </div>
                </div>


                <!-- ========= OR ========= -->
                <table border="0" align="center" width="80%">
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
                        <td colspan="3">
                            <div class="main text-center paddiintab">
                                <div class="row">
                                    <div class="col-md-12" style="padding:0px">
                                        <a href="usersignup_view.php" class="btn btn-default form-control"
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
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=1903357076638110&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <script>
        $(document).ready(function () {

            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
        });
        function fblogin() {
            FB.login(function (response) {
                if (response.status === 'connected') {
                    getInfo();
                    document.getElementById('status').innerHTML = 'We are connected.';
                    document.getElementById('login').style.visibility = 'hidden';
                } else if (response.status === 'not_authorized') {
                    document.getElementById('status').innerHTML = 'We are not logged in.'
                } else {
                    document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
                }
            }, {scope: 'email'});

        }
        function getInfo() {
            var ID, Name, Email, Picture;
            FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,email,picture.width(150).height(150)'}, function (response) {
                ID = response.id;
                Name = response.name;
                Email = response.email;
                Picture = response.picture.data.url;
//                alert(response.id);
//                alert(response.name);
//                alert(response.email);
                window.location.href = 'https://tunng.co/controller/member-login.php?fb=yes&fbid=' + response.id + '&fbname=' + response.name + '&fbemail=' + response.email;
//
            });
        }
    </script>

</body>
</html>