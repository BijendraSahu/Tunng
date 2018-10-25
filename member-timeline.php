<?php
include "include/header.php";
include "include/sidebar.php";
include 'controller/connection.php';
$product = mysql_query("SELECT * FROM pramotion order by entry_dt DESC");
?>

<div class="main-content">
    <div class="main-content-inner">

        <script type="text/javascript">

            function load_as_lightboxemoji() {
                var DocumentHeight = $(document).height();
                $('.as_lightbox_wrapperemoji').css('height', DocumentHeight); // Set document height for As_Lightbox wrapper
            }
            function ShowLightBox(DivId) {
                $('.as_lightbox_wrapperemoji').show(); // Show the wrapper
                $('#' + DivId + '').show(); // Show the Lightbox div, you can use another jQuery view functions such as fadeIn, fadeToggle for animations
            }
            function HideLightBox(DivId) {
                $('.as_lightbox_wrapperemoji').hide(); // Hide the As_Lightbox wrapper
                $('#' + DivId + '').hide(); // Hide the div
            }
            $(document).ready(function () {
                $('#as_lightbox_closeemoji').click(function () {
                    HideLightBox('Simple_Lightboxemoji'); // call the As_Lightbox close function
                    return false;
                });
                $('#lbcloseemoji').click(function () {
                    HideLightBox('Simple_Lightboxemoji'); // call the As_Lightbox close function
                    return false;
                });

//$('#changeImageemoji').click(function()
//{
//load_as_lightboxemoji();
//ShowLightBox('Simple_Lightboxemoji'); // call the As_Lightbox show function
//return false;
//});


            });
            function changeImageemoji(sid) {
                alert(sid);
                load_as_lightboxemoji();
                ShowLightBox('Simple_Lightboxemoji'); // call the As_Lightbox show function
                return false;
            }
            function checkvalue() {
                if (document.getElementById('searchtxt').value == '') {
                    return false;
                }
            }
        </script>
        <script>
            $(document).ready(function () {
                $(".tab-content button").click(function () {
                    alert("dfrsde");
                    var bidw = this.id;
                    var arr = bidw.split('/');
                    var bid = arr[0];
                    var id = arr[1];
                    var pval = $('#txtemoji').val();
                    $("#imgtr" + id).append("<img src='images/" + bid + ".png' alt='Close Lightbox'  />");

                    $('#txtemoji').val(pval + " " + bid);
                });


            });
        </script>


        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <!-- <i class="ace-icon fa fa-home home-icon"></i> -->
                    <!-- <a href="#">Home</a> -->
                </li>
                <li class="active"><a href="member-timeline.php">Timeline</a></li>
            </ul>

            <div class="nav-search" id="nav-search">
                <form class="form-search">
<span class="input-icon">
<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"/>
<i class="ace-icon fa fa-search nav-search-icon"></i>
</span>
                </form>
            </div>
        </div>
        <marquee onmouseover="this.stop();" onmouseout="this.start();"
                 style="text-transform:capitalize ;color:#800080;">
            <span class="promotions">Promotion :-</span>
            <?php
            while ($productres = mysql_fetch_array($product)) {
                ?>
                <span class="businame">
    <?php echo (strlen($productres['businessnm']) > 15) ? substr($productres['businessnm'], 0, 15) . ' . . .' : $productres['businessnm']; ?>
                    -<?php echo (strlen($productres['productname']) > 15) ? substr($productres['productname'], 0, 15) . ' . . .' : $productres['productname']; ?>
  </span>
                <span class="businame"> <?php echo $productres['price']; ?>&nbsp;|</span>
                <span style="position: relative;"></span>&nbsp;
                <?php
            }
            ?>
        </marquee>




        <div class="page-content" style="padding:0px">
            <div class="page-header">

            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="widget-box" style="border:0px;">
                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <div class="dialogs">
                                    <style>
                                        @media (max-width: 576px) {
                                            .panel-width {
                                                width: 100% !important;
                                            }
                                        }

                                        @media (min-width: 1200px) {
                                            .panel-width {
                                                width: 70% !important;
                                                margin: 0 auto 10px auto !important;
                                            }
                                        }
                                    </style>
                                    <?php
                                    $viewcbpost = mysql_query("Select cp.user_name,cp.srno,cp.club_name,cp.post,cp.post_image,cp.post_video,cp.emoji,cp.entry_dt,cp.commented_user_name,cb.club_image,cp.member_post_img,cp.member_post_video,cp.subject,cp.post_doc from club_post cp,club cb where cp.user_name=cb.user_login_id  and comment=0 ORDER BY cp.entry_dt desc");

                                    $i = 1;

                                    while ($viewcbpostdetl = mysql_fetch_array($viewcbpost)) {
                                        ?>
                                        <div class="panel panel-white post panel-shadow panel-width">

                                            <!--_________ Form _________ -->
                                            <form role="form" id="comment" name="comment" method="POST"
                                                  action="controller/member-post-comment.php"
                                                  enctype="multipart/form-data">

                                                <div class="post-heading">
                                                    <table border="0">
                                                        <tr>
                                                            <td rowspan="2">
                                                                <div class="pull-left image">
                                                                    <?php if ($viewcbpostdetl['club_image'] != '') { ?>
                                                                        <img src="images/club_photo/<?php echo $viewcbpostdetl['club_image']; ?>"
                                                                             class="img-circle avatar"
                                                                             alt="user profile image"
                                                                             style="height:35px;width:35px;">
                                                                    <?php } else { ?>
                                                                        <img src="images/defaultuser.png"
                                                                             class="img-circle avatar"
                                                                             alt="user profile image">
                                                                    <?php } ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#"><b><?php echo $viewcbpostdetl['club_name']; ?></b></a>
                                                                made a post.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <?php echo date('d/m/Y h:i:s', strtotime($viewcbpostdetl['entry_dt'])); ?>
                                                            </td>
                                                        </tr>
                                                    </table>


                                                    <!-- <div class="pull-left meta">


                                                    </div> -->

                                                </div>

                                                <div class="post-description">
                                                    <?php if ($viewcbpostdetl['subject'] == '') { ?>
                                                        <p>
                                                            <b style="color:#800080;">Subject :-</b>&nbsp;&nbsp;no
                                                            subject
                                                        </p>
                                                    <?php } else { ?>
                                                        <p>
                                                            <b style="color:#800080;">Subject
                                                                -</b>&nbsp;&nbsp;<?php echo $viewcbpostdetl['subject']; ?>
                                                        </p>
                                                    <?php } ?>
                                                    <p>
                                                        <?php echo $viewcbpostdetl['post']; ?>
                                                    </p>

                                                    <!-- _____________________asset video_1_______________-->
                                                    <div class="asset video">
                                                        <?php if ($viewcbpostdetl['post_image'] != '') { ?>
                                                            <img src="images/club_post_images/<?php echo $viewcbpostdetl['post_image']; ?>"
                                                                 class="img-responsive" alt="image not found."/>
                                                        <?php } ?>
                                                    </div>
                                                    <br/>
                                                    <div class="asset video">
                                                        <?php if ($viewcbpostdetl['post_video'] != '') { ?>
                                                            <iframe width="450" height="200"
                                                                    src="images/club_post_videos/<?php echo $viewcbpostdetl['post_video']; ?>"
                                                                    frameborder="0" a>sorry
                                                            </iframe>
                                                            <!--<iframe class="embed-responsive embed-responsive-16by9"  src="assets/img/club_post_videos/<?php echo $viewcbpostdetl['post_video']; ?>" frameborder="0"></iframe>-->
                                                        <?php } ?>
                                                    </div>
                                                    <?php if ($viewcbpostdetl['post_doc'] != '') { ?>
                                                        <!-- <div class ="col-md-12"> -->
                                                        <div class="asset video filedox">
                                                            <p class="fa fa-file-text"></p>

                                                            <?php
                                                            $str = $viewcbpostdetl['post_doc'];
                                                            $res = explode(".", $str);
                                                            echo "." . $res[1];
                                                            ?> File
                                                            <a href="images/club_post_doc/<?php echo $viewcbpostdetl['post_doc']; ?>"
                                                               target="_self">Download</a>

                                                        </div>
                                                        <!-- </div> -->
                                                    <?php } ?><br/>
                                                    <div class="qa-message-content">
                                                        <?php //echo $viewcbpostdetl[1];
                                                        ?>
                                                        <?php
                                                        if ($viewcbpostdetl[6] != '') {
                                                            $emojis = $viewcbpostdetl[6];
                                                            $arr = @split(" ", $emojis);

                                                            for ($i = 1; $i < sizeof($arr); $i++) {
                                                                $emojiimg = $arr[$i];
                                                                ?>
                                                                <img src="images/<?php echo $emojiimg . '.png'; ?>"
                                                                     style="height: 80px;width: 80px;"/>
                                                            <?php }
                                                        } ?>
                                                    </div>
                                                    <div style="border:0px solid red;padding: 3px 0px 0px 0px;">


                                                        <button class="btn btn-info btn-sm" type="submit"
                                                                style="background-color:#4AD2EE;color:white;font-weight: bold;">
                                                            Post
                                                        </button>
                                                        <div id="like<?php echo $viewcbpostdetl[1]; ?>"
                                                             style="background-color:#4AD2EE;color:white;"
                                                             class="btn btn-info btn-sm stat-item likebtn">
                                                            <i class="fa fa-thumbs-up icon" aria-hidden='true'></i>
                                                            <?php
                                                            $sqlcl = mysql_query("Select * from club_post where srno=$viewcbpostdetl[1]");
                                                            $tlikarr = mysql_fetch_array($sqlcl);
                                                            echo $tlikarr[9];
                                                            ?>
                                                        </div>
                                                        <!-- <button class="btn btn-info" type="submit" id="changeImage">Image</button>-->
                                                        <a class="btn btn-info btn-sm"
                                                           style="background-color:#4AD2EE;color:white;"
                                                           data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapseone<?php echo $i; ?>"> <i
                                                                    class='fa fa-camera'></i></a>

                                                        <a class="btn btn-info btn-sm"
                                                           style="background-color:#4AD2EE;color:white;"
                                                           data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapseTwo<?php echo $i; ?>"> <i
                                                                    class='fa fa-video-camera'></i></a>

                                                        <a class="btn btn-info btn-sm"
                                                           style="background-color:#4AD2EE;color:white;"
                                                           data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapseThree<?php echo $i; ?>"> <i
                                                                    class='fa fa-file-text'></i></a>
                                                        <!--                            <a type="button" id="changeImageemoji" onclick="changeImageemoji(<?php echo $i; ?> );" class="btn btn-sm btn-primary" title="Post file"><i class="fa fa-smile-o" aria-hidden="true"></i></a>
                                    <k id='imgtr<?php echo $i; ?>'></k>
                                    -->
                                                        <div class="as_lightbox_wrapperemoji"></div>
                                                        <div style="/*width:500px; */background-color: #fff;"
                                                             class="as_lightbox_containeremoji"
                                                             id="Simple_Lightboxemoji">
                                                            <div class="as_lightboxemoji">
                                                                <div class="as_lightbox_closeemoji"
                                                                     id="as_lightbox_closeemoji">
                                                                    <img src="images/close_flat_icon.png"
                                                                         alt="Close Lightbox" title="Close"/>
                                                                </div>
                                                                <div class="as_clearemoji"></div>
                                                                <center>
                                                                    <div class="wrapemoji">
                                                                        <!-- image uploading form -->

                                                                        <div class="col-xs-12 col-md-12">
                                                                            <div class="span12">
                                                                                <p class="lead"></p>
                                                                                <div id="tab" class="btn-group"
                                                                                     data-toggle="buttons-radio">
                                                                                    <a href="#Happy" class="emgbtn"
                                                                                       data-toggle="tab">Happy</a>
                                                                                    <a href="#Sad" class="emgbtn"
                                                                                       data-toggle="tab">Sad</a>
                                                                                    <a href="#In_Love" class="emgbtn"
                                                                                       data-toggle="tab"> Love</a>
                                                                                    <a href="#Angry" class="emgbtn"
                                                                                       data-toggle="tab">Angry</a>
                                                                                    <a href="#Funny" class="emgbtn"
                                                                                       data-toggle="tab">Funny</a>

                                                                                </div>

                                                                                <div class="tab-content"
                                                                                     style="border:0px;">
                                                                                    <div class="tab-pane stckrimg"
                                                                                         id="Happy">
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy2.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy2<?php echo '/' . $i; ?>'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy3.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy3<?php echo '/' . $i; ?>'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy4.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy4<?php echo '/' . $i; ?>'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy5.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy5<?php echo '/' . $i; ?>'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy6.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy6<?php echo '/' . $i; ?>'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy7.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy7'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy8.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy8'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy9.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy9'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy10.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy10'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy11.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy11'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy12.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy12'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy13.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy13'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy14.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy14'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy1.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy1'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy16.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy16'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/happy16.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='happy16'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>

                                                                                    </div>
                                                                                    <div class="tab-pane stckrimg"
                                                                                         id="Sad">

                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad1.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad1'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad2.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad2'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad3.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad3'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad4.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad4'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad5.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad5'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad6.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad6'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad7.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad7'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad8.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad8'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad9.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad9'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad10.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad10'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad11.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad11'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad12.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad12'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad13.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad13'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad14.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad14'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad15.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad15'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/sad16.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='sad16'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                    </div>
                                                                                    <div class="tab-pane stckrimg"
                                                                                         id="In_Love">
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love1.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='love1'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love2.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='love2'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love3.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='love3'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love4.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='love4'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love5.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='love5'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love6.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='love6'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love7.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='love7'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love8.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='love8'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love9.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='love9'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love10.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='love10'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love11.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='love11'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love12.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='love12'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love13.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='love13'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love14.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='love14'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love15.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='love15'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/love16.png'); height: 100px; width:100px;  "
                                                                                                type="button"
                                                                                                id='love16'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>

                                                                                    </div>
                                                                                    <div class="tab-pane stckrimg"
                                                                                         id="Angry">
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang1.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang1'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang2.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang2'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang3.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang3'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang4.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang4'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang5.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang5'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang6.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang6'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang7.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang7'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang8.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang8'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang9.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang9'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang10.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang10'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang11.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang11'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang12.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang12'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang13.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang13'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang14.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang14'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang15.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang15'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/ang16.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='ang16'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>

                                                                                    </div>
                                                                                    <div class="tab-pane stckrimg"
                                                                                         id="Funny">
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun1.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun1'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun2.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun2'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun3.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun3'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun4.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun4'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun5.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun5'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun6.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun6'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun7.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun7'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun8.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun8'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun9.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun9'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun10.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun10'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun11.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun11'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun12.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun12'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun13.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun13'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun14.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun14'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun15.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun15'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>
                                                                                        <button class="emojibtn"
                                                                                                style="background-repeat: no-repeat; background-image:url('images/fun16.png'); height: 100px; width:100px;  "
                                                                                                type="button" id='fun16'
                                                                                                alt="Close Lightbox"
                                                                                                title="Close"></button>

                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div><!--wrap-->
                                                                </center>

                                                            </div>
                                                        </div>


                                                        <div class="panel-group" id="accordion">
                                                            <div id="collapseone<?php echo $i; ?>"
                                                                 class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <h3 class="lead">Upload Image</h3>
                                                                    <input type="file" name="fileuploadimg"
                                                                           id="fileuploadimg"/> <br/>
                                                                    <div class="row">
                                                                        <div class="col-xs-12 text-center">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseTwo<?php echo $i; ?>"
                                                                 class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <h3 class="lead">Upload Video</h3>
                                                                    <input type="file" id="fileuploadvideo"
                                                                           name="fileuploadvideo"> <br/>
                                                                    <div class="row">
                                                                        <div class="col-md-12 text-center">
                                                                            <div class="roundedVideo">
                                                                                <div class="asset video">
                                                                                    <!-- <iframe width="450" height="200" src="http://www.youtube.com/embed/kfVsfOSbJY0?wmode=opaque" frameborder="0"></iframe>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="collapseThree<?php echo $i; ?>"
                                                                 class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <h3 class="lead">Upload File</h3>
                                                                    <input type="file" id="fileuploaddoc"
                                                                           name="fileuploaddoc"> <br/>
                                                                    <div class="row">
                                                                        <div class="col-md-12 text-center">
                                                                            <div class="roundedVideo">
                                                                                <div class="asset video">
                                                                                    <!-- <iframe width="450" height="200" src="http://www.youtube.com/embed/kfVsfOSbJY0?wmode=opaque" frameborder="0"></iframe>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Footer posts-->
                                                <div class="post-footer">
                                                    <div class="input-group col-md-6">
                                                        <input type="hidden" id="clubid" name="clubid"
                                                               value="<?php echo $viewcbpostdetl['user_name']; ?>"/>
                                                        <input type="hidden" id="clubname" name="clubname"
                                                               value="<?php echo $viewcbpostdetl['club_name']; ?>"/>
                                                        <input type="hidden" id="txtpost" name="txtpost"
                                                               value="<?php echo $viewcbpostdetl['srno']; ?>"/>
                                                        <input class="form-control " placeholder="Add a comment"
                                                               type="text" id="insert_comment" name="insert_comment">
                                                        <span class="input-group-addon" style="padding:0px;">
                          <input type="submit" class="btn btn-info " value="Comment" name="" style="border-radius: 0px"> 
                      </span>
                                                    </div>
                                                    <ul class="" style="margin-left:30px !important">
                                                        <?php
                                                        $commentid = $viewcbpostdetl['srno'];
                                                        include 'controller/connection.php';
                                                        $viewcmt = mysql_query("Select * from club_post where comment='$commentid' ORDER BY entry_dt desc");

                                                        while ($viewcbcmtdetl = mysql_fetch_array($viewcmt)) {
                                                            $imgid = $viewcbcmtdetl['commented_user_name'];
                                                            $mbrimg = mysql_query("Select * from  user_reg where user_name='$imgid'");
                                                            $mbrimgdetl = mysql_fetch_array($mbrimg);
                                                            ?>

                                                            <ul class="comments-list" style="margin:0px">
                                                                <li class="comment">
                                                                    <div class="comment-body">
                                                                        <table border="0"
                                                                               style="margin:0 0 15px -30px;">
                                                                            <tr>
                                                                                <td rowspan="2">
                                                                                    <?php if ($mbrimgdetl['member_photo'] != '') { ?>
                                                                                        <img class="avatar"
                                                                                             src="images/member_photo/<?php echo $mbrimgdetl['member_photo']; ?>"
                                                                                             alt="image not found"
                                                                                             style="width:35px;height:35px;">
                                                                                    <?php } else { ?>
                                                                                        <img class="avatar"
                                                                                             src="images/defaultuser.png"
                                                                                             alt="image not found"
                                                                                             style="width:35px;height:35px;">
                                                                                    <?php } ?>

                                                                                    <!-- <div class="comment-heading"> -->
                                                                                </td>
                                                                                <td>
                                                                                    <h4 class="commname"><?php echo $viewcbcmtdetl['commented_user_name']; ?></h4>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <h5 class="commdate"><?php echo date('d/m/Y h:i:s', strtotime($viewcbcmtdetl['entry_dt'])); ?></h5>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- </div> -->

                                                                        <?php if ($viewcbcmtdetl['member_post_img'] != '') { ?>
                                                                            <div class="asset video">
                                                                                <!--<img src="assets/img/club_post_videos/<?php //echo $postdetl[2];?>" style="height: 150px;width: 180px;"/>-->
                                                                                <img src="images/member_post_images/<?php echo $viewcbcmtdetl['member_post_img']; ?>"
                                                                                     frameborder="5"
                                                                                     style="border:0px solid red;margin:30px 0 0 -15px;"/>
                                                                            </div>

                                                                        <?php }
                                                                        if ($viewcbcmtdetl['member_post_video'] != '') { ?>

                                                                            <div class="asset video">

                                                                                <!--<img src="assets/img/club_post_videos/<?php //echo $postdetl[2];?>" style="height: 150px;width: 180px;"/>-->

                                                                                <iframe src="images/member_post_videos/<?php echo $viewcbcmtdetl['member_post_video']; ?>"
                                                                                        frameborder="0"
                                                                                        class="framestyle"></iframe>

                                                                            </div>
                                                                        <?php }
                                                                        if ($viewcbcmtdetl['member_post_doc'] != '') { ?>

                                                                            <!-- <div class ="col-md-12" style="border:0px solid red;margin-left: -4em;">-->

                                                                            <div class="asset video filedox">
                                                                                <p class="fa fa-file-text"></p>
                                                                                <?php
                                                                                $str = $viewcbcmtdetl['member_post_doc'];
                                                                                $res = explode(".", $str);
                                                                                echo "." . $res[1];
                                                                                ?> File

                                                                                <a href="images/club_post_doc/<?php echo $viewcbcmtdetl['member_post_doc']; ?>"
                                                                                   target="_self"> Download</a>
                                                                                <!--<img src="assets/img/club_post_videos/<?php //echo $postdetl[2];?>" style="height: 150px;width: 180px;"/>-->

                                                                            </div><br/>
                                                                            <!--                                </div>-->
                                                                        <?php }
                                                                        if ($viewcbcmtdetl['post'] != '') { ?>

                                                                            <div class="asset video commdesc">
                                                                                <p><?php echo $viewcbcmtdetl['post']; ?></p>
                                                                            </div>
                                                                        <?php } ?>

                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <!-- __End of Footer posts__ -->

                                            </form>

                                        </div>
                                        <?php
                                        $i++;
                                    }

                                    ?>
                                    <!--                                                                                                                         end timeline one       -->


                                </div>
                            </div><!-- /.widget-main -->
                        </div><!-- /.widget-body -->
                    </div><!-- /.widget-box -->
                </div>
            </div>
            <!-- /.row -->

            <!-- PAGE CONTENT ENDS -->


        </div><!-- /.page-content -->
        <?php
        include "include/footer.php";
        ?>

        <script>
            $(document).ready(function () {

                $('.likebtn').click(function () {
                    var divid = this.id;

                    var msgid = divid.substring(4);
                    $.ajax({
                        url: 'controller/likes.php',
                        method: 'POST',
                        data: 'msgid=' + msgid,

                        success: function (result) {
                            var divid = "'#like" + msgid + "'";

                            $("#like" + msgid).html("<i class='fa fa-thumbs-up' aria-hidden='true'></i>" + result);
                        }
                    });
                });
            });

        </script>
    </div>
</div><!-- /.main-content -->

<style>
    .prodh {
        font-family: serif !important;
        color: #800080 !important;
    }

    .prodt {
        font-family: serif !important;
        color: #800080 !important;
    }

    /*.onribbon_price:before {
      content: "$ " !important;
    }*/
    .onribbon_price {
        position: absolute !important;
        /*left:0px !important;*/
        top: 10px !important;
        z-index: 9 !important;
        transform: rotate(-45deg) !important;
        font-weight: 900 !important;
        color: #800080 !important;
        /*border:1px solid black !important;*/
    }

    .as_lightbox_wrapperp {
        width: 50% !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        z-index: 100 !important;
        display: none !important;

    }

    .as_lightbox_closep {
        position: absolute !important;
        right: 2px !important;
        z-index: 999 !important;
        height: 20px !important;
        width: 20px !important;
        top: 10px !important;
        right: 10px !important;
        cursor: pointer !important;

    }

    #lbclosep {
        cursor: pointer !important;
    }

    .as_lightbox_containerp {
        z-index: 101 !important;
        /*position:fixed !important;*/
        background: #FFF !important;
        left: 30% !important;
        top: 22% !important;
        padding: 1px !important;
        border-radius: 5px !important;
        display: none !important;
    / / border: 2 px solid red !important;
    / / width: 50 px !important;
    }

    .wrapp {
        width: auto !important;
        margin: 10px auto !important;
        padding: 10px 15px !important;
        background: white !important;
        border: 2px solid #DDDDDD !important;
        -webkit-border-radius: 5px !important;
        -moz-border-radius: 5px !important;
        border-radius: 5px !important;
        text-align: center !important;
        overflow: auto !important;
    }

    img#uploadPreviewp {
        border: 0 !important;
        border-radius: 3px !important;
        -webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27) !important;
        box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27) !important;
        margin-bottom: 30px !important;
        overflow: hidden !important;
    }

    input[type="submit"] {
        border-radius: 10px !important;
        background-color: #800080 !important;
        border: 0 !important;
        color: white !important;
        font-weight: bold !important;
        font-style: italic !important;
        padding: 6px 15px 5px !important;
        cursor: pointer !important;

    }

    .as_lightbox_wrapper {
        width: 50% !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        z-index: 100 !important;
        display: none !important;

    }

    .as_lightbox_close {
        position: absolute !important;
        right: 2px !important;
        z-index: 999 !important;
        height: 20px !important;
        width: 20px !important;
        top: 10px !important;
        right: 10px !important;
        cursor: pointer !important;

    }

    #lbclose {
        cursor: pointer !important;
    }

    .as_lightbox_container {
        z-index: 101 !important;
        position: fixed !important;
        background: #000 !important;
        /*left:30% !important;*/
        top: 22% !important;
        padding: 1px !important;
        border-radius: 5px !important;
        display: none !important;
    / / border: 2 px solid red !important;
    / / width: 50 px !important;
    }

    .wrap {
        width: auto !important;
        margin: 0px !important;
        padding: 10px 15px !important;
        background: white !important;
        border: 2px solid #DDDDDD !important;
        -webkit-border-radius: 5px !important;
        -moz-border-radius: 5px !important;
        border-radius: 5px !important;
        text-align: center !important;
        overflow: auto !important;
    }

    img#uploadPreview {
        border: 0 !important;
        border-radius: 3px !important;
        -webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27) !important;
        box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27) !important;
        margin-bottom: 30px !important;
        overflow: hidden !important;
    }

    input[type="submit"] {
        border-radius: 10px !important;
        background-color: #800080 !important;
        border: 0 !important;
        color: white !important;
        font-weight: bold !important;
        font-style: italic !important;
        padding: 6px 15px 5px !important;
        cursor: pointer !important;

    }

    /*.fullonclick {
      background:black !important;
      opacity:.6 !important;
      width:100% !important;
      height:100% !important;
      position: absolute !important;
      z-index: 9
    }*/

    .panel-shadow {
        box-shadow: #aaaaaa 0 0 8px !important;
    }

    .panel-white {
        border: 1px solid #dddddd !important;
    }

    .panel-white .panel-heading {
        color: #333 !important;
        background-color: #fff !important;
        border-color: #ddd !important;
    }

    .panel-white .panel-footer {
        background-color: #fff !important;
        border-color: #ddd !important;
    }

    .post .post-heading {
        height: 95px !important;
        padding: 20px 15px !important;
    }

    .post .post-heading .avatar {
        width: 35px !important;
        height: 35px !important;
        display: block !important;
        margin-right: 15px !important;
    }

    .post .post-heading .meta .title {
        margin-bottom: 0 !important;
    }

    .post .post-heading .meta .title a {
        color: black !important;
    }

    .post .post-heading .meta .title a:hover {
        color: #aaaaaa !important;
    }

    .post .post-heading .meta .time {
        margin-top: 8px !important;
        color: #999 !important;
    }

    .post .post-image .image {
        width: 100% !important;
        height: auto !important;
    }

    .post .post-description {
        padding: 15px !important;
    }

    .post .post-description p {
        font-size: 14px !important;
    }

    .post .post-description .stats {
        margin-top: 20px !important;
    }

    .post .post-description .stats .stat-item {
        display: inline-block !important;
        margin-right: 15px !important;
    }

    .post .post-description .stats .stat-item .icon {
        margin-right: 8px !important;
    }

    .post .post-footer {
        border-top: 1px solid #ddd !important;
        padding: 15px !important;
    }

    .post .post-footer .input-group-addon a {
        color: #454545 !important;
    }

    .post .post-footer .comments-list {
        padding: 0 !important;
        margin-top: 20px !important;
        list-style-type: none !important;
    }

    .post .post-footer .comments-list .comment {
        display: block !important;
        width: 100% !important;
        margin: 20px 0 0 -26px !important;
    }

    .post .post-footer .comments-list .comment .avatar {
        width: 35px !important;
        height: 35px !important;
        border-radius: 100% !important;
    }

    .post .post-footer .comments-list .comment .comment-heading {
        display: block !important;
        width: 100% !important;
    }

    .post .post-footer .comments-list .comment .comment-heading .user {
        font-size: 14px !important;
        font-weight: bold !important;
        display: inline !important;
        margin-top: 0 !important;
        margin-right: 10px !important;
    }

    .post .post-footer .comments-list .comment .comment-heading .time {
        font-size: 12px !important;
        color: #aaa !important;
        margin-top: 0 !important;
        display: inline !important;
    }

    .post .post-footer .comments-list .comment .comment-body {
        margin-left: 30px !important;
    }

    .post .post-footer .comments-list .comment > .comments-list {
        margin-left: 50px !important;
    }

    .promotions {
        position: relative !important;
        vertical-align: middle !important;
        color: blue !important;
        text-shadow: 0 0 3px white !important;
        font-size: 18px !important;
        font-weight: normal !important;
    }

    .businame {
        color: black !important;
        font-size: 16px !important;
        vertical-align: middle !important;
        position: relative !important;
        font-weight: bold !important;
    }

    .framestyle {
        width: 240px !important;
        border: 1px solid #dddddd !important;
        /*padding-left:0px !important;*/
        margin: 0px !important;
    }

    ul.comtopmar {
        border: 0px solid black !important;
        margin-top: -15px
    }

    .userresponce {
        border: 0px solid black !important;
        margin-top: -15px
    }

    a:hover {
        text-decoration: none !important;
    }

    .rehover:hover {
        background-image: url(images/replyhover.png) !important;
    }

    .avatar2 {
        width: 35px !important;
        height: 35px !important;
        border-radius: 100% !important;
        border: 2px solid green !important;

    }

    .commname {
        font-size: 14px !important;
        color: #800080 !important;
        font-weight: 900 !important;
        margin: 0px !important;
        border: 0px solid red !important;
        padding-left: 5px !important;
    }

    .commdate {
        font-size: 11px !important;
        color: #000000 !important;
        margin: 0px !important;
        padding-left: 5px !important;
    }

    .commdesc:before {
        content: "Comment" !important;
        color: #800080 !important;
        font-size: 11px !important;
        text-decoration: underline !important;
    }

    .commdesc {
        padding: 5px 5px 0px 5px
    }

    .filedox {
        border: 1px solid #800080 !important;
        font-size: 18px !important;
        padding: 5px !important;
        color: #800080 !important;
        background: #DDDDDD !important;
        width: 120px !important;
        margin: 10px !important;
    }

    .filedox p {
        color: #800080 !important;
        font-size: 30px !important;
        padding: 0px !important;
    }

    .filedox a {
        color: #800080 !important;
        /*border:1px solid #ffffff !important;*/
    }
</style>