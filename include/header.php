<?php
session_start();
if (!isset($_SESSION['username']) && $_SESSION['username'] == '') {
    header("location:./login_view.php");
    return FALSE;
}
include 'controller/connection.php';
$username = $_SESSION['username'];
$sql1 = mysql_query("Select * from  user_reg where user_name='$username' ");
$user = mysql_fetch_array($sql1);
$notifications = mysql_query("SELECT * FROM tbl_noti order by id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Tunng</title>

    <meta name="description" content="overview &amp; stats"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/mynewstyle.css">
    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet"/>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="css/p-style.css"/>
    <link rel="stylesheet" href="css/emojilightbox.css"/>
    <link rel="stylesheet" href="css/comment_message_show.css"/>
    <link rel="stylesheet" href="assets/css/final_update.css"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/visible.js"></script>
    <style type="text/css">
        .go_back {
            position: absolute;
            right: 200px;
            background: #800080;
            color: #ffffff;
            padding: 0px 10px;
            border: none;
            height: 30px;
            line-height: 30px;
            top: 5px;
            border-radius: 4px;
            transition: .5s all;
        }
        .go_back:hover {
            background: #5f055f;
        }

        .go_back i {
            margin-right: 5px;
        }
        .box {
            display: inline-block;
            float: right;
            position: absolute;
            right: 180px;
            top: 14px;
        }
        .notifications {
            position: relative;
            max-width: 50px;
            margin: 0px auto;
        }
        .noti_icon {
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            background: #ffffff;
            color: #ff4e4e;
            border-radius: 30px;
            font-size: 18px;
        }
        .notification_counter {
            position: absolute;
            width: 25px;
            height: 25px;
            background: #ff6262;
            color: #ffffff;
            line-height: 25px;
            text-align: center;
            border-radius: 50%;
            right: -6px;
        }
        .notification_box {
            background: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .4);
            -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.28);
            width: 300px;
            min-height: 100px;
            display: none;
            position: absolute;
            top: 50px;
            z-index: 99999999;
            right: 0px;
        }
        .noti_title {
            width: 100%;
            padding: 5px 10px;
            background: #ff4e4e;
            color: #fff;
            font-size: 16px;
        }
        .notification_list {
            list-style: none;
            margin: 0px;
            padding: 0px;
            width: 300px;
            padding: 0px;
            max-height: 150px;
            overflow: auto;
        }
        .notification_list li {
            width: 100%;
            display: inline-block;
            border-bottom: solid thin #f7f7f7;
            padding: 5px 5px 5px 10px;
        }
        .show_list
        {
            display: block;
        }
        .notification_box:before {
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 8px 10px 8px;
            border-color: transparent transparent #ff4e4e transparent;
            position: absolute;
            top: -10px;
            right: 12px;
            z-index: 5;
        }
        /*Scroll Design */
        .style-scroll::-webkit-scrollbar {
            width: 10px;
            height: 10px;
            border: solid thin #949494;
        }

        .style-scroll::-webkit-scrollbar-button {
            width: 0;
            height: 0;
            display: none;
        }

        .style-scroll::-webkit-scrollbar-corner {
            background-color: transparent;
        }

        .style-scroll::-webkit-scrollbar-thumb {
            background-color: #ff4e4e;
            -webkit-box-shadow: inset 1px 1px 0 rgba(0, 0, 0, 0.10), inset 0 -1px 0 rgba(0, 0, 0, 0.07);
        }

    </style>
    <script type="text/javascript">
        function show_hide_notification(dis) {
            var chk_list = $(dis).find('.notification_box').attr('class');
            if (chk_list == "notification_box show_list") {
                $(dis).find('.notification_box').removeClass('show_list');
            } else {
                $(dis).find('.notification_box').addClass('show_list');
            }
        }
        $(window).scroll(function () {
            $('video').each(function () {
                if ($(this).visible(true)) {
                    $(this)[0].play();
                    //alert('play');
                } else {
                    $(this)[0].pause();
                    //alert('pause');
                }
            })
        });
        $(window).on('load', function () {
            var append_goback = '<button action="action" class="go_back" onclick="window.history.go(-1); return false;" type="button" value="Back" ><i class="fa fa-arrow-left"></i>Back</button>';
            $('#breadcrumbs').append(append_goback);
        })

    </script>
    <?php
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $first_part = $components[2];
    //echo $first_part;
    ?>
</head>

<body class="no-skin" style="overflow-x: none !important">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">

                <!-- <small> -->
                <table>
                    <tr>
                        <td><img src="images/tree.png" class="img-responsive"></td>
                        <!--									<td><img src="images/tunng.png" class="img-responsive"></td>-->
                    </tr>
                </table>


                <!-- </small> -->
            </a>
        </div>
        <div class="box">
            <div class="notifications" onclick="show_hide_notification(this);">
                <i class="fa fa-bell noti_icon"></i>
                <!--                            <span class="notification_counter">5</span>-->

                <div class="notification_box">
                    <div class="noti_title"><i class="fa fa-bell"></i> Notification</div>
                    <ul class="notification_list style-scroll">
                        <?php
                        while ($notifications_all = mysql_fetch_array($notifications)) {
                            ?>
                            <li>
                                <span class="text"><?php echo $notifications_all['notification']; ?></span>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <!--                                <ul class="notification_list">-->
                    <!---->
                    <!--                                    <li>-->
                    <!---->
                    <!--                                        <span class="text">Someone Like Your Post</span>-->
                    <!--                                    </li>-->
                    <!--                                    <li>-->
                    <!---->
                    <!--                                        <span class="text">Someone Like Your Photo</span>-->
                    <!--                                    </li>-->
                    <!--                                    <li>-->
                    <!---->
                    <!--                                        <span class="text">Someone Dislike Your Post</span>-->
                    <!--                                    </li>-->
                    <!--                                    <li>-->
                    <!---->
                    <!--                                        <span class="text">Someone Comment on Your Post</span>-->
                    <!--                                    </li>-->
                    <!--                                </ul>-->
                </div>
            </div>
        </div>
        <div class="navbar-buttons navbar-header pull-right"
             style="position: absolute;top:0px;right:0px;border:0px !important" role="navigation">
            <ul class="nav ace-nav" style="background:none !important;">


                <li class="light-blue dropdown-modal" style="border:0px">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <?php
                        if ($user['member_photo'] != '') {
                            ?>
                            <img class="nav-user-photo" src="images/member_photo/<?php echo $user['member_photo']; ?>"
                                 alt="Jason's Photo" height="41px"/>
                            <?php

                        } else {
                            ?>
                            <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo"/>
                            <?php
                        }
                        ?>

                        <span class="user-info">
									<small> Welcome Member!</small>
                            <?php echo $_SESSION['username']; ?>
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>




                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


                        <li>
                            <?php if ($first_part != "member_renew.php") {
                                ?><a href="member-profile.php">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                                <?php

                            }
                            ?>

                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="controller/logout.php">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--                    /.navbar-container -->
</div>